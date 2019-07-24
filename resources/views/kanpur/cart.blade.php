@extends("layout")
@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li class="active"><a href="#">Shopping Cart</a></li>
                        </ul>
                    </div>
                    <h1 class="page-title">Shopping Cart</h1>
                </div><!-- end /.col-md-12 -->
            </div><!-- end /.row -->
        </div><!-- end /.container -->
    </section>
    <section class="cart_area section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>Product Details</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="add_info">Category</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="single_product clearfix">
                                <div class="col-md-5 col-sm-7 v_middle">
                                    <div class="product__description">
                                        <img src="{{ asset('public/images/icon/1.jpg') }}" alt="Purchase image">
                                        <div class="short_desc">
                                            <a href="#"><h4>T-shirt</h4></a>
                                            <p>Stitch Shop Printed Men & Women Round Neck Multicolor T....</p>
                                        </div>
                                    </div><!-- end /.product__description -->
                                </div><!-- end /.col-md-5 -->

                                <div class="col-md-3 col-sm-2 v_middle">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <a href="#">Clothes</a>
                                            </li>
                                        </ul>
                                    </div><!-- end /.product__additional_info -->
                                </div><!-- end /.col-md-3 -->

                                <div class="col-md-4 col-sm-3 v_middle">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>Rs 500</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="remove_from_cart"><span class="lnr lnr-trash"></span></a>
                                        </div><!-- end /.item_action -->
                                    </div><!-- end /.product__price_download -->
                                </div><!-- end /.col-md-4 -->
                            </div><!-- end /.single_product -->

                            <div class="single_product clearfix">
                                <div class="col-md-5 col-sm-7  v_middle">
                                    <div class="product__description">
                                        <img src="{{ asset('public/images/icon/1.jpg') }}" alt="Purchase image">
                                        <div class="short_desc">
                                             <a href="#"><h4>T-shirt</h4></a>
                                            <p>Stitch Shop Printed Men & Women Round Neck Multicolor T....</p>
                                        </div>
                                    </div><!-- end /.product__description -->
                                </div><!-- end /.col-md-5 -->

                                <div class="col-md-3 col-sm-2 v_middle">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <a href="#">Clothes</a>
                                            </li>
                                        </ul>
                                    </div><!-- end /.product__additional_info -->
                                </div><!-- end /.col-md-3 -->

                                <div class="col-md-4 col-sm-3 v_middle">
                                    <div class="product__price_download">
                                        <div class="item_price v_middle">
                                            <span>Rs 500</span>
                                        </div>
                                        <div class="item_action v_middle">
                                            <a href="#" class="remove_from_cart"><span class="lnr lnr-trash"></span></a>
                                        </div><!-- end /.item_action -->
                                    </div><!-- end /.product__price_download -->
                                </div><!-- end /.col-md-4 -->
                            </div><!-- end /.single_product -->
                        </div><!-- end /.row -->

                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6">
                                <div class="cart_calculation">
                                    <div class="cart--subtotal">
                                        <p><span>Cart Subtotal</span>Rs 1000</p>
                                    </div>
                                    <div class="cart--total"><p><span>total</span>Rs 1000</p></div>

                                    <a href="checkout.html" class="btn btn--round btn--md checkout_link">Proceed To Checkout</a>
                                </div>
                            </div><!-- end .col-md-12 -->
                        </div><!-- end .row -->
                    </div><!-- end /.product_archive2 -->
                </div><!-- end .col-md-12 -->
            </div><!-- end .row -->

        </div><!-- end .container -->
    </section>
@stop