@extends('front-end.master')

@section('tittle')
    Home || Your Style
@endsection

@section('body')


    <!--banner-->
    <div class="banner">
        <div class="matter-banner">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="{{asset('/')}}/front/images/1.jpg" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <h2>MEN & WOMEN</h2>
                                <h3>Trousers & Chinos</h3>
                                <h4>UPTO 50%</h4>
                                <p>OFFER</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('/')}}/front/images/3.jpg" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <h2>MEN & WOMEN</h2>
                                <h3>Trousers & Chinos</h3>
                                <h4>UPTO 50%</h4>
                                <p>OFFER</p>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('/')}}/front/images/2.jpg" alt="">
                            <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <h2>MEN & WOMEN</h2>
                                <h3>Trousers & Chinos</h3>
                                <h4>UPTO 50%</h4>
                                <p>OFFER</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--//banner-->
    <!--content-->
    <div class="content">
        <div class="container">
            <div class="content-top">
                <div class="content-top1">

                    @foreach($firstProduct as $FirstProduct)


                    <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{route('product_details',['id'=>$FirstProduct->id,'name'=>$FirstProduct->product_name])}}">
                                <img class="img-responsive" src="{{asset($FirstProduct->product_image)}}" alt="" />
                            </a>
                            <h3><a href="{{route('product_details',['id'=>$FirstProduct->id,'name'=>$FirstProduct->product_name])}}">{{$FirstProduct->product_name}}</a></h3>
                            <div class="price">
                                <h5 class="item_price">Tk.{{$FirstProduct->product_price}}</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>


                    @endforeach


                    <div class="clearfix"> </div>
                </div>
                <div class="content-top1">

                    @foreach($secondProduct as $SecondProduct)

                    <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="{{route('product_details',['id'=>$SecondProduct->id,'name'=>$SecondProduct->product_name])}}">
                                <img class="img-responsive" src="{{asset($SecondProduct->product_image)}}" alt="" />
                            </a>
                            <h3><a href="{{route('product_details',['id'=>$SecondProduct->id,'name'=>$SecondProduct->product_name])}}">{{$SecondProduct->product_name}}</a></h3>
                            <div class="price">
                                <h5 class="item_price">{{$SecondProduct->product_price}}</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--//content-->
    <div class="con-tp">
        <div class="container">
            <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>30%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>45%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>50%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>25%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>50%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="{{asset('/')}}/front/images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                <h4>35%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="c-btm">
        <div class="content-top1">
            <h1 class="text-center text-success mb-5">New Product</h1>

            <div class="container">

                @foreach($newProduct as $NewProduct)

                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="{{route('product_details',['id'=>$NewProduct->id,'name'=>$NewProduct->product_name])}}">
                            <img class="img-responsive" src="{{asset($NewProduct->product_image)}}" alt="" />
                        </a>
                        <h3><a href="{{route('product_details',['id'=>$NewProduct->id,'name'=>$NewProduct->product_name])}}">{{$NewProduct->product_name}}</a></h3>
                        <div class="price">
                            <h5 class="item_price">Tk.{{$NewProduct->product_price}}</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>

                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <div class="new1 " style="margin-bottom: 20px">
        <h2 class="text-center text-success mb-5">Random Product</h2>
        <div class="new2">

            <div class="container">

                @foreach($randomProduct as $RandomProduct)

                    <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="">
                                <img class="img-responsive" src="{{asset($RandomProduct->product_image)}}" alt="" />
                            </a>
                            <h3><a href="">{{$RandomProduct->product_name}}</a></h3>
                            <div class="price">
                                <h5 class="item_price">Tk.{{$RandomProduct->product_price}}</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>

                @endforeach

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection


