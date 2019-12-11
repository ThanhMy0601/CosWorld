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
                @if(session()->has('delProductSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{session()->get('delProductSuccess')}}</div>
                @endif
            <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                <a id="tab_images_uploader_pickfiles" class="btn yellow" style="float:left; margin-bottom:20px;" href="{{route('product.create')}}">
                    <i class="fa fa-plus"></i> Thêm mới
                </a>
            </div>
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
                            Mã Sản Phẩm
                        </th>
                        <th width="10%" style="text-align:center;">
                            Hình
                        </th>
                        <th width="15%" style="text-align:center;">
                            Tên Sản Phẩm
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
                    @foreach ($product as $item)
                   
                        <tr>
                            <td style="text-align:center;">{{$i}}</td>
                            <td style="text-align:center;">{{$item->ma_san_pham}}</td>
                            <td style="text-align:center;">
                            <img src="{{asset('web/sanpham/'.$item->hinh)}}" style="width:57px; height:70px;"/>
                            </td>                            
                            <td style="text-align:center;">{{$item->ten_san_pham}}</td>
                            <td style="text-align:center;">
                                <a class="btn default btn-sm" style="background-color:#26bacaa6; color:white;" href="{{route('product.detail',$item->ma_san_pham)}}">
                                    <i class="glyphicon glyphicon-eye-open"></i> Chi tiết
                                </a>
                            </td>
                            <td style="text-align:center;">
                                <a class="btn default btn-sm" style="background-color:#c6230fd6; color:white;" href="{{route('product.edit',$item->ma_san_pham)}}">
                                    <i class="glyphicon glyphicon-edit"></i> Sửa
                                </a>
                            </td>
                            <td style="text-align:center;">
                                <a class="btn default btn-sm" style="background-color:#131212c7; color:white;" href="{{route('product.delete',$item->ma_san_pham)}}">
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