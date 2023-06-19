@extends('layouts.admin')
@section('content')

<div class="container p-3 text-center">
  <h2 class="fs-4 text-secondary my-4">Elenco Posts</h2>
  <div class="">

    <table class="table table-info table-striped">
      <thead></thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">titolo</th>
          <th scope="col">data</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as  $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <th scope="row">{{$post->title}}</th>
            <th scope="row">{{$post->date}}</th>
            <th scope="row"><a class="btn btn-dark" href="">link</a></th>
        </tr>
        @endforeach

      </tbody>

    </table>




  </div>
</div>
@endsection
