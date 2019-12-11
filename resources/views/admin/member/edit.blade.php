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
                    <a href="{{route('admin.home')}}" >Trang Chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('member.index')}}" >Thành Viên</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('member.edit',$member_detail->ma_thanh_vien)}}" >Sửa</a>
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
                <form href="" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                @if ($errors->any())
                <div class="alert alert-success">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('editMemberSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{Session::get('editMemberSuccess')}}</div>
                @endif
                    <div class="form-group">
                        <label name="ten_dang_nhap" class="control-label">Tên Đăng Nhập</label>
                        <input name="ten_dang_nhap" class="form-control" value="{{$member_detail->ten_dang_nhap}}"/>
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="ten_thanh_vien" class="control-label">Tên Thành Viên</label>
                        <input name="ten_thanh_vien" class="form-control" value="{{$member_detail->ten_thanh_vien}}"/>
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="email" class="control-label">Email</label>
                        <input name="email" class="form-control" value="{{$member_detail->email}}" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="so_dien_thoai" class="control-label">Số Điện Thoại</label>
                        <input name="so_dien_thoai" class="form-control" value="{{$member_detail->so_dien_thoai}}"/>
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="dia_chi" class="control-label">Địa Chỉ</label>
                        <input name="dia_chi" class="form-control" value="{{$member_detail->dia_chi}}"/>
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Cập nhật" class="btn btn-default" style="background-color:#389bcf; color:white;"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="{{route('category.index')}}" style="font-size:17px; text-decoration: none;">Back to List</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection
