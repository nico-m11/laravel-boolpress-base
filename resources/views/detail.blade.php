
@extends('layouts.index')
@section('main')
<div class='row'>
<div class='col-4 offset-md-4 mt-5'>
<div class="card">
  <div class="card-body">
  <a class="btn btn-dark" href='\'><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    <h5 class="card-title">{{ $data->title }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $data->author }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Categorie: {{ $data->categorie->title }}</h6>
    <p class="card-text">Altri Dettagli: {{ $data->postInformation->description}}</p>
    <h6 class="card-subtitle mb-2 text-muted">Tag: 
      @foreach($data->tag as $key)
        {{ $key->name }}
      @endforeach
    </h6>
  </div>
</div>
</div>
</div>
@endsection