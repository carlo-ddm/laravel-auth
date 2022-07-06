@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Contenuto</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>{{$post->content}}</td>
              <td>
                <a class="btn btn-dark" href="{{route('admin.posts.index')}}">BACK</a>
              </td>
            </tr>

        </tbody>
      </table>
</div>
@endsection
