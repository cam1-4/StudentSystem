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
    Edit & Update
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
      <form method="post" action="{{ route('students.update', $student->id) }}">
        <div class="form-group">
              @csrf
              @method('PATCH')
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $student->name }}">
         </div>
         <div class="form-group">
          <label for="course">Course</label>
          <input type="text" class="form-control" name="course" value="{{ $student->course }}">
         </div>
         <div class="form-group">
          <label for="yrlvl">Year Level</label>
          <input type="text" class="form-control" name="yrlvl" value="{{ $student->yrlvl }}">
         </div>
         <div class="form-group">
          <label for="sex">Sex</label>
          <input type="text" class="form-control" name="sex" value="{{ $student->sex }}">
         </div>
         <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" value="{{ $student->address }}">
         </div>
         <div class="form-group">
          <label for="age">Age</label>
          <input type="text" class="form-control" name="age" value="{{ $student->age }}">
         </div>
         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" value="{{ $student->email }}">
         </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ $student->password }}">
        </div>
       <div class="form-group form-check">
           <input type="checkbox" class="form-check-input" id="exampleCheck1">
           <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
          <button type="submit" class="btn btn-primary">Update User</button>
      </form>
  </div>
</div>
@endsection