@extends('layouts.backend')
@section('contents')
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->


                        <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                              @if(Session('status'))
                                              <div class="card-header">
                                                <div class="alert alert-success icons-alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                      <i class="icofont icofont-close-line-circled"></i>
                                                    </button>
                                                    <h6><strong>Success!</strong></h6>
                                                </div>
                                              </div>
                                              @endif
                                              <div class="card">
                                                  <div class="card-block">
                                                      <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                                                        @csrf

                                                           <!-- title -->
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Title</label>
                                                              <div class="col-sm-10">
                                                                    <textarea  class="form-control form-control-normal" placeholder="Enter slider title" name="title"></textarea>
                                                                  @if ($errors->has('title'))
                                                                      <span class="danger">{{$errors->first('title')}}</span>
                                                                  @endif
                                                              </div>
                                                          </div>

                                                           <!-- description -->
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Description</label>
                                                              <div class="col-sm-10">
                                                                  <textarea type="text" class="form-control form-control-normal" placeholder="Enter slider description" name="des"></textarea>
                                                                  @if ($errors->has('des'))
                                                                      <span class="danger">{{$errors->first('des')}}</span>
                                                                  @endif
                                                              </div>
                                                          </div>


                                                          <input type="hidden" name="usreid" value="{{auth::user()->name}}">

                                                          <!-- title -->
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Slider Image</label>
                                                             <div class="col-sm-10">
                                                                 <input type="file" class="form-control form-control-normal"  name="img">
                                                                 @if ($errors->has('img'))
                                                                     <span class="danger">{{$errors->first('img')}}</span>
                                                                 @endif
                                                             </div>
                                                         </div>

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
