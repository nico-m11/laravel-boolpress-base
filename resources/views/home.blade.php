@extends('layouts.index')

@section('main')
<table class="table table-dark table-striped">
  <thead class="table-dark">  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Autore</th>
      <th scope="col">Id_categoria</th>
      <th scope="col">Altro</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key)
    <tr>
      <th scope="row">{{ $key->id }}</th>
      <td>{{ $key->title }}</td>
      <td>{{ $key->author }}</td>
      <td>{{ $key->category_id }}</td>
      <td> <a href="#"></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection