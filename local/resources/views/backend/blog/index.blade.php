@extends('layouts.backend')
@section('contents')
                    <div class="pcoded-content">

                        <!-- [ breadcrumb ] end -->
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
                                                      <a href="{{route('blog.create')}}" class="btn btn-info"><i class="fa fa-plus"></i>Add Blog</a>
                                                    </div>
                                                    <h3  id="msg" class="text-center d-inline"></h3>
                                                    
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="lang-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>title</th>
                                                                        <th>Status</th>
                                                                        <th>View</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <?php $x=0;?>


                                                                  @foreach($getdata as $data)
                                                                  <?php $x++;?>

                                                                    <tr>
                                                                        <td>{{$x}}</td>
                                                                        <td>{!! $data->name !!}</td>
                                                                        <td>
                                                                          @if($data->is_completed==0 )
                                                                            <a href="#" class="btn btn-danger">incomplete</a>
                                                                          @else
                                                                          <a href="#" class="btn btn-success">complete</a>
                                                                          @endif

                                                                        </td>
                                                                        <td>
                                                                            <a href="{{route('blog.show',$data->id)}}" class="btn btn-info">View details</a>
                                                                        </td>
                                                                        <td>
                                                                          <a href="" ><i class="fa fa-edit"></i></a>
                                                                          <a href="#" class="view"><i class="fa fa-eye"></i></a>
                                                                          <form action="#" method="post" style="display:inline">
                                                                          <a href="javascript:void(0)"class="trash" id="{{$data->id}}"><i class="fa fa-times" ></i></a>
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

@section('custom-script')

  <!-- <script>
     $('.trash').click(function(){
     var id=$(this).attr('id');
     var url='{{route("blog.destroy",":id")}}';
        url = url.replace(':id', id);
       var csrf_token=$('meta[name="csrf-token"]').attr('content');
       $.ajax({
           url:url,
           type:'POST',
           data:{'_method':'DELETE','_token': csrf_token },
           success:function(data){
             $('#'+id).closest('tr').hide();
           }

       });

   });
  </script> -->



<script>
$('.trash').click(function(){
var id=$(this).attr('id');
var url='{{route("blog.destroy",":id")}}';
url = url.replace(':id', id);
var csrf_token=$('meta[name="csrf-token"]').attr('content');
  $.ajax({
    url:url,
    type: 'POST',
    data:{'_method': 'DELETE','_token':csrf_token},

  })
 })
</script>




@endsection
@endsection
