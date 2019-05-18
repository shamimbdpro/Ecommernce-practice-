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
                                                      <form action="{{route('bannerslider.update',$edit->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                           <!-- title -->
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Title</label>
                                                              <div class="col-sm-10">
                                                                  <input type="text" class="form-control form-control-normal" placeholder="Enter slider title" value="{{$edit->title}}" name="title"/>
                                                                  @if ($errors->has('title'))
                                                                      <span class="danger">{{$errors->first('title')}}</span>
                                                                  @endif
                                                              </div>
                                                          </div>

                                                           <!-- description -->
                                                          <div class="form-group row">
                                                              <label class="col-sm-2 col-form-label">Description</label>
                                                              <div class="col-sm-10">
                                                                  <textarea type="text" class="form-control form-control-normal" placeholder="Enter slider description"  name="des">{{$edit->des}}</textarea>
                                                                  @if ($errors->has('des'))
                                                                      <span class="danger">{{$errors->first('des')}}</span>
                                                                  @endif
                                                              </div>
                                                          </div>

                                                          <!-- button link -->
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Button text</label>
                                                             <div class="col-sm-10">
                                                                 <input type="text" class="form-control form-control-normal" placeholder="Enter button text" value="{{$edit->buttontext}}" name="buttontext"/>
                                                                 @if ($errors->has('buttontext'))
                                                                     <span class="danger">{{$errors->first('buttontext')}}</span>
                                                                 @endif
                                                             </div>
                                                         </div>

                                                          <!--  button text -->
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Button Link</label>
                                                             <div class="col-sm-10">
                                                                 <input type="url" class="form-control form-control-normal" placeholder="ex: http://www.softdevltd.com/blog" name="buttonlink" value="{{$edit->buttonlink}}"/>
                                                                 @if ($errors->has('buttonlink'))
                                                                     <span class="danger">{{$errors->first('buttonlink')}}</span>
                                                                 @endif
                                                             </div>
                                                         </div>



                                                         <!-- button link -->
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Button text</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control form-control-normal" placeholder="Enter button text" value="{{$edit->buttontext2}}" name="buttontext2"/>
                                                                @if ($errors->has('buttontext'))
                                                                    <span class="danger">{{$errors->first('buttontext2')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                         <!--  button text -->
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Button Link</label>
                                                            <div class="col-sm-10">
                                                                <input type="url" class="form-control form-control-normal" placeholder="ex: http://www.uniqueitinsittute.com/blog" name="buttonlink2" value="{{$edit->buttonlink2}}"/>
                                                                @if ($errors->has('buttonlink2'))
                                                                    <span class="danger">{{$errors->first('buttonlink2')}}</span>
                                                                @endif
                                                            </div>
                                                        </div>




                                                          <!-- title -->
                                                         <div class="form-group row">
                                                             <label class="col-sm-2 col-form-label">Slider Image</label>
                                                             <div class="col-sm-10">
                                                                 <input type="file" class="form-control form-control-normal" value="{{$edit->img}}" name="img">
                                                                 @if ($errors->has('img'))
                                                                     <span class="danger">{{$errors->first('img')}}</span>
                                                                 @endif
                                                                 <img src="{{asset('public/contents/uploads/slider')}}/{{$edit->img}}" alt="img" height="100" width="150">
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
                                                             <button type="submit" class="btn btn-primary m-b-0">Update</button>
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
