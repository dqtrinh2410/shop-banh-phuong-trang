@extends('website.layout.master_no_slide')

@section('content')
<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="source/image/product/{{$product->image}}" alt="" height="250px">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">{{$product->name}}</p>
                            <p class="single-item-price" style="margin-top: 15px">
                                @if ($product->promotion_price <= 0)
                                    <span class="flash-del">{{$product->unit_price}}</span>
                                @else
                                    <span class="flash-del">{{$product->unit_price}}</span>
                                    <span class="flash-sale">{{$product->promotion_price}}</span>
                                @endif
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        {{-- <div class="single-item-desc">
                            <p>aaa</p>
                        </div> --}}
                        <div class="space20">&nbsp;</div>

                        <p>Số lượng:</p>
                        <div class="single-item-options">
                            <select class="wc-select" name="qty">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        @if (strlen($product->description) > 0)
                            <p>{{$product->description}}</p>
                        @else
                            <p>{{"No description"}}</p>
                        @endif
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        @if (count($relatedProduct) > 0)
                        @foreach ($relatedProduct as $p)
                        <div class="col-sm-4">
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
                                <div class="single-item-caption" style="margin-top: 10px">
                                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="detail/{{$p->id}}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                            <p style="margin-left: 15px; margin-top:10px"><span>No related product</span></p>
                        @endif
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($randomProduct as $rp)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="detail/{{$rp->id}}"><img src="source/image/product/{{$rp->image}}" alt="" width="58px", height="58px"></a>
                                <div class="media-body">
                                    {{$rp->name}}
                                    <span class="beta-sales-price">{{$rp->unit_price}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            @foreach ($newProduct as $np)
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="detail/{{$np->id}}"><img src="source/image/product/{{$np->image}}" alt="" width="58px" height="58px"></a>
                                <div class="media-body">
                                    {{$np->name}}
                                    <span class="beta-sales-price">{{$np->unit_price}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
