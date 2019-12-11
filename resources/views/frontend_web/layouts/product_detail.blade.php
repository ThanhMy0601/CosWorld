@extends('frontend_web.master.master')
@section('main_content')
<!-- Single Product -->
<div class="single_product" style="padding-bottom:85px;">
    <div class="container">
        <div class="row">


            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image=""><img src="{{asset('web/sanpham/'.$chi_tiet_sp->hinh)}}" alt=""></li>
                    <li data-image=""><img src="{{asset('web/sanpham/'.$chi_tiet_sp->hinh)}}" alt=""></li>
                    <li data-image=""><img src="{{asset('web/sanpham/'.$chi_tiet_sp->hinh)}}" alt=""></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="{{asset('web/sanpham/'.$chi_tiet_sp->hinh)}}" alt="" style="width:377px;"></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category"></div>
                    <h1 class="product_name" style="font-family:serif;font-weight:900;width:500px;">{{$chi_tiet_sp->ten_san_pham}}</h1>
                    <div>
                        <ul style="list-style-type: disc;color:#a3a1a1;margin-bottom:7px;margin-left:47px;font-style: italic;">
                            <li>
                                <h6 style="font-size:13px;font-weight:400;">Sản phẩm chính hãng, chất lượng cao.</h6>
                            </li>
                            <li>
                                <h6 style="font-size:13px;font-weight:400;">Miễn phí giao hàng toàn quốc</h6>
                            </li>
                        </ul>
                    </div>
                    <div style="border-top: 1px solid #c0bbbba6;width:570px;"></div>
                    <div style="margin:35px 0 27px; height:20px;">
                        <?php
                            $giamgia = $chi_tiet_sp->giam_gia  * 100;
                        
                        if ($giamgia > 0)
                        {
                        ?>
                            <div style="float:left;font-size:27px;font-family:serif;font-weight:bold;height:45px;color:#14a1e5;;">
                                GIẢM GIÁ:
                                <span style="color:red; font-size:38px;">
                                    {{$giamgia}} %
                                </span>
                            </div>
                        <?php
                        }
                        else
                        {
                        ?>
                        
                            <div style="float:left;font-size:27px;font-family:serif;font-weight:bold;height:45px;color:#14a1e5;;">
                                <span style="color:red; font-size:38px;">
                                </span>
                            </div>
                       
                        <?php
                        }
                        if ($chi_tiet_sp->so_luong > 10)
                        {
                        ?>
                            <div style="float:right;height:45px;margin-right:-90px;color:gray;font-size:21px;margin-top:10px;">
                                Tình trạng:
                                <span class="span-tinh-trang-con-hang">
                                    Còn hàng
                                </span>
                            </div>
                        <?php
                        }
                        else if ($chi_tiet_sp->so_luong > 0)
                        {
                        ?>
                            <div style="float:right;height:45px;margin-right:-90px;color:gray;font-size:21px;margin-top:10px;">
                                Tình trạng:
                                <span class="span-tinh-trang-sap-het-hang">
                                    Sắp hết hàng
                                </span>
                            </div>
                        <?php
                        }
                        else
                        {
                        ?>
                            <div style="float:right;height:45px;margin-right:-90px;color:gray;font-size:21px;margin-top:10px;">
                                Tình trạng:
                                <span class="span-tinh-trang-da-het-hang">
                                    Đã hết hàng
                                </span>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div style="border-top: 1px solid #c0bbbba6;width:570px;"></div>
                    <div class="order_info d-flex flex-row" style="margin-top:0px;float:left;">
                    <?php
                            
                        $gia_ban = $chi_tiet_sp->don_gia * (1 - $chi_tiet_sp->giam_gia);
                        // $gia_ban=$chi_tiet_sp->don_gia-($chi_tiet_sp->don_gia*$chi_tiet_sp->giam_gia);
                        
                    ?>
                        <form action="{{route('add.cart',$chi_tiet_sp->ma_san_pham)}}" method="get">
                            <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> -->
                               
                                <!-- <input type="hidden" name="id" value="$chi_tiet_sp->ma_san_pham">
                                <input type="hidden" name="name" value="$chi_tiet_sp->ten_san_pham"> -->
                                <!-- <input type="hidden" name="price" value="$chi_tiet_sp->don_gia"> -->
                        
                            <div class="product_price" style="color:red;font-size:31px;margin-top:32px;">{{number_format($gia_ban)}} đ<span>{{number_format($chi_tiet_sp->don_gia)}} đ</span></div>
                            <div style="border-top: 1px solid #c0bbbba6;width:570px;"></div>
                            <div class="clearfix" style="z-index: 1000;margin: 20px 0px 9px;">

                               

                                <!-- Product Quantity -->
                                <div>
                                    <div style="font-family:serif;font-weight:bold;font-size:20px;">Số Lượng</div>
                                    <input type="number" size="4" class="qty_cart" title="Qty" value="1" name="quantity" min="1" step="1">
                                </div>
                            </div>
                            <div style="border-top: 1px solid #c0bbbba6;width:570px;"></div>
                            <div class="button_container">
                                <button type="submit" class="button cart_button" >Thêm vào giỏ hàng</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>

                        </form>
                    </div>
                    <div class="fb-share-button"
                         data-href="https://techworld.azurewebsites.net/san-pham/@Model.MaHh/@Model.TenHhSeoUrl"
                         data-layout="button_count"
                         data-size="large"
                         style="float:right;margin-top:-30px;margin-right:46px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection