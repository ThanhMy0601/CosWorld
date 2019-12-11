@extends('frontend_web.master.master')
@section('main_content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<br />
<div class="row" style="margin-bottom:115px;">
    <div class="col-75">
        <div class="container">
            <br />
           

            @if ($qty_total>0)
            
                @if (session()->has('username'))
                
                    <?php
                        $kh=session()->get('username');
                    ?>
                    <div class="col-lg-5">
                        <h3 style="color:#5f5f5f;font-weight:bold;">1. Địa Chỉ Giao Hàng</h3>
                        <div class="location_oder">
                            <div style="margin:10px">
                                <span style="color:red;">Giao hàng đến địa chỉ này? </span><span class="select_edit_oder_border hover_border_background" style="margin-left: 78px;"><a href="#" style="color:black;font-weight:bold;text-decoration:none;">Sửa</a></span>
                            </div>
                            <div class="div_boder_payment"></div>
                            <div style="margin-top:10px;margin-bottom:10px;">
                            <div style="font-weight:bolder;font-size:20px;">{{$kh->ma_thanh_vien}}</div>
                                <div style="font-weight:bolder;font-size:20px;">{{$kh->ten_thanh_vien}}</div>
                                <div><b>Điện thoại: </b><i>{{$kh->so_dien_thoai}}</i></div>
                                <div><b>Địa chỉ: </b><i>{{$kh->dia_chi}}</i></div>
                            </div>
                        </div>
                        <h3 style="color:#5f5f5f;font-weight:bold;">2. Đơn Hàng</h3>
                        <div class="customer_payment">
                            <div style="margin:10px">
                                <span>Đơn hàng gồm có : <span style="color:cadetblue; font-weight:bold;">{{$qty_total}} sản phẩm</span> </span> <span class="select_edit_oder_border hover_border_background" style="margin-left: 47px;"><a asp-controller="GioHang" asp-action="Index" style="color:black;font-weight:bold;text-decoration:none;">Sửa</a></span>
                            </div>
                            <div class="div_boder_payment"></div>
                            
                            @foreach ($product_cart as $item)
                            

                                <table style="margin-top:10px;">
                                    <tr>
                                        <td style="padding-right: 45px;">
                                            <b><span>{{$item->quantity}} </span><span> x </span></b><span> <a style="text-decoration:none;" href="">{{$item->name}}</a> </span>
                                        </td>
                                        <td style="padding-bottom: 24px;">{{number_format($item->price)}}</td>
                                    </tr>
                                </table>
                            @endforeach 
                            <div class="div_boder_payment"></div><br />
                            <div><b>Tổng tiền:</b><span style="float:right;"> {{$total}} đ</span></div>
                            <div><b>Phí vận chuyển:</b><span style="float:right;">0 đ</span></div>
                            <div class="div_boder_payment" style="border-bottom: 2px solid #c2bebe;"></div><br />
                            <div style="margin-bottom:10px;font-size:18px;"><b>Tổng hóa đơn:<span style="float:right;">{{$total}} đ</span></b></div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 style="color:#5f5f5f;font-weight:bold;">3. Chọn hình Thức Thanh Toán</h3>
                        <div class="customer_payment">
                            <div style="margin-top: 12px;">
                                <div>
                                    <span style="float:right;margin-right: 207px;margin-top: 7px;"> Thanh toán bằng tiền mặt khi nhận hàng.</span>
                                    <div class="select_payment_border hover_border_background">
                                        <a onclick="openPayment(event, 'TienMat')" href="#" class="tablinks" data-toggle="tab" id="defaultOpen" style="color: white;font-weight: bold;text-decoration: none;">Chọn</a>
                                    </div>
                                </div>
                                <br />
                                <div>
                                    <span style="float:right;margin-right: 198px;margin-top: 7px;"> Thanh toán bằng <b style="font-size:18px"><span style="color:#173399;">Pay</span><span style="color: #0680d4;">Pal.</span></b> <a href="https://www.paypal.com/vn/webapps/mpp/home" style="text-decoration:none;font-size:12px;">What is Paypal?</a></span>
                                    <div class="select_payment_border hover_border_background">
                                        <a onclick="openPayment(event, 'Paypal')" href="#" class="tablinks" data-toggle="tab" style="color: white;font-weight: bold;text-decoration: none;">Chọn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="div_boder_payment" style="padding-top: 17px;padding-bottom: 17px;"></div>
                            <div>
                                <div id="TienMat" class="tabcontent">
                                    <form action="{{route('post.checkout')}}" method="post" style="margin-top: 15px;">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <label for="id_postalcode">Ghi chú khi nhận hàng:</label>
                                        <textarea name="ghi_chu" placeholder="Viết ghi chú của bạn..." style="height:150px;width:569px;padding-left:10px;padding-top:10px;border-radius:7px;"></textarea>
                                        <input type="submit" value="Thanh Toán" class="btn" style="width:300px;font-size:22px;background-color:#0e8ce4;margin-left: 127px;">
                                    </form>
                                </div>
                                <!-- <div id="Paypal" class="tabcontent">
                                    <div style="margin-top:15px; margin-left:100px;margin-bottom:17px;">
                                        <div>
                                            <img src="{{asset('web/images/img-paypal.PNG')}}" />
                                        </div>
                                        <div style="margin-left:80px;margin-top:10px;">
                                            <table border="0" cellpadding="10" cellspacing="0" align="center">
                                                <tr>
                                                    <td align="center"></td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                        <a><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="Check out with PayPal" /></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div> -->

                            </div>
                        </div>
                    </div>

                
                @else
                
                    <div class="alert alert-danger" style="text-align:center;">
                        Vui lòng <a asp-controller="Login" asp-action="Index" style="text-decoration:none;font-weight:bold;">đăng nhập</a> để thanh toán. Nếu bạn chưa có tài khoản - Đăng ký <a asp-controller="Register" asp-action="Index" style="text-decoration: none;font-weight:bold;">Tại đây!!!</a>
                    </div>
                @endif
            
            @else
            
                <div class="alert alert-danger" style="text-align:center;">
                    Không có sản phẩm nào trong giỏ hàng. <a asp-controller="HangHoa" asp-action="Index" style="text-decoration:none;font-weight:bold;">Đến trang mua hàng!</a>
                </div>
            @endif


        </div>
    </div>

</div>


<script>
    function openPayment(evt, TypePayment) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(TypePayment).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection
