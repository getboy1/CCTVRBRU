@extends('admin.app')
@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Categories List</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
      <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-outline-secondary">
        Add Category
      </a>
    </div>
  </div>
@endsection
