@extends('website.layout.master_no_slide')
@section('content')
<div class="container">
    <div id="content">

        <form action="{{ route('web.post.signin') }}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng nhập</h4>

                    @if (count($errors)>0)
                        @foreach ($errors->all() as $er)
                            {{$er}}
                        @endforeach
                    @endif

                    <div class="space20">&nbsp;</div>


                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-block">
                        <label for="phone">Mật khẩu*</label>
                        <input type="text" id="phone" name="pass" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
