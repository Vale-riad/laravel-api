@extends('layouts.admin')

@section('content')
    <h1>Lista Types</h1>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message')}}
    </div>
@endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Dettaglii</th>
            <th scope="col">Modifica</th>
            <th scope="col">Cancella</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->title }}</td>
                <td>{{ $type->slug }}</td>
                <td>
                  <a href="{{ route('admin.types.show', $type) }}" class="btn btn-success d-flex">Dettaglio</a>
                  
                </td>
                <td><a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning">Modifica</a></td>
                <td>
                  <form action="{{route('admin.types.destroy', $type)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" >Cancella</button>
                  </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="my-4 text-center">
        <a href="{{route('admin.types.create')}}" class="btn btn-primary" >Crea</a>
      </div>
@endsection