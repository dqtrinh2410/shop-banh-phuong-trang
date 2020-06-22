<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if (Auth::check())
                        <li><a href="#"><i class="fa fa-user"></i>{{Auth::user()->full_name}}</a></li>
                    @endif

                    <li><a href="{{ route('web.signup') }}">Đăng kí</a></li>

                    @if (!Auth::check())
                        <li><a href="{{ route('web.signin') }}">Đăng nhập</a></li>
                    @else
                        <li><a href="{{ route('web.signout') }}">Đăng xuất</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{ route('web.home') }}" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            <!-- .cart item -->
                            <div class="cart-item">
                                <a href="#"class="cart-item-delete" ><i class=" fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/assets/dest/images/products/cart/1.png" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">Sample Woman Top</span>
                                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                        <span class="cart-item-amount">1*<span>$49.50</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- .pay  -->
                            <div class="cart-caption">
                                <div class="left">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('web.cart') }}" class="beta-btn primary text-center">Giỏ Hàng <i class="fa fa-chevron-right"></i></a>
                                </div>

                                <div class="left" style="margin-left: 5px">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{ route('web.checkout') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <!-- .main-menu -->
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('web.home') }}">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($typeProduct as $tp)
                            <li><a href="type-product/{{$tp->id}}">{{$tp->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('web.about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('web.contact') }}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
