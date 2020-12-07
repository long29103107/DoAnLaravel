<div class="content">
    <div class="row">
    <div class="col-md-12">
            <div class="card card-plain">
                <!-- <div class="card-header">
                    <h4 style="display:inline;" class="card-title">User</h4>
                </div> -->
                <div class="card-header">
                    <button style="float:left;" class="btn btn-primary"><a href="{{route('TableUser.create')}}">Create</a></button>
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
                        <th style="">
                        </th>
                        <th>
                            Tài Khoản
                        </th>
                        <th>
                            Họ Tên
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Địa chỉ
                        </th>
                        <th>
                            Phân quyền
                        </th>
                        </thead>
                        <tbody>
                            @foreach($dsuser as $user)
                        <tr>
                        <td >
                            <div class="flex-user">
                            <button class="btn btn-success"><a href="{{route('TableUser.edit',$user->id)}}"> Update</a></button>
                            <button class="btn btn-danger"><a href="{{route('TableUser.show',$user->id)}}">Delete</a></button>
                            <button class="btn btn-warning block"><a href="{{route('TableUser.showactive',$user->id)}}"><?php if($user['khoa'] == true) echo "Active"; else echo "Deactive"; ?></a></button></div>
                            </td>
                            <td class="text-left">
                                {{$user['tai_khoan']}}
                            </td>
                            <td class="text-left">
                                {{$user['ho_ten']}}
                            </td>
                            <td class="text-left">
                                {{$user['sdt']}}
                            </td>
                            <td class="text-left">
                                {{$user['dia_chi']}}
                            </td>
                            <td class="text-left">
                                <?php if($user['phan_quyen'] == true) echo "Admin"; else echo "User"; ?>
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
