@extends('layouts.app')

@section('title' , 'Projects')

@section('content')
<nav>
  <h1 class="py-4">Projects</h1>
</nav>
<div class="card py-5 px-3">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">URL</th>
        <th scope="col">Screenshot</th>
        <th scope="col">Description</th>
        <th scope="col">Languages</th>
        <th scope="col">Featured</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($projects as $project)    
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->name}}</td>
        <td>{{$project->github_url}}</td>
        <td>{{$project->screenshot_path}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->technologies}}</td>
        <td>{{$project->is_featured}}</td>
        @empty
            <h3 class="text-center">No Projects in here! Get to work!</h3>
        @endforelse
      </tr>
    </tbody>
  </table>
</div>
@endsection