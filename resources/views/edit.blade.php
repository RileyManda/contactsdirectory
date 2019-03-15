@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit {{$directory->first_name}}
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('directories.update', $directory->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="first_name" value="{{$directory->first_name}}"/>
          </div>

          <div class="form-group">
              <label for="lname">Last Name :</label>
              <input type="text" class="form-control" name="last_name" value="{{$directory->last_name}}"/>
          </div>

          <div class="form-group">
              <label for="hnumber">Home Number:</label>
              <input type="text" class="form-control" name="home_number" value="{{$directory->home_number}}"/>
          </div>

          <div class="form-group">
              <label for="mnumber">Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number" value="{{$directory->mobile_number}}"/>
          </div>

          <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="text" class="form-control" name="email_address" value="{{$directory->email_address}}"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Contact</button>
      </form>
  </div>
</div>
@endsection