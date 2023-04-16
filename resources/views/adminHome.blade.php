@extends('layouts.app')

@section('content')

<div style="margin-left: 500px; margin-right: 500px">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
          <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>
                <form action="/deleteuser/{{ $item->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">
                        Delete
                    </button>
                </form>
            </td>
          </tr>
      @endforeach
    </tbody>
</table>
</div>

@endsection