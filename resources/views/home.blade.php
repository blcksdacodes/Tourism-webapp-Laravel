@extends('layouts.app')

@section('content')
<div class="container" style="margin-right: 100px; margin-left: 100px ">
    <h4>Welcome {{ Auth::user()->name }}</h4>
</div>
@endsection
