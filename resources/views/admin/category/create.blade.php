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
                    <a asp-controller="Loais" asp-action="Create">Thêm mới</a>
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
                @if(Session::has('createCateSuccess'))
                    <div class="alert alert-success" style="text-align:center;">{{Session::get('createCateSuccess')}}</div>
                @endif
                    <div asp-validation-summary="ModelOnly" class="text-danger"></div>
                    <div class="form-group">
                        <label name="ma_loai_cha" class="control-label">Mã Loại cha</label>
                       <div>
                            <select name="ma_loai_cha" class="form-control1">
                                <option value="0" selected="selected">Không thuộc loại nào</option>

                                @foreach($get_loai_cha as $loai)

                                    <option value="{{$loai->ma_loai_cha}}">{{$loai->ten_loai_cha}}</option>
                                    
                                @endforeach
                            </select>
                       </div>
                    </div>
                    <div class="form-group">
                        <label name="ten_loai" class="control-label">Tên Loại</label>
                        <input name="ten_loai" class="form-control" />
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Thêm" class="btn btn-default" style="background-color:#389bcf; color:white;"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="{{route('category.index')}}" style="font-size:17px; text-decoration: none;"> Quay lại danh sách</a>
        </div>

        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>

    </div>
</div>
<!-- END CONTENT -->
@endsection
