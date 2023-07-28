<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Enroll as a student and enjoy all the courses at ecourse">
	<title>ECOURSE</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	@livewireStyles
</head>

<body class="navbar-md-md-top">

	<!-- Multiple fixed navbars wrapper -->	
	<div class="fixed-top">

		<!-- Main navbar -->
		<div class="navbar navbar-expand-md navbar-dark">
			<div class="d-flex justify-content-center align-items-center" style="color:white;">				
				ECOURSE
			</div>

			<div class="d-md-none">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
					<i class="icon-tree5"></i>
				</button>
				<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
					<i class="icon-paragraph-justify3"></i>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-mobile" style=" display:flex; justify-content:space-between;">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
							<i class="icon-paragraph-justify3"></i>
						</a>
					</li>
				
				</ul>
				
				<ul class="navbar-nav">
					<li class="nav-item dropdown dropdown-user">
						<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
							<img src="/limitlesstheme/global_assets/images/placeholders/noimage.jpg" class="rounded-circle mr-2" height="34" alt="">
							<span>{{Auth::user()->name}}</span>
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Transactions</a>
							<form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    <i class="icon-switch2"></i>{{ __('Log Out') }}
                                </a>
                            </form>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- /main navbar -->


		<!-- Alternative navbar -->
		<div class="navbar navbar-expand-md navbar-dark bg-teal-400">
			<div class="text-center d-md-none w-100">
				<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-second">
					<i class="icon-unfold mr-2"></i>
					Alternative navbar
				</button>
			</div>
			<x-dashboard-profile/>
		
		</div>
		<!-- /alternative navbar -->

	</div>
	<!-- /multiple fixed navbars wrapper -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="/limitlesstheme/global_assets/images/placeholders/noimage.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
								<div class="font-size-xs opacity-50">									
									<ul class="navbar-nav">
										@foreach (auth()->user()->getRoleNames() as $role)
											<li  class="nav-item"><i class="icon-pin font-size-sm"></i> &nbsp;{{ $role }}</li>
										@endforeach
									</ul>
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="/dashboard" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>

						<li class="nav-item">
							<a href="{{ route('chats.index')}}" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Let's Talk
								</span>
							</a>
						</li>
						
						
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Courses</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="{{ route('courses.index')}}" class="nav-link active">List</a></li>
								@role('admin|tutor')								
								<li class="nav-item"><a href="{{ route('courses.create')}}" class="nav-link active">Add</a></li>
								@endrole
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Assignments</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="{{ route('assignments.index')}}" class="nav-link active">List</a></li>
								@role('admin|tutor')								
								<li class="nav-item"><a href="{{ route('assignments.create')}}" class="nav-link active">Add</a></li>
								@endrole
							</ul>
						</li>
						<!-- /main -->
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						@yield('page-header')
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				@include('inc.messages')
				@yield('dashboard-content')
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy;{{ now()->year }} <a href="#">ECOURSE</a> by <a href="mailto: s.wanyonyi@alustudent.com"   target="_blank">Seth</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://api.whatsapp.com/send?text=Mavil Tech Suppot&phone=254757903144" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	@livewireScripts
</body>

	<!-- Core JS files -->

	<script src="/limitlesstheme/global_assets/js/main/jquery.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/limitlesstheme/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/demo_pages/navbar_multiple.js"></script>
	
	{{-- Data Tables --}}
    <script src="/limitlesstheme/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="/limitlesstheme/global_assets/js/plugins/forms/selects/select2.min.js"></script>

    <script src="/limitlesstheme/assets/js/app.js"></script>
    <script src="/limitlesstheme/global_assets/js/demo_pages/datatables_advanced.js"></script>
	<script src="/limitlesstheme/global_assets/js/demo_pages/form_layouts.js"></script>
    
	<!-- /theme JS files -->
	@yield('page-scripts')
</html>
