@extends('layouts.app')

@section('content')
    <div style="margin-left: 500px; margin-right: 500px">
        <button type="button" class="btn btn-outline-primary">
            <a href="/addblog" style="text-align: right;">+ Create Blog</a>
        </button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $item)
          <form action="/deleteblog/{{ $item->id }}" method="POST">
            <tr>
                <td>{{ $item->title }}</td>
                <td>
                    <form action="/deleteblog/{{ $item->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
          </form>
          @endforeach
        </tbody>
      </table>
    </div>
    
@endsection