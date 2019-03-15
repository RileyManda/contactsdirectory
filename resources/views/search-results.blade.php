<!-- index.blade.php -->
@extends('layout')
<style>
  .uper {
    margin-top: 400px;
  }
</style>
@section('content')
<div class="search-container container">
<h1>Search Results</h1>
<p>Results for '{{request()->input('query')}}'</p>
@foreach($directories as $directory)
<div>{{$directory->name}}</div>
@endforeach
@endsection