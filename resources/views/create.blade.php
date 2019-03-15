<!-- create.blade.php -->
@extends('layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Contact
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
      <form method="post" action="{{ route('directories.store') }}">
          <div class="form-group">
              @csrf
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="lname">Last Name :</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="hnumber">Home Number :</label>
              <input type="text" class="form-control" name="home_number"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="mnumber">Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email_address"/>
          </div>

          <button type="submit" class="btn btn-primary">Create Contact</button>
      </form>
  </div>
</div>
@endsection