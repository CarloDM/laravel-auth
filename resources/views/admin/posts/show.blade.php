@extends('layouts.admin')
@section('content')

<div class="container p-3 text-center">
  <h1 class="fs-2 text-secondary my-4">{{$post->title}}</h1>

  <div class="paragraph p-4 border rounded-3">
    <p class="">{{$post->text}}</p>
  </div>

  <div class=" p-1  border rounded-3  text-end">
    <span class="">{{$post->date}}</span>
  </div>


</div>
@endsection
