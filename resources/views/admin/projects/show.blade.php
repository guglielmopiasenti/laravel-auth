@extends('layouts.app')

@section('title', 'Project')

@section('content')
<header>
  <h1 class="text-center display-1 my-4">{{$project->name}}</h1>
</header>
<div class="d-flex align-items-center justify-content-between gap-3">
  <img src="{{$project->screenshot_path}}" alt="{{$project->name}}">
  <div class="card p-3">
    <p>{{$project->description}}</p>
    <div>{{$project->technologies}}</div>
    <div>{{$project->is_featured}}</div>
    <a href="{{url($project->github_url)}}">
      <i class="fa-brands fa-github"></i>
    </a>
  </div>
</div>
<div>

</div>
@endsection