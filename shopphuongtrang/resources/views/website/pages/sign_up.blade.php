@extends('website.layout.master_no_slide')

@section('content')
<div class="container">
    <div id="content">

        <form action="{{ route('web.post.signup') }}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng kí</h4>
                    <div class="space20">&nbsp;</div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @else

                                @if (count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $er)
                                        {{$er}}
                                    @endforeach
                                </div>
                                @endif

                        @endif

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name">Họ và tên*</label>
                        <input type="text" id="your_last_name" name="fullName" placeholder="Họ và tên" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Đại chỉ*</label>
                        <input type="text" id="adress" name="address" placeholder="Địa chỉ" required>
                    </div>


                    <div class="form-block">
                        <label for="phone">Điện thoại*</label>
                        <input type="text" id="phone" name="phone" placeholder="Điện thoại" required>
                    </div>
                    <div class="form-block">
                        <label for="pass">Mật khẩu*</label>
                        <input type="password" id="pass" name="pass" placeholder="Mật khẩu" required style="border:1px solid #e1e1e1; height:37px;padding: 0 12px;">
                    </div>
                    <div class="form-block">
                        <label for="rePass">Nhập lại mật khẩu*</label>
                        <input type="password" id="rePass" name="rePass" placeholder="Nhập lại mật khẩu" required style="border:1px solid #e1e1e1; height:37px;padding: 0 12px;">
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
