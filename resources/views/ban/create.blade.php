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
                    <h4 style="display:inline;" class="card-title">Thêm Bàn </h4>
                </div>
            </div>

        <form action="{{route('TableBan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="tenloaimonan">Số bàn</label>
                <input type="text" class="form-control" id="tenloaimonan" name="soban">
            </div>
            <div class="form-group">
                <label for="sel1">Loại bàn</label>
                <select class="form-control" id="sel1" name="idloaiban">
                     @foreach($dsloaiban as $dslb)
                    <option value="{{$dslb->id}}">{{$dslb->ten_loai}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="usr">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
