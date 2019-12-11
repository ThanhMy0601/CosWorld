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
                    <a href="{{route('member.index')}}">Thành Viên</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('member.create')}}">Thêm Mới</a>
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
                @if(Session::has('createMemberSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{Session::get('createMemberSuccess')}}</div>
                @endif
                    <div class="form-group">
                        <label name="ten_dang_nhap" class="control-label">Tên Đăng Nhập</label>
                        <input name="ten_dang_nhap" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="ten_thanh_vien" class="control-label">Tên Thành Viên</label>
                        <input name="ten_thanh_vien" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="mat_khau" class="control-label">Mật Khẩu</label>
                        <input type="password" name="mat_khau" class="form-control" required />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="email" class="control-label">Email</label>
                        <input name="email" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="so_dien_thoai" class="control-label">Số Điện Thoại</label>
                        <input name="so_dien_thoai" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label name="dia_chi" class="control-label">Địa Chỉ</label>
                        <input name="dia_chi" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn btn-default" style="background-color:#389bcf; color:white;"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="{{route('member.index')}}" style="font-size:17px; text-decoration: none;"> Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection
