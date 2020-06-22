@extends('website.layout.master_no_slide')

@section('content')
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($typeProduct as $tp)
                            <li><a href="type-product/{{$tp->id}}">{{$tp->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>{{$type->name}}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">{{count($product)}} found</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                        @foreach ($product as $p)
                            <div class="col-sm-4">
                                <div class="single-item" style="margin-top: 10px">
                                    <div class="single-item-header">
                                        <a href="product.html"><img src="source/image/product/{{$p->image}}" alt="" height="250px"></a>
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
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="detail/{{$p->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                     </div>
                     <div class="row">{{$product->links()}}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
