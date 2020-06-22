<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Slide;
use App\Type_product;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function __construct()
    {
        $newProduct = Product::take(4)->orderByDesc('created_at')->get();
        $slide = Slide::all();
        view()->share(['newProduct'=>$newProduct,
                        // 'typeProduct'=>$typeProdct,
                        'slide'=>$slide,
                        ]);
    }

    //signin
    public function getUserSignIn(){
        return view('website.pages.signin');
    }

    public function postUserSignin (Request $rq){
        $email = $rq->email;
        $pass = $rq->pass;
        if(Auth::attempt(['email' => $email, 'password' => $pass])){
            return redirect('home');
        }
        else return redirect()->back();
    }

    //signup
    public function getUserSignUp(){
        return view('website.pages.sign_up');
    }
    public function postUserSignup(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:users,email',
            'pass' => 'required|min:6|max:30',
            'rePass' => 'required|same:pass',
            'address' => 'required',
            'fullName' => 'required|min:2|max:30',
            'phone' => 'required'
        ],[
            'email.required' => 'Chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'pass.required' => 'Chưa nhập mật khẩu',
            'pass.min' => 'Mật khẩu ít nhất 6 ký tự',
            'pass.max' => 'Mật khẩu nhiều nhất 30 ký tự',
            'rePass.required'=>'Chưa nhập nhập lại mật khẩu',
            'rePass.same' =>'Nhập lại mật khẩu không đúng',
            'address.required'=>'Chưa nhập địa chỉ',
            'fullName.required'=>'Chưa nhập họ và tên',
            'fullName.min'=>'Họ và tên ít nhất 2 ký tự',
            'fullName.min'=>'Họ và tên nhiều nhất 30 ký tự',
        ]);

        $user = new User();
        $user->full_name = $request->fullName;
        $user->password = bcrypt($request->pass);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success','Đăng ký thành công');
    }

    //sign out
    public function userSignOut(){
        Auth::logout();
        return redirect()->back();
    }

    //home
    public function index(){

        $saleProduct = Product::where('promotion_price', '<>', 0)->paginate(8);
        return view('website.pages.index', [
                                            'saleProduct'=>$saleProduct,

                                            ]);
    }

    //type product
    public function getTypeProduct($id){
        $product = Product::where('id_type', $id)->orderByDesc('created_at')->paginate(9);
        $type = Type_product::find($id);
        return view('website.pages.type_product', ['product'=>$product, 'type'=>$type]);
    }

    //detail product
    public function getDetail($id){
        $product = Product::find($id);
        $randomProduct = Product::inRandomOrder()->limit(4)->get();
        $relatedProduct = Product::where('id_type', $product->id_type)->inRandomOrder()->limit(3)->get();
        //var_dump($relatedProduct);die();
        return view('website.pages.detail', ['product'=>$product, 'relatedProduct'=>$relatedProduct, 'randomProduct'=>$randomProduct]);
    }

    //about
    public function getAbout(){
        return view('website.pages.about');
    }

    //contact
    public function getContact(){
        return view('website.pages.contact');
    }

    //check out
    public function getCheckOut(){
        return view('website.pages.check-out');
    }

    //cart
    public function getCart(){
        return view('website.pages.shopping_cart');
    }

    public function addCart($id){
        $product = Product::find($id);
        if($product != null){
            $oldCart = session('cart') ? session('cart') : null;
            $newCart = new Cart($oldCart);
            // $newCart->addCart($product, $id);
            session()->put('cart',$newCart);
            dd(session()->all());
        }
    }

}
