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
                    <a asp-controller="AdminHome" asp-action="Index">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a asp-controller="Loais" asp-action="Index">Loại sản phẩm</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a asp-controller="Loais" asp-action="Details">ChiTiet</a>
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
                    <label class="control-label">Mã Loại</label>
                    <input class="form-control" value="{{$cate_detail->ma_loai_con}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Tên Loại</label>
                    <input class="form-control" value="{{$cate_detail->ten_loai_con}} " readonly/>

                </div>
            </div>
        </div>
        <div>
            <a href="{{route('category.index')}}" style="font-size:17px; text-decoration: none;">Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection