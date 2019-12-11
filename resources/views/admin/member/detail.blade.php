@extends('admin.master.master')
@section('main_content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">


        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Dashboard <small>reports & statistics</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
            <li>
                    <i class="fa fa-home"></i>
                    <a href="{{route('admin.home')}}" asp-action="Index">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('member.index')}}" asp-action="Index">Thành Viên</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('member.detail',$member_detail->ma_thanh_vien)}}" asp-action="Details">ChiTiet</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp;
                    <span class="thin uppercase visible-lg-inline-block">&nbsp;</span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS -->
        
        <hr />
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label">Mã Thành Viên</label>
                    <input class="form-control" value="{{$member_detail->ma_thanh_vien}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Tên Đăng Nhập</label>
                    <input class="form-control" value="{{$member_detail->ten_dang_nhap}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Tên Thành Viên</label>
                    <input class="form-control" value="{{$member_detail->ten_thanh_vien}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" value="{{$member_detail->email}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Mật Khẩu</label>
                    <input class="form-control" value="{{$member_detail->mat_khau}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Số Điện Thoại</label>
                    <input class="form-control" value="{{$member_detail->so_dien_thoai}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Địa Chỉ</label>
                    <input class="form-control" value="{{$member_detail->dia_chi}} " readonly/>

                </div>
            </div>
        </div>
        <div>
            <a href="{{route('member.index')}}" style="font-size:17px; text-decoration: none;">Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection