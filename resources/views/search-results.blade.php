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

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Firt Name</td>
          <td>Last Name</td>
          <td>Home Number</td>
          <td>Mobile Number</td>
          <td>Email Address</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach($directories as $directory)
        <tr>
            <td>{{$directory->id}}</td>
            <td>{{$directory->first_name}}</td>
            <td>{{$directory->last_name}}</td>
            <td>{{$directory->home_number}}</td>
            <td>{{$directory->mobile_number}}</td>
            <td>{{$directory->email_address}}</td>

            <td><a href="{{ route('directories.edit',$directory->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('directories.destroy', $directory->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection