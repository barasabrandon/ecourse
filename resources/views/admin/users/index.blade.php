@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Users</span> - Page</h4>
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
                    <a href="/admin/roles">ROLES</a>
                </h6>
    
                <ul class="list-inline list-inline-dotted text-muted mb-2">
                    <li class="list-inline-item"><a href="#" class="text-muted"> Roles that different users of the website have.</a></li>
                </ul>
    
            </div>
    
            <div class="ml-sm-3 mt-2 mt-sm-0">
                <span class="badge bg-blue">
                   <a href="{{ route('admin.roles.create') }}" style="color:white; font-size:1.004rem;">CREATE ROLE</a>
                  </span> 
            </div>
        </div>
    </div>
    
    <table class="table datatable-show-all">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Roles</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
            <td >
                {{ $user->name }}
            </td>
            <td >
                {{ $user->email }}
            </td>
            <td><a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-success">Roles</a></td>
            <td>
                 <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" onsubmit="return confirm('Are you sure to delete user {{$user->name}}?');">
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