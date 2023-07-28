@extends('layouts.admin')

@section('page-header')
<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Let's Talk</span> - Page</h4>
@endsection

@section('dashboard-content')
@role('admin|tutor|student')
<livewire:show-chats/>

@endrole
@endsection