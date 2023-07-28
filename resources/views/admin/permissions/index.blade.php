@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Roles</span> - Page</h4>
@endsection

@section('dashboard-content')
<div class="card">
    <div class="card-body">
        <div class="media flex-column flex-sm-row">
            <div class="mr-sm-3 mb-2 mb-sm-0">
                <a href="#">
                    <img src="/limitlesstheme/global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
                </a>
            </div>
    
            <div class="media-body">
                <h6 class="media-title font-weight-semibold">
                    <a href="/admin/roles">PERMISSIONS</a>
                </h6>
    
                <ul class="list-inline list-inline-dotted text-muted mb-2">
                    <li class="list-inline-item"><a href="#" class="text-muted"> Permissions assigned to roles</a></li>
                </ul>
    
            </div>
    
            <div class="ml-sm-3 mt-2 mt-sm-0">
                <span class="badge bg-blue">
                   <a href="{{ route('admin.permissions.create') }}" style="color:white; font-size:1.004rem;">CREATE PERMISSION</a>
                  </span> 
            </div>
        </div>
    </div>
    
    <table class="table datatable-show-all">
      <thead>
        <tr>
          <th>Name</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($permissions as $permission)
        <tr>
            <td >
                {{ $permission->name }}
            </td>
            <td>
                 <form method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('Are you sure to delete permission {{$permission->name}}?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
            </td>
        </tr>  
            @endforeach
       
      </tbody>
    </table>
  </div>
@endsection