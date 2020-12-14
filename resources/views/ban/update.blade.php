<?php
    // $path =  Config::get('paths.path.admin');
    $title = "Table Bàn";
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
                    <h4 style="display:inline;" class="card-title">Cập Nhật Bàn </h4>
                </div>
            </div>

        <form action="{{route('TableBan.update',$ban->id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
            <div class="form-group">
                <label for="usr">Số bàn</label>
                <input type="text" class="form-control" id="" value="{{$ban->so}}" name="soban">
            </div>
            <div class="form-group">
                <label for="usr">Loại bàn</label>
                <select class="form-control" id="sel1" name="idloaiban">
                    @foreach($dsloaiban as $dslb)
                        @if($loaiban->id == $dslb->id )
                            <option value="{{$dslb->id}}" selected >{{$dslb->ten_loai}}</option>
                        @endif
                        @if($loaiban->id != $dslb->id )
                            <option value="{{$dslb->id}}" >{{$dslb->ten_loai}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" id="">
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
