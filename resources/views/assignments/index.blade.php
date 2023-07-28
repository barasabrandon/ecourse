@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Phone List</span> - Page</h4>
@endsection

@section('dashboard-content')
@role('admin|saler|superadmin')
 <!-- Column rendering -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Assignment List</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
          <a class="list-icons-item" data-action="remove"></a>
        </div>
      </div>
    </div>

    <table class="table datatable">
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>File</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($assignments as $item)
          <tr>
            <td>{{$item->title}}</td>          
            <td>{{$item->description}}</td>  
            @if ($item->file !== 'null')
             <td><a href="uploads/courses/{{$item->file}}" class="btn btn-primary">Download</a></td> 
            @else 
              <td>No File</td>              
            @endif           
                     
        @endforeach      
      
      </tbody>
    </table>
  </div>
  <!-- /column rendering -->
@endrole
@endsection