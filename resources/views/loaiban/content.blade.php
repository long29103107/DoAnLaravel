<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">

                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary">Create</button>
                    <form class="form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
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
                            Tên loại
                        </th>
                        <th>
                            Số lượng ghế
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsloaiban as $lb)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$lb['ten_loai']}}
                            </td>
                            <td class="text-left">
                            {{$lb['so_luong_ghe']}}
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
