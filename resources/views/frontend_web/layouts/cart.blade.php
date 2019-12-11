@extends('frontend_web.master.master')
@section('main_content')
<!-- Cart -->
<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title" style="font-family:serif;font-weight:bolder;font-size:38px;">Giỏ Hàng Của Bạn</div>

                        <div class="cart_items">
                                <ul class="cart_list" style="width: 1100px;">

                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image" style="height:0px;width:100px;"></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between" style="float:right;">
                                            <div class="cart_item_name cart_info_col">
                                                <div class="cart_item_title" style="width:238px;font-size:18px;font-weight:bold;color:dimgray;">Tên sản phẩm</div>
                                            </div>
                                            <div class="cart_item_color cart_info_col">
                                                <div class="cart_item_title" style="width:120px;font-size:18px;font-weight:bold;color:dimgray;margin-left:77px;">Số lượng</div>
                                            </div>
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title" style="width:170px;padding-left:50px;font-size:18px;font-weight:bold;color:dimgray;margin-left:7px;">Giá bán</div>
                                            </div>
                                            <div class="cart_item_quantity cart_info_col">
                                                <div class="cart_item_title" style="width:200px;padding-left:50px;font-size:18px;font-weight:bold;color:dimgray;">Thành tiền</div>
                                            </div>
                                            <div class="cart_item_price cart_info_col">
                                                <div class="cart_item_title" style="width:80px;padding-right:50px;font-size:18px;font-weight:bold;color:dimgray;">Xóa</div>
                                            </div>
                                        </div>
                                    </li>

                                   
                                    @foreach ($product_cart as $item)
                                    
                                        <li class="cart_item clearfix">
                                            <div class="cart_item_image" style="width:100px;"><a href=""><img src="{{asset('web/sanpham/'.$item->attributes->img)}}" alt="" style="height:90px;"></a></div>
                                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                <div class="cart_item_name cart_info_col">
                                                    <div class="cart_item_text" style="width:300px; margin-left: 9.53%">{{$item->name}}</div>
                                                </div>
                                                <div class="cart_item_quantity cart_info_col">
                                                    <div class="cart_item_text" style="width:60px;">
                                                        <div class="quantity">
                                                            <div class="quantity-select">
                                                                <input type="hidden" id="mahh" name="mahh" value="@item.MaHh" />
                                                                <span style="height:35px; width:45px; text-align:center; color:dimgray;margin-left:28px;">{{$item->quantity}}</span>
                                                                <!--<input class="entry value" style="height:35px; width:45px; text-align:center; background-color:lightgray; color:dimgray;" type="number" min="1" step="1" id="soluongmoi" name="soluongmoi" value="" />-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                    $thanh_tien=$item->price*$item->quantity;
                                                ?>

                                                <div class="cart_item_price cart_info_col">
                                                    <div class="cart_item_text" style="width:170px;margin-right:-26px;">{{number_format($item->price)}} đ</div>
                                                </div>
                                                <div class="cart_item_price cart_info_col">

                                                    <div class="cart_item_text" style="width:200px;margin-right:-28px;">{{number_format($thanh_tien)}} đ</div>
                                                </div>
                                                <div class="cart_item_total cart_info_col">
                                                    <div class="cart_item_text" style="width:80px;margin-right:-67px">
                                                        <div class="rem">
                                                            <div><a href="{{route('delete.cart',$item->id)}}" class="close"></a>  </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                       

                                    @endforeach


                                </ul>
                            </div>


                            <div class="order_total" style="width:1100px;height:200px;">
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">TỔNG TIỀN:</div>
                                    <div class="order_total_amount" style="width:247px;padding-right:57px;">{{number_format($total)}} đ</div>
                                </div>
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">PHÍ VẬN CHUYỂN:</div>
                                    <div class="order_total_amount" style="width:247px;padding-right:57px;">0 đ</div>
                                </div>
                                
                                <div class="order_total_content text-md-right">
                                    <div class="order_total_title">TỔNG HÓA ĐƠN:</div>
                                    <div class="order_total_amount" style="width:247px;padding-right:57px;">{{number_format($total)}} đ</div>
                                </div>
                            </div>



                       

                        <form asp-controller="ThanhToan" asp-action="Index" method="post">
                            <div class="cart_buttons" style="margin-right:115px;">
                                <button type="submit" class="button cart_button_checkout">Đi đến thanh toán</button>
                            </div>
                        </form>
                        <form asp-controller="HangHoa" asp-action="Index" method="post" style="float: left; margin-top: -108px; margin-left: 560px;">
                            <div class="cart_buttons">
                                <button type="submit" class="button cart_button_checkout" style="color: rgba(0,0,0,0.5);background: #FFFFFF;border: solid 1px #b2b2b2;">Tiếp tục mua hàng</button>
                            </div>
                        </form>
                    
                   


                </div>
            </div>
        </div>
    </div>
</div>
@endsection