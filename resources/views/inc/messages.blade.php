@if  (count($errors) > 0) 
 @foreach ($errors->all() as $error)
 <div class="alert alert-danger alert-rounded alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{session('error')}}
</div>
     {{-- <div class="alert alert-danger">
         {{$error}}
        </div> --}}
 @endforeach

@endif

@if(session('success'))
<div class="alert alert-primary alert-rounded alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-rounded alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{session('error')}}
</div>

    {{-- <div class=" alert alert-danger">
        {{session('error')}}
    </div> --}}
@endif

@if(session('message'))
<div class="alert bg-teal text-white alert-rounded alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    {{session('message')}}
</div>
    {{-- <div class=" alert alert-primary">
        {{session('message')}}
    </div> --}}
@endif