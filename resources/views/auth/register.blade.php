@extends('layouts.app')

@section('content')

<h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px">Register</h3>

<form method="POST" action="{{ route('register') }}" style="margin-left: 500px; margin-right: 500px" >
    @csrf
    <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="name">
      </div>
    <div class="form-group">
      <label for="InputEmail">Email address</label>
      <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"name="email">
    </div>
    <div class="form-group">
        <label for="InputPhone">Phone Number</label>
        <input type="number" class="form-control" id="InputPhone" aria-describedby="emailHelp" name="phone">
    </div>
    <div>
        <label for="InputRole">Role</label>
        <select id="InputRole" class="form-control" name="role">
          <option selected>User</option>
          <option>Admin</option>
        </select>
    </div>
    <div class="form-group">
      <label for="InputPassword">Password</label>
      <input type="password" class="form-control" id="InputPassword" name="password">
    </div>
    <button style="margin-top: 15px" type="submit" class="btn btn-primary">{{__('Register')}}</button>
  </form>
@endsection