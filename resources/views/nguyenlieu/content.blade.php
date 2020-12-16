<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary"><a href="{{route('TableNguyenLieu.create')}}">Create</a></button>
                    <form class="form" action="#"  method="post" enctype="multipart/form-data">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" name="timkiem" placeholder="Search...">
                            <div class="input-group-append">
                            <button class="btn btn-success">
                                <i class="nc-icon nc-zoom-split"></i>
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                    <table class="table">
                        <thead class=" text-primary">
                        <th style="witdh:120px;">
                        </th>
                        <th>
                            Tên nguyên liệu
                        </th>
                        <th>
                            Đơn giá
                        </th>
                        <th>
                            Tình trạng
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsnguyenlieu as $nl)
                        <tr>
                        <td class="flex-user">
                                <button style="float:left;" class="btn btn-success"><a href="{{route('TableNguyenLieu.edit',$nl->id)}}">Update</a></button>
                                <button style="float:left;" class="btn btn-danger"><a href="{{route('TableNguyenLieu.show',$nl->id)}}">Delete</a></button>
                            </td>
                            <td class="text-left">
                            {{$nl['ten']}}
                            </td>
                            <td class="text-left">
                                {{$nl['don_gia']}}
                            </td>
                            <td class="text-left">
                                {{$nl['tinh_trang']}}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
</div>
