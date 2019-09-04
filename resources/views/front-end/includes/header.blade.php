
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                <h1><a href="{{route('/')}}">YOUR <span>STYLE</span></a></h1>
            </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <a href="{{route('show-cart')}}"><img src="{{asset('/')}}/front/images/cart.png" alt=""/></a></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-phone"></i>01521475708</span>
                <p>Call me</p>
            </div>
            @if(Session::get('customerId'))
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-user"></i>{{Session::get('customerName')}}</span><br>
                <a href="{{route('customer-logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('customer-logout-form').submit();">Logout</a>
                <form id="customer-logout-form" action="{{ route('customer-logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @else
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                <span><i class="glyphicon glyphicon-user"></i></span><br>
                <a href="{{route('customer-login')}}">Login</a>
            </div>
            @endif
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="n-avigation">

                <nav class="navbar nav_bottom" role="navigation">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="{{route('/')}}">Home</a></li>

                            @foreach( $categories as $category)
                            <li><a href="{{route('category',['name'=> $category -> category_name,'id'=> $category->id])}}">{{$category->category_name}}</a></li>
                            @endforeach

                            <li><a href="">Sign In</a></li>
                            <li class="last"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>


            <div class="clearfix"> </div>
            <!---pop-up-box---->
            <link href="{{asset('/')}}/front/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
            <script src="{{asset('/')}}/front/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                    <div class="login">
                        <form action="#" method="post">
                            <input type="submit" value="">
                            <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">

                        </form>
                    </div>
                    <p>	Shopping</p>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
            <!---->
        </div>
    </div>
</div>

<!--//Header End-->