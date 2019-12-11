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
                    <a href="{{route('admin.home')}}">Trang chủ</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('product.index')}}">Sản phẩm</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                <a href="{{route('product.detail',$product_detail->ma_san_pham)}}">ChiTiet</a>
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
                    <input class="form-control" value="{{$product_detail->ma_san_pham}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Tên Loại</label>
                    <input class="form-control" value="{{$product_detail->ten_san_pham}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Sản Phẩm</label>
                    <img src="{{asset('web/sanpham/'.$product_detail->hinh)}}" style="width:57px; height:70px;"/>

                </div>
                <div class="form-group">
                    <label class="control-label">Đơn Giá</label>
                    <input class="form-control" value="{{$product_detail->don_gia}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Giảm Giá</label>
                    <input class="form-control" value="{{$product_detail->giam_gia}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Mô Tả</label>
                    <textarea name="ghi_chu" placeholder="{{$product_detail->mo_ta}} " style="height:150px;width:569px;padding-left:10px;padding-top:10px;border-radius:7px;" readonly ></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Mã Loại Con</label>
                    <input class="form-control" value="{{$idBigCate->ten_loai_con}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Mã Thương Hiệu</label>
                    <input class="form-control" value="{{$id_th->ten_thuong_hieu}} " readonly/>

                </div>
                <div class="form-group">
                    <label class="control-label">Số Lượng</label>
                    <input class="form-control" value="{{$product_detail->so_luong}} " readonly/>

                </div>
                <div class="form-group">
                    <input class="form-control" value="{{$product_detail->san_pham_moi}} " readonly/>

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