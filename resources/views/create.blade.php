@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Add User
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
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
              <label for="course">Course</label>
              <input type="text" class="form-control" name="course" placeholder="Enter Course">
          </div>
          <div class="form-group">
              <label for="yrlvl">Year Level</label>
              <input type="text" class="form-control" name="yrlvl" placeholder="Enter Year Level">
          </div>
          <div class="form-group">
              <label for="sex">Sex</label>
              <input type="text" class="form-control" name="sex" placeholder="Enter Sex">
          </div>
          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" placeholder="Enter Address">
          </div>
          <div class="form-group">
              <label for="age">Age</label>
              <input type="text" class="form-control" name="age" placeholder="Enter Age">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" placeholder="Enter Password">
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection