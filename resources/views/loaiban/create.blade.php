<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Loại Bàn";
?>
@extends("admin.layout-admin")
@section("menu")
    @include("admin.menu-admin")
@endsection
@section("search")
    @include("admin.search-admin")
@endsection
@section("content")
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 style="display:inline;" class="card-title">Thêm Loại Bàn </h4>
                </div>
            </div>

        <form action="{{route('TableLoaiBan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tenloaimonan">Tên loại</label>
                <input type="text" class="form-control" id="tenloaimonan" name="tenloaiban">
            </div>
            <div class="form-group">
                <label for="tenloaimonan">Số lượng ghế</label>
                <input type="text" class="form-control" id="tenloaimonan" name="soluongghe">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
