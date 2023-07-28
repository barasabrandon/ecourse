@extends('layouts.admin')


@section('page-header')
<livewire:enroll-container />
@endsection

@section('dashboard-content')
<!-- Info blocks -->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
            <i class="icon-list-unordered icon-2x text-blue-400 border-blue-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Courses</h5>
                <p class="mb-3">Total Courses:{{$courses}} </p>
                <a href="#" class="btn bg-blue-400">View</a>
            </div>
        </div>
    </div>
    

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="icon-list-unordered icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="card-title">Assignments</h5>
                <p class="mb-3">Totlal assignments:{{$assignments}}</p>
                <a href="#" class="btn bg-blue">View</a>
            </div>
        </div>
    </div>
</div>
<!-- /info blocks -->

    
@endsection