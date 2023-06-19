@extends('layouts.admin')
@section('content')
<div class="container p-3 text-center">
  <h1 class="fs-2 text-secondary my-4">crea</h1>

  <form action="{{ route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="mb-3">

      <label for="title" class="form-label">Title</label>
      <input
        id="title"
        name="title"
        value="{{old('title')}}"
        class="form-control"
        placeholder="TItle"
        type="text"
      >
      <div id="" class="form-text"></div>
    </div>
        {{-- --------------------------- --}}
    <div class="mb-3">

      <label for="reading_time" class="form-label">reading_time</label>
      <input
        id="reading_time"
        name="reading_time"
        value="{{old('reading_time')}}"
        class="form-control"
        placeholder=""
        type="number"
      >
      <div id="" class="form-text"></div>
    </div>
        {{-- --------------------------- --}}
    <div class="mb-3">

      <label for="title" class="form-label">testo</label>
      <textarea
      id="text"
      name="text"
      class="form-control"
      rows="10"
      placeholder="inserisci testo"
      type="text"
      >
      {{old('text')}}
      </textarea>
      <div id="" class="form-text"></div>
    </div>
        {{-- --------------------------- --}}

    <button
      class="btn btn-dark "
      type="submit"
      >
      invia
    </button>
  </form>


  <script>
    ClassicEditor
        .create( document.querySelector( '#text' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</div>
@endsection
