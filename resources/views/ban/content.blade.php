<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <button style="float:left;"  class="btn btn-primary"><a href="{{route('TableBan.index')}}"></a></button></button>
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
                    <div class="">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                        </th>
                        <th>
                            Số bàn
                        </th>
                        <th>
                            Loại bàn
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsban as $b)
                        <tr>
                        <td class="table-button">
                                <button class="btn btn-success">Update</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                            <td class="text-left">
                            {{$b['so']}}
                            </td>
                            <td class="text-left">
                                {{$b->FindLoaiBan($b['id_loai_ban'])->ten_loai}}
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
