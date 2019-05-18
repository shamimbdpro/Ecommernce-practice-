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
                                              <div class="card-header">
                                                @if(Session('status'))
                                                <div class="alert alert-success icons-alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <i class="icofont icofont-close-line-circled"></i>
                                                    </button>
                                                    <h6><strong>Success!</strong></h6>
                                                </div>
                                                @endif
                                              </div>
                                              <div class="card">
                                                  <div class="card-block">
                                                      <form action="{{route('customuser.store')}}" method="post">
                                                          @csrf
                                                           <!-- title -->
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Name</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-normal" placeholder="Enter user name" name="name" value="{{old('name')}}">
                                                                  @if($errors->has('name'))
                                                                   <span class="error">{{$errors->first('name')}}</span>
                                                                   @endif
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Username</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-normal" placeholder="Enter username" name="username" value="{{old('username')}}">
                                                                  @if($errors->has('username'))
                                                                   <span class="error">{{$errors->first('username')}}</span>
                                                                   @endif
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Email</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-normal" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
                                                                  @if($errors->has('email'))
                                                                   <span class="error">{{$errors->first('email')}}</span>
                                                                   @endif
                                                              </div>
                                                          </div>

                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Password</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-normal" placeholder="Enter Password" name="password" value="{{old('password')}}">
                                                                  @if($errors->has('password'))
                                                                   <span class="error">{{$errors->first('password')}}</span>
                                                                   @endif
                                                              </div>
                                                          </div>




                                                          <!-- category -->
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">User Role</label>
                                                             <div class="col-sm-10">

                                                               <select name="role_id" class="form-control form-control-normal">
                                                                    <option value="">Select User Role</option>
                                                                   @foreach($userRole as $data)
                                                                   <option value="{{$data->id}}" {{ (old("role_id") == $data->id ? "selected":"")}}>{{$data->role_name}}</option>
                                                                   @endforeach
                                                                 </select>
                                                                 @if($errors->has('role_id'))
                                                                  <span class="error">{{$errors->first('role_id')}}</span>
                                                                  @endif
                                                             </div>
                                                         </div>

                                                         <!-- public cation status -->

                                                         <div class="form-group row form-radio">
                                                             <label class="col-sm-2 col-form-label">Status</label>
                                                             <div class="col-sm-10">
                                                               <div class="radio radiofill radio-success radio-inline">
                                                                <label>
                                                                  <input type="radio" name="status" value="1" checked>
                                                                  <i class="helper"></i>Publish
                                                                </label>
                                                              </div>
                                                               <div class="radio radiofill radio-danger radio-inline">
                                                                 <label>
                                                                   <input type="radio" name="status" value="0">
                                                                   <i class="helper"></i>Draft
                                                                 </label>
                                                               </div>

                                                             </div>
                                                         </div>

                                                         <div class=" text-center">
                                                             <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                         </div>

                                                      </form>
                                                  </div>
                                              </div>

                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
