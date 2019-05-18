
@extends('layouts.backend')

@section('contents')


<div class="pcoded-content">

    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                  <a class="btn btn-success" href="{{URL::TO('chache_chear')}}">Clear Cache</a>
                  <h4 style="color:green">
                   @if(Session('chache_chear'))
                    {{ session('chache_chear') }}
                   @endif
                 </h4>
            </div>
        </div>
    </div>
</div>

@endsection
