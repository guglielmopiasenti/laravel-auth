@extends('layouts.app')

@section('title' , 'Projects')

@section('content')
<nav>
  <h1 class="py-4">Projects</h1>
</nav>
<div class="card py-5 px-3">
  <table class="table table-borderless ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">URL</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Featured</th>
        <th scope="col" class="text-center"> Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($projects as $project)    
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->name}}</td>
        <td>{{$project->github_url}}</td>
        <td>{{$project->created_at}}</td>
        <td>{{$project->updated_at}}</td>
        <td>{{$project->is_featured}}</td>
        <td class="d-flex align-items-center ">
          <a href="{{route ('admin.projects.show', $project)}}" class="btn btn-sm btn-primary">
            <i class="fa-solid fa-eye"></i>
          </a>
          <a href="{{route ('admin.projects.edit', $project)}}" class="btn btn-sm btn-warning ms-2">
            <i class="fa-solid fa-pencil"></i>
          </a>
          <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger ms-2">
              <i class="fa-solid fa-trash-can"></i>
            </button>
          </form>
        </td>
        @empty
            <h3 class="text-center">No Projects in here! Get to work!</h3>
        @endforelse
      </tr>
    </tbody>
  </table>
</div>
@endsection