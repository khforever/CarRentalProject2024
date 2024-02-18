<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('admin.includes.head')

<body class="nav-md" >
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Rent Car Admin</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>
								
								{{-- John Doe  --}}
								
								@auth
							{{ auth()->user()->name }}
							@endauth  </h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
		@include('admin.includes.sidebar_menu')
					<!-- /sidebar menu -->

					<!-- /menu  left footer buttons -->
			@include('admin.includes.left_footer_buttons')
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			@include('admin.includes.top_navigation')
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">


                    {{-- title_left --}}
					
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">




								<div class="page-title">


{{-- @yield('manage') --}}

									<div class="title_left">


										<h3>Manage <small>{{$ManageText}} </small></h3>

									  {{-- <h3>Manage <small>Users</small></h3> --}}
									</div>
					  
									<div class="title_right">
									  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Search for...">
										  <span class="input-group-btn">
											<button class="btn btn-secondary" type="button">Go!</button>
										  </span>
										</div>
									  </div>
									</div>
								  </div>











{{-- x_title --}}

								@include('admin.includes.x_title')
								<div class="x_content">
									<br />



									@yield('content_admin')

                                    
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
	@include('admin.includes.footer')
			<!-- /footer content -->
		</div>
	</div>
@include('admin.includes.js')
	

</body></html>
