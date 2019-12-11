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
                    <a href="{{route('product.create')}}">Thêm mới</a>
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
            <form method="post" enctype="multipart/form-data">
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
                @if(Session::has('createProductSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{Session::get('createProductSuccess')}}</div>
                @endif
                <div class="form-group">
                    <label name="ten_san_pham" class="control-label">Tên Sản Phẩm</label>
                    <input name="ten_san_pham" class="form-control" />
                    <span asp-validation-for="TenHh" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="hinh" class="control-label">Hình</label>
                    <input type="file" name="fhinh" class="form-control" required />
                    <span  class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="don_gia" class="control-label">Đơn Gía</label>
                    <input name="don_gia" class="form-control" />
                    <span class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="giam_gia" class="control-label">Giá Giảm</label>
                    <input name="giam_gia" class="form-control" />
                    <span class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="mo_ta" class="control-label">Mô Tả</label>
                    <textarea name="mo_ta" style="height:110px;width:420px;"></textarea>
                    <span class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="loai_san_pham" class="control-label">Loại Sản Phẩm</label>
                    <select name="loai_san_pham" class="form-control1">
                        <option value="0" selected="selected">Không thuộc loại nào</option>

                        @foreach($get_cate as $loai)

                            <option value="{{$loai->ma_loai_con}}">{{$loai->ten_loai_con}}</option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label name="thuong_hieu" class="control-label">Mã Nhà Cung Cấp</label>
                    <select name="thuong_hieu" class="form-control1">
                        <option value="0" selected="selected">Không thuộc loại nào</option>

                        @foreach($get_thuong_hieu as $th)

                            <option value="{{$th->ma_thuong_hieu}}">{{$th->ten_thuong_hieu}}</option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label name="so_luong" class="control-label">Số Lượng</label>
                    <input name="so_luong" class="form-control" />
                    <span  class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label name="san_pham_moi" class="control-label">Sản Phẩm Mới</label>
                    <select name="san_pham_moi" class="form-control1">
                        <option value="new" selected="selected">Sản phẩm mới</option>
                        <option value="NULL">Không phải</option>
                    </select>
                    <span  class="text-danger"></span>
                </div>
                <div class="form-group">
                    <input type="submit" value="Thêm" class="btn btn-default" style="background-color:#389bcf; color:white;" />
                </div>
            </form>
            </div>
        </div>

        <div>
            <a href="{{route('product.index')}}" style="font-size:17px; text-decoration: none;"> Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection
