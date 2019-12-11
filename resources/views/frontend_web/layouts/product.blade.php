@extends('frontend_web.master.master')
@section('main_content')
<!-- Home -->
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll"><img src="{{asset('web/images/shop_background.jpg')}}"/></div>
    <div class="home_overlay"></div>
    <div class="home_content d-flex flex-column align-items-center justify-content-center">
        <h1 class="home_title" style="font-family:serif;font-weight:bold;color:#495057c9;">TECHWORLD</h1>
        <h2 class="home_title" style="font-family:serif;font-weight:bold;font-size:57px;color:#495057c9;">Thế Giới Công Nghệ Hiện Đại</h2>
    </div>
</div>

<!-- Shop -->

<div class="shop">
    <div class="container">
        <div class="row" style="margin-left:-87px;">
            <div class="col-lg-3" style="max-width:20%;">

                <!-- Shop Sidebar -->
                <div class="shop_sidebar">

                    <!--search price-->                    
                   
                    <!--categories-->
                    
                        <div class="sidebar_section">
                            <div class="sidebar_title" style="font-size:26px;color:#0e8ce4;font-family:serif;font-weight:bold;"><a href="" style="text-decoration:none;">Loại Sản Phẩm</a></div>
                            <div class="myBox-scrollpane">
                                <ul class="sidebar_categories" style="margin-top:20px; font-size:18px;">
                                    @foreach ($ds_loai_sp as $loai)
                                    
                                        <li style="margin-bottom:14px;"><a href="{{route('categoryproduct',$loai->ma_loai_con)}}" >{{$loai->ten_loai_con}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="col-lg-9" style="max-width:80%;">
                
                <!-- Shop Content -->

                <div class="shop_content" style="width:1067px;">
                    <div class="shop_bar clearfix">
                        <div class="shop_product_count"></div>
                        <div class="shop_sorting">
                            <span>Sort by:</span>
                            <ul>
                                <li>
                                    <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></i></span>
                                    <ul>
                                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>price</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                   

                    <div class="product_panel panel active">
                        <div class="arrivals_slider slider" style="padding-left:37px;padding-right:150px;width:1278px;height:870px;">

                            <!-- Product Item -->

                            @foreach ($ds_sp_theo_ma_loai as $sp_theo_loai)
                                <?php
                                $gia_ban=$sp_theo_loai->don_gia-($sp_theo_loai->don_gia*$sp_theo_loai->giam_gia);
                                ?>
                                
                                <div class="arrivals_slider_item" style="height:381px;">
                                    <div class="border_active" style="height:342px;"></div>
                                    <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center" style="width:240px;">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center" style="width:237px;height:190px;"><a href="{{route('productdetail',$sp_theo_loai->ma_san_pham)}}"><img src="{{asset('web/sanpham/'.$sp_theo_loai->hinh)}}" alt="" style="width:150px;height:160px;"></a></div>
                                        <div class="product_content">
                                            
                                            <div class="product_price" style="font-size:16px;margin-top:28px;color:red;">{{number_format($gia_ban)}} đ<br /><span>{{number_format($sp_theo_loai->don_gia)}} đ</span></div>
                                            <div class="title-hh"><div><a href="{{route('productdetail',$sp_theo_loai->ma_san_pham)}}" tabindex="0">{{$sp_theo_loai->ten_san_pham}}</a></div></div>
                                            <div class="product_extras">
                                                <button class="product_cart_button" type="submit"><a href="{{route('productdetail',$sp_theo_loai->ma_san_pham)}}" style="color:white;">Xem Chi Tiết</a></button>

                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>

                                        <?php
                                            if ($sp_theo_loai->so_luong > 10)
                                            {
                                                $gg = $sp_theo_loai->giam_gia * 100;
                                                if ($gg == 0)
                                                {
                                        ?>            
                                                    <ul class="product_marks">
                                                        <li></li>
                                                    </ul>
                                        <?php            
                                                }
                                                else
                                                {
                                        ?>            
                                                    <ul class="product_marks">
                                                        <li class="product_mark product_new" style="background-color:red;">-{{$gg}}%</li>
                                                    </ul>
                                        <?php            
                                                }
                                            }
                                            else if ($sp_theo_loai->so_luong > 0)
                                            {
                                        ?>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_new" style="background-color:red; color:yellow;width:87px;">Sắp hết hàng</li>
                                                </ul>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <ul class="product_marks">
                                                    <li class="product_mark product_new" style="background-color: #d5d8da;color:red; width:87px;">Đã hết hàng</li>
                                                </ul>
                                        <?php
                                            }
                                        ?>
                                       
                                    </div>
                                </div>
                           @endforeach
                        </div>

                    </div>

                    <!-- Shop Page Navigation -->

                   

                </div>

            </div>
        </div>
    </div>
</div>
@endsection




