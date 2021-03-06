@extends('layout')

@section('content')
  <h1>Edit Project</h1>

  <form action="/projects/{{ $project->id }}" method="post">
    @method('PATCH')
    @csrf

    <div>
      <input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
    </div>

    <textarea name="description" placeholder="Project description">{{ $project->description }}</textarea>

    <div>
      <button type="submit">Update Project</button>
    </div>
  </form>

  <form action="/projects/{{ $project->id }}" method="POST">
    <div>
      @method('DELETE')
      @csrf

      <button type="submit">Delete Project</button>
    </div>
  </form>
@endsection
