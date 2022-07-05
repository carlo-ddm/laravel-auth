@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Index Crud</h1>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Vai</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->title}}</td>
              <td>
                  <button class="btn btn-primary">Vai</button>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection
