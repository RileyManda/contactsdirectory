@extends('homelayout')
@section('content')
        <div class="flex-top position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                Contacts Directory
                </div>

                <div class="links">
                <a href="{{ route('directories.index')}}" class="btn btn-primary">My Directory</a>
                   <!-- <a href="https://laracasts.com">Search</a>-->
                </div><!--Links End-->
                <div> @include('search')</div>
            
            </div><!--Content End-->
           
           
        </div><!--flex End-->
        @endsection