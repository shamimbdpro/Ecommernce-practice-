@extends('layouts.backend')
@section('contents')
                    <div class="pcoded-content">

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                      <a href="{{route('customuser.create')}}" class="btn btn-info" ><i class="fa fa-plus"></i>Add User</a>
                                                    </div>
                                                    <h3  id="msg" class="text-center d-inline"></h3>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="lang-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Username</th>
                                                                        <th>Email</th>
                                                                        <th>Role</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <?php $x=0;?>
                                                                  @foreach($getdata as $data)
                                                                  <?php $x++;?>
                                                                    <tr>
                                                                        <td>{{$x}}</td>
                                                                        <td>{{$data->username}}</td>
                                                                        <td>{{$data->email}}</td>
                                                                        <td>{{$data->roleName->role_name}}</td>
                                                                        <td> <center> @if($data->status==1)
                                                                         <i class="fa fa-check fa-1x" style="color:green"></i>
                                                                         @else
                                                                          <i class="fa fa-times fa-1x" style="color:red"></i>
                                                                          @endif </center></td>
                                                                        <td>
                                                                          <a href="{{route('customuser.edit',$data->id)}}" class="edit"><i class="fa fa-edit"></i></a>
                                                                          <form action="#" method="post" style="display:inline">
                                                                          <a href="#"class="trash" id="{{$data->id}}"><i class="fa fa-times" ></i></a>
                                                                        </form>
                                                                        </td>
                                                                    </tr>

                                                                @endforeach

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Language - Comma Decimal Place table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection






@section('custom-script')
  <script>
    $('.trash').click(function(){
    var id=$(this).attr('id');
       swal({
         title: "Are you sure?",
         text: "Do you really want to delete data!",
         icon: "warning",
         buttons: true,
         dangerMode: true,
       });
      $('.swal-button--confirm').click(function(){
        var url='{{route("customuser.destroy",":id")}}';
        url = url.replace(':id', id);
        var csrf_token=$('meta[name="csrf-token"]').attr('content');

        $.ajax({
           url:url,
           type:'POST',
           data:{'_method':'DELETE','_token': csrf_token },
           success:function(data){
             $('#msg').html('<div class="alert alert-success d-inline text-center bg-primary text-white" role="alert">Data Deleted Sucessfull</div>');
               $('#'+id).closest("tr").hide();

           }
       });
     });

    });
  </script>
@endsection
