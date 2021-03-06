<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Shop</title>
    <base href="{{asset('')}}">
    <script src="source/assets/dest/js/jquery.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" href="source/assets/dest/css/sweetalert.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>
<body>
<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i>354/137/21/14 Truong Chinh, Dong Da, Ha Noi</a></li>
                    <li><a href=""><i class="fa fa-phone"></i>0327642297</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(Auth::guard('web')->check())
                        <li><a href="#"><i class="fa fa-user"></i>Hello {{Auth::guard('web')->user()->full_name}}</a></li>
                        <li><a href="{{'signup'}}">Profile</a></li>
                        <li><a href="{{'signout'}}">Log out</a></li>
                    @else
                        <li><a href="{{'signup'}}">Sign up</a></li>
                        <li><a href="{{'login_customer'}}">Sign in</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{route('product-search')}}">
                        <input class="search" type="text" value=""  name="search" id="search" placeholder="Type Keyword..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>
                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Cart
                            @if(Session::has('Cart') != null || isset(Session::get('Cart')->totalQty))
                              <span id="total-quantity">({{(Session::get('Cart')->totalQty)}} items)</span>
                            @else
                               <span id="total-quantity">( Empty )</span>
                            @endif
                            <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            <div id="change-cart-item">
                                @if(Session::has('Cart') != null)
                                @foreach(Session::get('Cart')->items as $item)
                                <div class="cart-item">
                                    <a class="cart-item-delete" href="javascript:"><i class="fa fa-times" data-id="{{$item['item']->id}}"></i></a>
                                    <div class="media">
                                        <a class="pull-left" href="#"><img src="source/image/product/{{$item['item']->image}}" width="50px", height="50px" alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">{{$item['item']->name}}</span>
                                            <span class="cart-item-amount">{{$item['qty']}}*<span>{{number_format($item['item']->unit_price)}}</span></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="cart-caption">
                                    <div class="cart-total text-right">Subtotal: <span class="cart-total-value">{{Session::get('Cart')->totalPrice}}đ</span></div>
                                    <input hidden type="number" value="{{Session::get('Cart')->totalQty}}">
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                            </div>
                            <div class="center">
                                <div class="space10">&nbsp;</div>
                                <a href="{{url('list-cart')}}" class="beta-btn primary text-center">View Cart <i class="fa fa-chevron-right"></i></a>
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
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="index">Home</a></li>
                    <li><a href="#">Product Type</a>
                        <ul class="sub-menu">
                            @foreach($product_type as $pro_type)
                            <li><a href="product-type/{{$pro_type->id}}">{{$pro_type->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
<div class="rev-slider">
@yield('content')
</div> <!-- .container -->
<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Instagram Feed</h4>

                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Information</h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p>30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Newsletter Subscribe</h4>
                    <form action="#" method="post">
                        <input type="email" name="your_email">
                        <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
    <div class="container">
        <p class="pull-left">Privacy policy. (&copy;) 2014</p>
        <p class="pull-right pay-options">
            <a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->


<!-- include js files -->

<script src="source/assets/dest/js/sweetalert.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="source/assets/dest/vendors/animo/Animo.js"></script>
<script src="source/assets/dest/vendors/dug/dug.js"></script>
<script src="source/assets/dest/js/scripts.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="source/assets/dest/js/waypoints.min.js"></script>
<script src="source/assets/dest/js/wow.min.js"></script>
<script src="source/assets/dest/js/bootstrap.min.js"></script>
<script src="source/assets/dest/js/jquery-ui.min.js"></script>
<script src="source/assets/dest/js/jquery.countdown.min.js"></script>
<script src="source/assets/dest/js/jquery.nice-select.min.js"></script>
<script src="source/assets/dest/js/jquery.zoom.min.js"></script>
<script src="source/assets/dest/js/jquery.dd.min.js"></script>
<script src="source/assets/dest/js/jquery.slicknav.js"></script>
<script src="source/assets/dest/js/owl.carousel.min.js"></script>
<script src="source/assets/dest/js/main.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

<!--customjs-->
<script src="source/assets/dest/js/custom2.js"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    });
    const engine1 = new Bloodhound({
        remote: {
            url: 'search/name?search=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('search'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    $(".search").typeahead({
        hint: false,
        highlight: false,
        minLength: 2
    },
        [
            {
                source: engine1.ttAdapter(),
                name: 'products-name',
                display: function(data) {
                    return data.name;
                },
                templates: {
                    empty: [
                        '<div class="list-group search-results-dropdown"><div class="list-group-item">No product found.</div></div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown"></div>'
                    ],
                    suggestion: function (data) {
                        return '<a href="product-details/' + data.id + '" class="list-group-item">' + data.name + '</a>';
                    }
                }
            }
        ]
    );
</script>
</body>
</html>
