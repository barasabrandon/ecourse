@extends('layouts.admin')

@section('page-header')
<livewire:enroll-container/>
@endsection

@section('dashboard-content')
@role('admin|tutor')
    <!-- Centered forms -->
    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="header-elements-inline">
                                <h5 class="card-title">New Assignement</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <form action="{{ route('assignments.store')}}" method="POST" enctype="multipart/form-data"> 
                                @csrf
                                <div class="form-group">
                                    <label>Enter course name:</label>
                                    <input name="title" type="text" class="form-control" placeholder="Course name">
                                </div>

                                <div class="form-group">
                                    <label>Upload Course Files:</label>
                                    <input name="file" type="file" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Enter course description:</label>
                                  <textarea name="description" placeholder="Course description" class="form-control" ></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /form centered -->

@endrole
@endsection