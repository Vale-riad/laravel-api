@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="py-4">
    <h1>{{$technology->name}}</h1>
    @if($technology->projects->isNotEmpty())
        <h3>Tecnologie associate:</h3>
        <ul>
            @foreach ($technology->projects as $project)
                <li><a href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a></li>
            @endforeach
        </ul>
    @else
        <h3>Nessuna tecnologia associata</h3>
    @endif
  </div>
</div>
@endsection