@extends('frontend_web.master.master')
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{asset('web/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('web/styles/contact_responsive.css')}}">
<!-- Contact Info -->

<div class="contact_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{asset('web/images/contact_1.png')}}" alt=""></div>
                        <div class="contact_info_content">
                            <h4 class="contact_info_title" style="font-family:serif;font-weight:bold;font-size:16px;">Điện thoại</h4>
                            <h5 class="contact_info_text" style="font-weight:400;">+84 909000999</h5>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{asset('web/images/contact_2.png')}}" alt=""></div>
                        <div class="contact_info_content">
                            <h4 class="contact_info_title" style="font-family:serif;font-weight:bold;font-size:16px;">Email</h4>
                            <h5 class="contact_info_text" style="font-weight:400;">cosmeticsworld@gmail.com</h5>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{asset('web/images/contact_3.png')}}" alt=""></div>
                        <div class="contact_info_content">
                            <h4 class="contact_info_title" style="font-family:serif;font-weight:bold;font-size:16px;">Địa chỉ</h4>
                            <h5 class="contact_info_text" style="font-weight:400;">280, An Dương Vương, quận 5, TP. HCM, Việt Nam</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title" style="font-family:serif;font-size:40px; font-weight:bold;">Liên Hệ</div>
                    @if ($errors->any())
                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('contactSuccess'))
                        <div class="alert alert-success" style="text-align:center;">{{session()->get('contactSuccess')}}</div>
                    @endif
                    <form method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="contact_form_text">
                            <label class="control-label">Tên Của Bạn</label><br/>
                            <input name="ten_khach_hang" class="input-contact" placeholder="Nhập tên của bạn" required="required" data-error="Please, write us a message." style="border: solid 1px #0e8ce4;"></input>
                        </div>
                        <div class="contact_form_text">
                            <label class="control-label">Email</label><br/>
                            <input name="email" class="input-contact" placeholder="Nhập email của bạn" required="required" data-error="Please, write us a message." style="border: solid 1px #0e8ce4;"></textarea>
                        </div>
                        <div class="contact_form_text">
                            <label class="control-label">Số Điện Thoại</label><br/>
                            <input name="so_dien_thoai" class="input-contact" placeholder="Nhập số điện thoại của bạn" required="required" data-error="Please, write us a message." style="border: solid 1px #0e8ce4;"></textarea>
                        </div>
                        <div class="contact_form_text">
                            <label class="control-label">Tiêu Đề</label><br/>
                            <input name="tieu_de" class="input-contact" placeholder="Nhập tiêu đề" required="required" data-error="Please, write us a message." style="border: solid 1px #0e8ce4;"></>
                        </div>
                        <div class="contact_form_text">
                            <label class="control-label">Nội dung phản hồi</label>
                            <textarea id="contact_form_message" name="noi_dung" class="text_field contact_form_message" rows="4" placeholder="Nhập nội dung phản hồi" required="required" data-error="Please, write us a message." style="border: solid 1px #0e8ce4;"></textarea>
                        </div>
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button" style="margin-left: 430px;">Gửi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel" style="margin-top:17px;"></div>
</div>

<!-- Map -->

<div class="contact_map">
    <div id="google_map" class="google_map">
        <div class="map_container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.651110644807!2d106.68001421541548!3d10.761348962412967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b888ab357%3A0xc469f6e800231314!2zMjgwIEFuIETGsMahbmcgVsawxqFuZywgUGjGsOG7nW5nIDQsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1544176706071" width="100%" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- -->
<script src="{{asset('web/js/contact_custom.js')}}"></script>
@endsection