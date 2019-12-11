@extends('frontend_web.master.master')
@section('main_content')
<div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"><img src="{{asset('web/images/shop_background.jpg')}}" style="height:497px; width:1531px;" /></div>
        <div class="home_overlay" style="height:0;"></div>
        <div class="home_content d-flex flex-column align-items-center justify-content-center">
            <h2 class="home_title" style="font-family:serif;font-weight:bold;font-size:100px;color:#03417ec9;">About Us</h2>
            <div class="col-lg-8 offset-lg-2">
                <div class="single_post_title" style="font-family:serif; font-weight:bold;font-size:24px;color:#0584dc;"><div class="quote_image"><img src="{{asset('web/images/chitay.png')}}" alt="" style="height:37px;width:50px;"></div>Cửa hàng trực tuyến chuyên bán các mặt hàng mỹ phẩm và các loại sản phẩm chăm sóc nuôi dưỡng cơ thể </div>
                <div class="single_post_title" style="font-family:serif; font-weight:bold;font-size:24px;color:#0968a9;"><div class="quote_image"><img src="{{asset('web/images/chitay.png')}}" alt="" style="height:37px;width:50px;"></div>Các loại mặt hàng sản phẩm có nguồn gốc và xuất sứ rõ ràng. Đảm bảo hàng chính hãng 100% </div>
                <div class="single_post_title" style="font-family:serif; font-weight:bold;font-size:24px;color:#034878;"><div class="quote_image"><img src="{{asset('web/images/chitay.png')}}" alt="" style="height:37px;width:50px;"></div>Sản phẩm của chúng tôi luôn đảm bảo về chất lượng và giá cả để quý khách hàng có thể mua sắm thoải mái nhất </div>
            </div>
        </div>
        
    </div>
@endsection