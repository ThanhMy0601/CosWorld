<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechWorld</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="YHidJm1SLVzneu-WWMtjc7sS37BfTPNLiLWVyRI-aDQ" />
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/bootstrap4/bootstrap.min.css')}}" />
    <link rel="shortcut icon" href="{{asset('web/img-title.png')}}" />
    <link href="{{asset('web/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/OwlCarousel2-2.2.1/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/slick-1.8.0/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/main_styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/shop_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/shop_responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/product_styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/product_responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/cart_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/cart_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/blog_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/blog_responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/blog_single_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/styles/blog_single_responsive.css')}}">
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/style_custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
    <!-- !CSS CUSTOM -->

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('web/images/phone.png')}}" alt=""></div><a style="font-weight:400; color:#a19a9a;">+84 909000999</a></div>
                            <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{asset('web/images/mail.png')}}" alt=""></div><a href="#" style="text-decoration: none;font-weight:400; color:#a19a9a;">techworld@gmail.com</a></div>
                                
                                @if(session()->has('username'))
                                <?php
                                    $kh=session()->get('username');
                                ?>
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_user" style="font-weight:400; color:#a19a9a;">
                                        <div class="user_icon"><img src="{{asset('web/images/user.svg')}}" alt=""></div>
                                        <div><a href="" style="text-decoration: none;font-weight:400; color:dodgerblue;">{{$kh->ten_dang_nhap}}</a></div>
                                        <div><a href="/logout" style="text-decoration: none;font-weight:400; color:red;">Đăng xuất</a></div>
                                    </div>
                                </div>
                                @else
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_user">
                                        <div class="user_icon"><img src="{{asset('web/images/user.svg')}}" alt=""></div>
                                        <div><a href="/register" style="text-decoration: none;font-weight:400; color:#a19a9a;">Đăng ký</a></div>
                                        <div><a href="/login" style="text-decoration: none;font-weight:400; color:#a19a9a;">Đăng nhập</a></div>
                                    </div>
                                </div>
                                @endif
                                
                            <div class="top_bar_content ml-auto">
                                <ul class="standard_dropdown top_bar_dropdown social-icons" style="padding-top:18px;padding-right:40px;">
                                    <li><a href="https://www.facebook.com/techworldthegioicongnghehiendai" class="facebook"></a></li>
                                    <li><a href="#" class="twitter"></a></li>
                                    <li><a href="#" class="g"></a></li>
                                    <li><a href="#" class="instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="/" style="font-size:60px; font-family:serif;font-weight: 900;text-decoration: none;">CosWorld</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container" style="margin-left:115px; width:454px;">
                                        <form asp-controller="HangHoa" asp-action="Search" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input" placeholder="Tìm kiếm sản phẩm..." name="searchstring" style="font-family:serif;font-size:16px;width:399px">
                                            <span class="custom_dropdown_placeholder clc"></span>
                                            <ul class="custom_list clc"></ul>
                                            <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{asset('web/images/search.png')}}" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist d-flex flex-row align-items-center justify-content-end">

                                </div>

                                <!-- Cart -->
                                <?php
                                    $qty=Cart::getTotalQuantity();
                                    $total = Cart::getTotal();
                                ?>
                                    @if($qty>0)
                                    <div class="cart">
                                        <div class="cart_container d-flex flex-row align-items-center justify-content-end" style="padding-right:90px;">
                                            <div class="cart_icon">
                                                <img src="{{asset('web/images/cart.png')}}" alt="">
                                                <div class="cart_count"><span>{{$qty}}</span></div>
                                            </div>
                                            <div class="cart_content">
                                                <div class="cart_text"><a href="/cart" style="text-decoration: none;">Giỏ hàng</a></div>
                                                <div class="cart_price">{{number_format($total) . ' đ'}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="cart">
                                        <div class="cart_container d-flex flex-row align-items-center justify-content-end" style="padding-right:90px;">
                                            <div class="cart_icon">
                                                <img src="{{asset('web/images/cart.png')}}" alt="">
                                                <div class="cart_count"><span>0</span></div>
                                            </div>
                                            <div class="cart_content">
                                                <div class="cart_text"><a href="/cart" style="text-decoration: none;">Giỏ hàng</a></div>
                                                <div class="cart_price">0 đ</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->

                                <div class="cat_menu_container">
                                    <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                        <div class="cat_burger"><span></span><span></span><span></span></div>
                                        <div class="cat_menu_text"><a style="color:white;">Các loại mặt hàng</a></div>
                                    </div>

                                    <ul class="cat_menu">
                                            <?php
                                                use App\ProductType;
                                                $ds_loai_sp=ProductType::get();
                                            ?>
                                            @foreach($ds_loai_sp as $loai)
                                            <li><a href="{{route('categoryproduct',$loai->ma_loai_con)}}" style="text-decoration: none;font-family:serif;font-weight:300;font-size:18px;">{{$loai->ten_loai_con}}<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                            @endforeach

                                    </ul>
                                </div>

                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li><a href="/" style="text-decoration: none;">Trang Chủ<i class="fas fa-chevron-down"></i></a></li>
                                        <li class="hassubs">
                                            <a href="#" style="text-decoration: none;">Hot Deals</a>
                                        </li>
                                        <li><a href="/checkout" style="text-decoration: none;">Thanh Toán</a></li>
                                        <li class="hassubs">
                                            <a href="#" style="text-decoration: none;">Blog</a>
                                        </li>
                                        <li class="hassubs">
                                            <a href="/contact" style="text-decoration: none;">Liên Hệ</a>
                                        </li>
                                        <li><a href="/about" style="text-decoration: none;">About Us</a></li>

                                    </ul>
                                </div>

                                <!-- Menu Trigger -->

                                <div class="menu_trigger_container ml-auto">
                                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                        <div class="menu_burger">
                                            <div class="menu_trigger_text">menu</div>
                                            <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <!-- Banner -->



        @yield('main_content')
      

        <!-- Brands -->

        <div class="brands">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="brands_slider_container">

                            <!-- Brands Slider -->

                            <div class="owl-carousel owl-theme brands_slider">

                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_1.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_2.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_3.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_4.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_5.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_6.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_7.jpg')}}" alt=""></div></div>
                                <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('web/images/brands_8.jpg')}}" alt=""></div></div>

                            </div>

                            <!-- Brands Slider Navigation -->
                            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <!-- Begin Mailchimp Signup Form -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                            <div class="newsletter_title_container">
                                <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                                <div class="newsletter_title">Đăng ký để nhận bản tin của chúng tôi</div>
                                <div class="newsletter_text"><p>...và nhận phiếu giảm giá 20% cho lần mua săm đầu tiên.</p></div>
                            </div>
                            <div class="newsletter_content clearfix">
                                <form class="newsletter_form validate" action="https://gmail.us3.list-manage.com/subscribe/post?u=e4988ee59c84b4a4ea2743680&amp;id=83b9711699" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <input type="email" value="" name="EMAIL" class="newsletter_input" required="required" placeholder="Enter your email address" id="mce-EMAIL">
                                        </div>
                                    </div>
                                    <br />
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none; color:red;"></div>
                                        <div class="response" id="mce-success-response" style="display:none; color:dodgerblue;"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e4988ee59c84b4a4ea2743680_83b9711699" tabindex="-1" value=""></div>
                                    <button class="newsletter_button">Subscribe</button>
                                </form>
                                <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#" style="color: #0e8ce4;">CosWorld</a></div>
                            </div>
                            <div class="footer_title">HotLine - Gọi cho chúng tôi 24/7</div>
                            <div class="footer_phone">+84 90 900 0999</div>
                            <div class="footer_contact_text">
                                <p>280, An Dương Vương, quận 5</p>
                                <p>TP. Hồ Chí Minh, Việt Nam</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="https://www.facebook.com/techworldthegioicongnghehiendai"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 offset-lg-2">
                        <div class="footer_column">
                            <h4 class="footer_title" style="font-family:Arial;font-weight:bold;color: white;">Sản Phẩm</h4>
                            <ul class="footer_list">
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Trang điểm mặt</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Trang điểm môi</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Trang điểm mắt</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Sản phẩm chăm sóc da mặt</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Sản phẩm chăm sóc body</h5></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <ul class="footer_list footer_list_2">
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Dầu gội các loại</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Sữa tắm các loại</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Sơn móng tay</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">Nước hoa</h5></li>
                                <li><h5 style="font-family:Arial;font-weight:600;font-size:12px;color: white;">...</h5></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title" style="color:white;">Customer Care</div>
                            <ul class="footer_list">
                                <li><a href="#" style="color:white;">My Account</a></li>
                                <li><a href="#" style="color:white;">Order Tracking</a></li>
                                <li><a href="#" style="color:white;">Wish List</a></li>
                                <li><a href="#" style="color:white;">Customer Services</a></li>
                                <li><a href="#" style="color:white;">Returns / Exchange</a></li>
                                <li><a href="#" style="color:white;">FAQs</a></li>
                                <li><a href="#" style="color:white;">Product Support</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="{{asset('web/images/logos_1.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('web/images/logos_2.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('web/images/logos_3.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('web/images/logos_4.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('web/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('web/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('web/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('web/plugins/greensock/TweenMax.min.js')}}"></script>
    <script src="{{asset('web/plugins/greensock/TimelineMax.min.js')}}"></script>
    <script src="{{asset('web/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('web/plugins/greensock/animation.gsap.min.js')}}"></script>
    <script src="{{asset('web/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
    <script src="{{asset('web/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('web/plugins/slick-1.8.0/slick.js')}}"></script>
    <script src="{{asset('web/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('web/js/custom.js')}}"></script>
    <script src="{{asset('web/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('web/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
    <script src="{{asset('web/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('web/js/cart_custom.js')}}"></script>
    <script src="{{asset('web/js/blog_single_custom.js')}}"></script>
    <script src="{{asset('web/js/blog_custom.js')}}"></script>

    <!-- Begin Mailchimp Signup Form -->
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function ($) { window.fnames = new Array(); window.ftypes = new Array(); fnames[0] = 'EMAIL'; ftypes[0] = 'email'; fnames[7] = 'MMERGE7'; ftypes[7] = 'text'; fnames[2] = 'LNAME'; ftypes[2] = 'text'; fnames[3] = 'ADDRESS'; ftypes[3] = 'address'; fnames[4] = 'PHONE'; ftypes[4] = 'phone'; fnames[5] = 'BIRTHDAY'; ftypes[5] = 'birthday'; fnames[6] = 'MMERGE6'; ftypes[6] = 'text'; }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
    <!--// Begin Mailchimp Signup Form -->
</body>

</html>