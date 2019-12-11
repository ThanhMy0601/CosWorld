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

        <div class="tab-pane" id="tab_images">
              @if ($errors->any())
                <div class="alert alert-success">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session()->has('delBillSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{session()->get('delBillSuccess')}}</div>
                @endif
           
            <div class="row">
                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr role="row" class="heading">
                        <th width="6%" style="text-align:center;">
                            STT
                        </th>
                        <th width="8%" style="text-align:center;">
                            Mã đơn hàng
                        </th>
                        <th width="12%" style="text-align:center;">
                            Ngày đặt
                        </th>
                        <th width="13%" style="text-align:center;">
                            Hình thức thanh toán
                        </th>
                        <th width="15%" style="text-align:center;">
                            Tổng tiền
                        </th>
                        <th width="8%" style="text-align:center;">
                        </th>
                        <th width="8%" style="text-align:center;">
                        </th>
                        <th width="8%" style="text-align:center;">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $i = 1;
                    ?>
                    @foreach ($bill as $item)
                   
                        <tr>
                            <td style="text-align:center;">{{$i}}</td>
                            <td style="text-align:center;">{{$item->ma_don_hang_tv}}</td>
                            <td style="text-align:center;">{{$item->ngay_dat}}</td>
                            <td style="text-align:center;color:#1f1a69;font-weight:bold;">{{$item->hinh_thuc_thanh_toan}}</td>
                            <td style="text-align:center;">{{number_format($item->tong_tien)." đ"}}</td>
                            <td style="text-align:center;">
                                <a class="btn default btn-sm" style="background-color:#26bacaa6; color:white;" href="{{route('bill.detail',$item->ma_don_hang_tv)}}">
                                    <i class="glyphicon glyphicon-eye-open"></i> Chi tiết
                                </a>
                            </td>
                            <td style="text-align:center;">
                                <a class="btn default btn-sm" style="background-color:#131212c7; color:white;" href="{{route('bill.delete',$item->ma_don_hang_tv)}}">
                                    <i class="glyphicon glyphicon-trash"></i> Xóa
                                </a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection