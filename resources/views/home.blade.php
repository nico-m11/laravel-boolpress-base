@extends('layouts.index')

@section('main')
<table class="table table-dark table-striped">

  <thead class="table-dark">  
  <td>
  <a class="btn btn-outline-warning" href="http://localhost:8000/post/create">Crea Nuovo Utente</a>
  <td>
  </td>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Autore</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Altro</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key)
    <tr>
      <th scope="row">{{ $key->id }}</th>
      <td>{{ $key->title }}</td>
      <td>{{ $key->author }}</td>
      @if ($key->postInformation != null)
        <td>{{ $key->postInformation->description }}</td>
      @else
        <td>No description availablabe</td>
      @endif
      <td><a class="btn btn-outline-warning" href="{{ route('post.show', $key->id) }}">Dettagli</a></td>
      <td><a class="btn btn-outline-warning" href="{{ route('post.edit', $key->id) }}">Modifica</a></td>
     
      <td>
      <form method="post" class="d-inline"action="{{route('post.destroy', $key->id)}}">
          @csrf
          @method('delete')
         <input type="submit" class="btn btn-outline-danger" value="Elimina">
        </form>
        </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection