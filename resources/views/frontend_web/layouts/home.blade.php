@extends('frontend_web.master.master')
@section('main_content')

<!--Banner-->
<div class="banner_2">
    <div class="banner_2_background" style="background-image:url(web/images/banner_home_4.jpg)"></div>
    <div class="banner_2_container">
        <div class="banner_2_dots">
            <div class="owl-dot">
                <span></span>
            </div>
            <div class="owl-dot">
                <span></span>
            </div>
            <div class="owl-dot">
                <span></span>
            </div>
        </div>
        <!-- Banner 2 Slider -->

        <div class="owl-carousel owl-theme banner_2_slider">

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Cosmetics</div>
                                    <div class="banner_2_title">LAKME ABSOLUTE</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="web/images/banner_home_1.jpg" alt="" style="border-radius: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Cosmetics</div>
                                    <div class="banner_2_title">MAC</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="web/images/banner_home_6.jpg" alt="" style="border-radius: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner 2 Slider Item -->
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Cosmetics</div>
                                    <div class="banner_2_title">Yves Saint Laurent</div>
                                    <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                                    <div class="button banner_2_button"><a href="#">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="web/images/banner_home_5.jpg" alt="" style="border-radius: 50%;width:80%;" ></div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Sản phẩm mới-->
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title" style="font-family:serif; font-weight:bold;font-size:30px;">Sản Phẩm Mới</div>
                        <ul class="clearfix">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="z-index:1;">

                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="arrivals_slider slider" style="padding-left:37px;padding-right:30px;width:1157px;height:690px;">

                                    <!-- Slider Item -->
                                    @foreach($ds_san_pham_moi as $sp_moi)
                                    <?php $gia_ban=$sp_moi->don_gia*(1-$sp_moi->giam_gia) ?>
                                   
                                        <div class="arrivals_slider_item" style="height:285px">
                                            <div class="border_active" style="height:227px;"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center" style="width:233px;">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center" style="width:206px;height:115px;"><a href="{{route('productdetail',$sp_moi->ma_san_pham)}}"><img src="web/sanpham/{{$sp_moi->hinh}}" alt="" style="width:100px;height:104px;"></a></div>
                                                <div class="product_content">
                                                    <div class="product_price" style="font-size:16px;margin-top:28px;">{{number_format($gia_ban).' đ'}} </div>
                                                    <div class="title-spm"><div><a href="{{route('productdetail',$sp_moi->ma_san_pham)}}" style="color:dimgray;">{{$sp_moi->ten_san_pham}}</a></div></div>
                                                    <div class="product_extras">
                                                       
                                                        <button class="product_cart_button"><a href="{{route('productdetail',$sp_moi->ma_san_pham)}}" style="color:white;">Xem Chi Tiết</a></button>
                                                        
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_discount">-25%</li>
                                                    <li class="product_mark product_new">new</li>
                                                </ul>
                                            </div>
                                        </div>
                                   @endforeach

                                </div>
                                <div class="arrivals_slider_dots_cover"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- San pham bán chạy -->
<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title" style="font-family:serif; font-weight:bold;font-size:30px;">Sản Phẩm Bán Chạy</div>
                        <ul class="clearfix">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    <div class="bestsellers_panel panel active">

                        <!-- Best Sellers Slider -->

                        <div class="bestsellers_slider slider">

                           
                            @foreach ($ds_san_pham_ban_chay as $item)
                            
                            <div class="bestsellers_item discount" style="height:195px;">
                                <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="bestsellers_image"><a href="{{route('productdetail',$item->ma_san_pham)}}"><img src="{{asset('web/sanpham/'.$item->hinh)}}" alt=""></a></div>
                                    <div class="bestsellers_content">

                                        <div class="bestsellers_name" style="overflow:hidden;max-height:50px;width:70%;text-align:center;"><a href="{{route('productdetail',$item->ma_san_pham)}}">{{$item->ten_san_pham}}</a></div>

                                        <?php
                                            $gia_ban=$item->don_gia*(1-$item->giam_gia)
                                        ?>
                                        <div class="bestsellers_price discount">{{number_format($gia_ban)}} đ<br><span>{{number_format($item->don_gia)}} đ</span></div>
                                    </div>
                                </div>

                                

                                    @if ($item->so_luong > 10)
                                    
                                        <?php $gg = $item->giam_gia * 100;?>
                                        @if ($gg == 0)
                                        
                                            <ul class="bestsellers_marks">
                                                <li></li>
                                            </ul>
                                        
                                        @else
                                        
                                            <ul class="bestsellers_marks">
                                                <li class="bestsellers_mark bestsellers_discount">-{{$gg}}%</li>
                                            </ul>
                                        @endif

                                    @endif
                                    @if ($item->so_luong <= 10 && $item->so_luong > 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:yellow;">Sắp hết hàng</li>
                                        </ul>
                                    
                                    @endif
                                    @if($item->so_luong <= 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:red;background-color:#d5d8da;">Đã hết hàng</li>
                                        </ul>
                                    @endif
                                


                            </div>
                            @endforeach


                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

<!--Sản phẩm nổi bật-->
<div class="trends">
    <div class="trends_background" style="background-image:url(web/images/trends_background.jpg)"></div>
    <div class="trends_overlay"></div>
    <div class="container">
        <div class="row">

            <!-- Trends Content -->
            <div class="col-lg-3">
                <div class="trends_container">
                    <h2 class="trends_title" style="font-family:serif; font-weight:bold;font-size: 67px;color:red;">HOT DEALS</h2>

                    <div class="trends_slider_nav">
                        <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                        <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                    </div>
                </div>
            </div>

            <!-- Trends Slider -->
            <div class="col-lg-9">
                <div class="trends_slider_container">

                    <!-- Trends Slider -->

                    <div class="owl-carousel owl-theme trends_slider">

                        <!-- Trends Slider Item -->
                      
                        @foreach ($ds_san_pham_noi_bat as $item)
                        
                            <div class="owl-item">
                                <div class="trends_item is_new" style="height:415px;">
                                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><a href="{{route('productdetail',$item->ma_san_pham)}}"><img src="{{asset('web/sanpham/'.$item->hinh)}}" alt=""></a></div>
                                    <div class="trends_content">
                                        
                                        <div class="trends_info clearfix">
                                            <div class="trends_name" style="overflow:hidden;width:80%;max-height:50px;"><a href="{{route('productdetail',$item->ma_san_pham)}}">{{$item->ten_san_pham}}</a></div>

                                            <?php
                                            $gia_ban=$item->don_gia*(1-$item->giam_gia)
                                            ?>
                                            <div class="bestsellers_price discount" style="color:red;margin-top:85px;">{{number_format($gia_ban)}} đ<br><span>{{number_format($item->don_gia)}} đ</span></div>
                                        </div>
                                    </div>
                                    @if ($item->so_luong > 10)
                                    
                                        <?php $gg = $item->giam_gia * 100;?>
                                        @if ($gg == 0)
                                        
                                            <ul class="bestsellers_marks">
                                                <li></li>
                                            </ul>
                                        
                                        @else
                                        
                                            <ul class="bestsellers_marks">
                                                <li class="bestsellers_mark bestsellers_discount">-{{$gg}}%</li>
                                            </ul>
                                        @endif

                                    @endif
                                    @if ($item->so_luong <= 10 && $item->so_luong > 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:yellow;">Sắp hết hàng</li>
                                        </ul>
                                    
                                    @endif
                                    @if($item->so_luong <= 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:red;background-color:#d5d8da;">Đã hết hàng</li>
                                        </ul>
                                    @endif

                                    <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Sản phẩm gợi ý-->
<div class="viewed">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="viewed_title_container">
                    <h3 class="viewed_title" style="font-family:serif; font-weight:bold;font-size:30px;">Sản Phẩm Gợi Ý</h3>
                    <div class="viewed_nav_container">
                        <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>

                <div class="viewed_slider_container">

                    <!-- Recently Viewed Slider -->

                    <div class="owl-carousel owl-theme viewed_slider">

                        <!-- Recently Viewed Item -->
                       
                        @foreach ($ds_san_pham_goi_y as $item)
                        
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="height:300px;width:187px;">
                                    <div class="viewed_image"><a href="{{route('productdetail',$item->ma_san_pham)}}"><img src="{{asset('web/sanpham/'.$item->hinh)}}" alt=""></a></div>
                                    <div class="viewed_content text-center">
                                        <?php
                                            $gia_ban=$item->don_gia*(1-$item->giam_gia)
                                        ?>
                                        <div class="viewed_price">{{number_format($gia_ban)}} đ<br /><span>{{number_format($item->don_gia)}} đ</span></div>
                                        <div class="viewed_name" style="overflow:hidden; width:77%;max-height:43px;text-align:center;"><a href="{{route('productdetail',$item->ma_san_pham)}}">{{$item->ten_san_pham}}</a></div>
                                    </div>
                                    @if ($item->so_luong > 10)
                                    
                                        <?php $gg = $item->giam_gia * 100;?>
                                        @if ($gg == 0)
                                        
                                            <ul class="bestsellers_marks">
                                                <li></li>
                                            </ul>
                                        
                                        @else
                                        
                                            <ul class="bestsellers_marks">
                                                <li class="bestsellers_mark bestsellers_discount">-{{$gg}}%</li>
                                            </ul>
                                        @endif

                                    @endif
                                    @if ($item->so_luong <= 10 && $item->so_luong > 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:yellow;">Sắp hết hàng</li>
                                        </ul>
                                    
                                    @endif
                                    @if($item->so_luong <= 0)
                                    
                                        <ul class="bestsellers_marks">
                                            <li class="bestsellers_mark bestsellers_discount" style="width:67px;color:red;background-color:#d5d8da;">Đã hết hàng</li>
                                        </ul>
                                    @endif

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
