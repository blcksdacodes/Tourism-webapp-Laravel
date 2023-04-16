@extends('layouts.app')

@section('content')
    
    <form action="/addblogitem" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div style="margin-right: 500px; margin-left: 500px">
        <h3>New Blog</h3>
        <div class="form-group">
            <label for="InputName">Title:</label>
            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" name="title">
        </div>
        <div>
            <label for="InputRole">Category</label>
            <select id="InputRole" class="form-control" name="categorie">
              <option selected>Beach</option>
              <option>Mountain</option>
            </select>
        </div>
        <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Photo: </label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>
          </form>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Story: </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Create</button>
    </div>
    </form>
@endsection