@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div>
        @if ($errors->any()) --}}
            {{-- @dump($errors->any())
            <div class="col-8 offset-2 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> --}}

    <form id="crate" action="{{route('admin.posts.update', $post)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text"
          class="form-control"
          id="title"
          name="title"
          placeholder="Titolo">
        </div>

        <div class="form-group">
          <label for="content">Scrivi</label>
          <textarea class="form-control"
          id="content"
          name="content"
          cols="30"
          rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </form>
@endsection
