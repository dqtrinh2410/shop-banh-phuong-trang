<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $products = null;
    public $totalQuanty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
            $this->products = $oldCart->products;
            $this->totalQuanty = $oldCart->totalQuanty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addCart($product, $id, $quanty){
        // nếu có khuyến mại thì tạo một product với giá khuyến mại ngược lại thì giá bình thường
        if($product){
            if(array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
            else{
                if($product->promotion_price > 0){
                    $newProduct = ['quanty'=>$quanty, 'price'=>$product->promotion_price, 'productInfo'=>$product];
                }
                else $newProduct = ['quanty'=>$quanty, 'price'=>$product->unit_price, 'productInfo'=>$product];
            }


        }

    }

}
