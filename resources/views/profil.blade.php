@extends('layouts.app')

@section('content')
    <form action="/updateprofil/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" style="margin-left: 500px; margin-right: 500px">
        {{ csrf_field() }}
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
        <button style="margin-top: 15px" type="submit" class="btn btn-primary">{{__('Update')}}</button>
    </form>
@endsection