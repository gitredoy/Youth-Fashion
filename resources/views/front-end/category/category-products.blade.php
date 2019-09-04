
@extends('front-end.master')

@section('tittle')
    Category || Your Style
@endsection


@section('body')

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Products</li>
            </ol>
        </div>
    </div>
    <!--content-->
    <div class="products">
        <div class="container">
            <h2>Products</h2>
            <div class="col-md-9">
                <div class="content-top1">



                    @foreach($categoryProducts as $CategoryProduct)
                    <div class="col-md-4 col-md4">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{route('product_details',['id'=>$CategoryProduct->id,'name'=>$CategoryProduct->product_name])}}">
                                <img class="img-responsive" src="{{asset($CategoryProduct->product_image)}}" alt="" />
                            </a>
                            <h3><a href="{{route('product_details',['id'=>$CategoryProduct->id,'name'=>$CategoryProduct->product_name])}}">{{$CategoryProduct->product_name}}</a></h3>
                            <div class="price">
                                <h5 class="item_price">Tk.{{$CategoryProduct->product_price}}</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    <div class="clearfix"> </div>
                </div>
                <div class="content-top1">

                    @foreach($secondCategoryProducts as $SecondCategoryProducts)
                        <div class="col-md-4 col-md4">
                            <div class="col-md1 simpleCart_shelfItem">
                                <a href="{{route('product_details',['id'=>$SecondCategoryProducts->id,'name'=>$SecondCategoryProducts->product_name])}}">
                                    <img class="img-responsive" src="{{asset($SecondCategoryProducts->product_image)}}" alt="" />
                                </a>
                                <h3><a href="{{route('product_details',['id'=>$SecondCategoryProducts->id,'name'=>$SecondCategoryProducts->product_name])}}">{{$SecondCategoryProducts->product_name}}</a></h3>
                                <div class="price">
                                    <h5 class="item_price">Tk.{{$SecondCategoryProducts->product_price}}</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    <div class="clearfix"> </div>
                </div>
                <div class="content-top1">
                    <div class="col-md-4 col-md4">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="">
                                <img class="img-responsive" src="{{asset('/')}}/front/images/pi9.png" alt="" />
                            </a>
                            <h3><a href="">Trouser1</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md4">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="">
                                <img class="img-responsive" src="{{asset('/')}}/front/images/pi11.png" alt="" />
                            </a>
                            <h3><a href="">Jeans1</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-md4">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="">
                                <img class="img-responsive" src="{{asset('/')}}/front/images/pi10.png" alt="" />
                            </a>
                            <h3><a href="">Trouser1</a></h3>
                            <div class="price">
                                <h5 class="item_price">$300</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 product-bottom">
                <!--categories-->
                <div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Categories</h3>
                    <ul class="menu-drop">
                        <li class="item1"><a href="#">Men </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="">Cute Kittens </a></li>
                                <li class="subitem2"><a href="">Strange Stuff </a></li>
                                <li class="subitem3"><a href="">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#">Women </a>
                            <ul class="cute">
                                <li class="subitem1"><a href="">Cute Kittens </a></li>
                                <li class="subitem2"><a href="">Strange Stuff </a></li>
                                <li class="subitem3"><a href="">Automatic Fails </a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#">Kids</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="">Cute Kittens </a></li>
                                <li class="subitem2"><a href="">Strange Stuff </a></li>
                                <li class="subitem3"><a href="">Automatic Fails</a></li>
                            </ul>
                        </li>
                        <li class="item4"><a href="#">Accessories</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="">Cute Kittens </a></li>
                                <li class="subitem2"><a href="">Strange Stuff </a></li>
                                <li class="subitem3"><a href="">Automatic Fails</a></li>
                            </ul>
                        </li>

                        <li class="item4"><a href="#">Shoes</a>
                            <ul class="cute">
                                <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                                <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                                <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--initiate accordion-->
                <script type="text/javascript">
                    $(function() {
                        var menu_ul = $('.menu-drop > li > ul'),
                            menu_a  = $('.menu-drop > li > a');
                        menu_ul.hide();
                        menu_a.click(function(e) {
                            e.preventDefault();
                            if(!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true,true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true,true).slideUp('normal');
                            }
                        });

                    });
                </script>
                <!--//menu-->
                <!--seller-->
                <div class="product-bottom">
                    <h3 class="cate">Best Sellers</h3>
                    @foreach($randomProduct as $RandomProduct)
                    <div class="product-go">

                        <div class=" fashion-grid">
                            <a href=""><img  class="img-responsive  " src="{{asset($RandomProduct->product_image)}}" alt=""></a>
                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="" >{{$RandomProduct->sort_desc}} </a></h6>
                            <span class=" price-in1"> Tk.{{$RandomProduct->product_price}}</span>
                        </div>
                        <div class="clearfix"> </div>


                    </div>
                    @endforeach

                </div>

                <!--//seller-->
                <!--tag-->
                <div class="tag">
                    <h3 class="cate">Tags</h3>
                    <div class="tags">
                        <ul>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">dress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">lorem</a></li>
                            <li><a href="#">dress</a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!--//content-->

@endsection
