@extends('layouts.app')

@section('content')
    
<div class="row" style="margin-right: 100px; margin-left: 100px">
    @foreach ($category as $item)
        <div class="col-md-4">
            <h3>{{ $item->title }}</h3>
            <p class="col-15 text-truncate">{{ $item->description }}</p>
            <p>
                <a href="/detailblog/{{ $item->id }}" style="text-align: right;">full story</a>
            </p>
        </div>
    @endforeach
</div>



@endsection