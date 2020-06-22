@extends('website.layout.master')

@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($newProduct as $p)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="detail/{{$p->id}}"><img src="source/image/product/{{$p->image}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$p->name}}</p>
                                        <p class="single-item-price">
                                            @if ($p->promotion_price <= 0)
                                                <span class="flash-del">{{$p->unit_price}}</span>
                                            @else
                                                <span class="flash-del">{{$p->unit_price}}</span>
                                                <span class="flash-sale">{{$p->promotion_price}}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption" style="margin-top: 5px">
                                        <a class="add-to-cart pull-left" href="{{ route('web.addcart', ['id'=>1]) }}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="detail/{{$p->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sales Products</h4>
                        <div class="beta-products-details">
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($saleProduct as $p)
                                <div class="col-sm-3" style="margin-top: 10px;">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="detail/{{$p->id}}"><img src="source/image/product/{{$p->image}}" alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$p->name}}</p>
                                            <p class="single-item-price">
                                                @if ($p->promotion_price <= 0)
                                                    <span class="flash-del">{{$p->unit_price}}</span>
                                                @else
                                                    <span class="flash-del">{{$p->unit_price}}</span>
                                                    <span class="flash-sale">{{$p->promotion_price}}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption" style="margin-top: 5px">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="detail/{{$p->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row">{{$saleProduct->links()}}</div>
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
