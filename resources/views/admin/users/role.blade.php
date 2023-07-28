@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">User</span> - Page</h4>
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
                    <a href="#">{{ $user->name }} : {{ $user->email }}</a>
                </h6>
    
                <ul class="list-inline list-inline-dotted text-muted mb-2">
                    <li class="list-inline-item"><a href="#" class="text-muted"> User roles.</a></li>
                    <li class="list-inline-item"><a href="#" class="text-muted"> User roles.</a></li>
                </ul>
    
            </div>
    
            <div class="ml-sm-3 mt-2 mt-sm-0">
                <span class="badge bg-blue">
                   <a href="{{ route('admin.roles.create') }}" style="color:white; font-size:1.004rem;">CREATE ROLE</a>
                  </span> 
            </div>
        </div>
        
        @if ($user->roles->count() > 0)
        <p>
            <strong>
                User roles
            </strong> 
               <ul style="list-style-type: none">
                @foreach ($user->roles as $user_role)
                <li style="display:flex; flex-direction:row; gap:1rem;">
                  <div> {{$user_role->name}}</div>
                  
                     @if ($user_role->name !== 'superadmin')
                     <div>
                        <form method="POST"
                        action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                        onsubmit="return confirm('Are you sure to remove role {{$user_role->name}}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ $user_role->name }}</button>
                       </form>
                      </div> 
                     @endif
                </li>
               @endforeach
            </ul>
        </p>       
        @else
        <div>
            <p>
                <strong>
                  User roles
                </strong> 
                No roles</p>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
            @csrf
            <fieldset class="mb-3">

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Select Roles</label>
                    <div class="col-lg-5">
                        <select id="role" name="role" autocomplete="role-name" class="form-control">
                            @foreach ($roles as $role)
                               <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Assign role</button> 
        </form>

        {{-- PERMISSION --}}
          <legend class="text-uppercase font-size-sm font-weight-bold"></legend>
        
        @if ($user->permissions->count() > 0)
        <p>
            <strong>
                User permissions
            </strong> 
               <ul style="list-style-type: none">
                @foreach ($user->roles as $user_role)
                <li style="display:flex; flex-direction:row; gap:1rem;">
                  <div> {{$user_role->name}}</div>
                  
                     @if ($user_role->name !== 'superadmin')
                     <div>
                        <form method="POST"
                        action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}"
                        onsubmit="return confirm('Are you sure to remove role {{$user_role->name}}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ $user_role->name }}</button>
                       </form>
                      </div> 
                     @endif
                </li>
               @endforeach
            </ul>
        </p>       
        @else
        <div>
            <p>
                <strong>
                  User permissions
                </strong> 
                No permissions</p>
        </div>
        @endif

        <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
            @csrf
            <fieldset class="mb-3">

                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Select Permissions</label>
                    <div class="col-lg-5">
                        <select id="role" name="role" autocomplete="role-name" class="form-control">
                            @foreach ($permissions as $role)
                               <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Assign Permission</button> 
        </form>

    </div>  
    
    
  </div>
@endsection