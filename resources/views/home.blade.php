@extends('homelayout')
@section('content')
        <div class="flex-top position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Contacts Directory
                </div>

                <div class="links">
                <a href="{{ route('directories.index')}}" class="btn btn-light nav-link.active">View Directory</a>
                </div><!--Links End-->
                <div> @include('search')</div>
            
            </div><!--Content End-->
        </div><!--flex End-->
        @endsectionxp