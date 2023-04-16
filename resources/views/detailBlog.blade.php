@extends('layouts.app')

@section('content')
    <div class="row" style="margin-left: 100px; margin-right: 100px">
        <div class="col-md-4">
            <h3>{{ $detail->title }}</h3>
            <img src="{{ asset("asset/$detail->image") }}" style="width:300px; height:200px">
            <p class="text-justify">{{ $detail->description }}</p>
            <a href="/" style="text-align: right;">Back</a>
        </div>
    </div>
@endsection