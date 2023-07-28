@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Create Permissions</span> - Page</h4>
@endsection

@section('dashboard-content')

<div class="d-flex justify-content-center align-center">

  <!-- Right aligned buttons -->
<div class="card">
<div class="card-header header-elements-inline">
      <h6 class="card-title">Add Permission </h6>
<div class="header-elements">
<div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
          <a class="list-icons-item" data-action="remove"></a>
        </div>
      </div>
</div>

    <div class="card-body">
      <form method="POST" action="{{ route('admin.permissions.store') }}">
        @csrf
        <div class="form-group">
          <label>Permission name:</label>
          <input type="text" id="name" name="name"  class="form-control" placeholder="Name" >
        </div>

        <div class="d-flex justify-content-end align-items-center">
          <a href="{{ route('admin.permissions.create') }}" class="btn btn-light">Cancel</a>
          <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
        </div>
</form>
</div>
  </div>
  <!-- /right aligned buttons -->
</div>

@endsection