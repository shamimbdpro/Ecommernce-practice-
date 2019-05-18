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




                                                  <div class="dt-responsive table-responsive">
                                                      <table  class="table  table-bordered nowrap">
                                                        <tr>
                                                          <td width="20%">Name:</td>
                                                          <td>{{$orderdata->name}}</td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20%">Phone:</td>
                                                          <td>{{$orderdata->Phone}}</td>
                                                        </tr>

                                                        <tr>
                                                          <td width="20%">email:</td>
                                                          <td>{{$orderdata->email}}</td>
                                                        </tr>

                                                        <tr>
                                                          <td width="20%">message:</td>
                                                          <td>{{$orderdata->message}}</td>
                                                        </tr>

                                                        <tr>
                                                          <td width="20%">Shipping_address:</td>
                                                          <td>{{$orderdata->shipping_address}}</td>
                                                        </tr>

                                                        <tr>
                                                          <td width="20%">payment_type:</td>
                                                          <td>{{$orderdata->payment_type}}</td>
                                                        </tr>

                                                      </table>








                                                    <h3  id="msg" class="text-center d-inline"></h3>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="lang-dt" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>title</th>
                                                                        <th>price</th>
                                                                        <th>Quantity</th>
                                                                        <th>Subtital</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <?php $x=0;?>


                                                                  <?php $total=0;?>
                                                                  @foreach($getdata as $data)
                                                                  <?php $x++;?>
                                                                  <?php $total += $data->final_price * $data->product_qty;?>

                                                                    <tr>
                                                                        <td>{{$x}}</td>
                                                                        <td>{{$data->title}}</td>
                                                                        <td>{{$data->final_price}}</td>
                                                                        <td>{{$data->product_qty}}</td>
                                                                        <td>{{$data->final_price*$data->product_qty}}</td>


                                                                    </tr>


                                                                @endforeach
                                                                <tr class="text-right">


                                                                  <td ></td>

                                                                  <td>Total</td>
                                                                  <td class="btn btn-info">{{$total}}</td>
                                                                </tr>

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







@endsection
@endsection
