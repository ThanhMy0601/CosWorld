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
                    <a href="{{route('bill.index')}}" asp-action="Index">Đơn hàng</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="{{route('bill.detail',$get_bill->ma_don_hang_tv)}}">Chi Tiết</a>
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
        <div class="tab-pane" id="tab_images">
            <div class="row">
                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr role="row" class="heading">
                       
                        <th width="10%" style="text-align:center;">
                            Mã Đơn Hàng
                        </th>
                        <th width="10%" style="text-align:center;">
                            Sản phẩm
                        </th>

                        <th width="14%" style="text-align:center;">
                            Đơn Giá
                        </th>
                        <th width="14%" style="text-align:center;">
                            Giảm Giá
                        </th>
                        <th width="12%" style="text-align:center;">
                            Số Lượng
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($get_product as $item)
                    
                        <tr>
                            <td style="text-align:center;">{{$item->ma_don_hang_tv}}</td>
                            <td style="text-align:center;">{{$item->ten_san_pham}}</td>
                            <td style="text-align:center;">{{number_format($item->don_gia)}}</td>
                            <td style="text-align:center;">{{$item->giam_gia}}</td>
                            <td style="text-align:center;">{{$item->so_luong}}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a href="{{route('bill.index')}}" style="font-size:17px; text-decoration: none;">Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection