<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
    <!-- USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-12">
			<div class="card border-0">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" src="{{ asset('frontend_assets/img/avatar.jpg') }}" class="rounded-circle" ></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold fs-16"></h4>
						<h6 class="text-muted fs-12"></h6>
					
							<h6 class="text-muted fs-12">{{ auth()->user()->full_name }} <span class="text-info"></span></h6>
						
						<a href="{{ route('user.profile.edit') }}" class="btn btn-primary mt-3 mb-2"><i class="fa fa-pencil mr-1"></i> {{ __('Edit Profile') }}</a>
					</div>
				</div>
				
			</div>
			<div class="card border-0">
				<div class="card-body">
					<h4 class="card-title mb-4 mt-1">{{ __('Personal Details') }}</h4>
					<div class="table-responsive">
						<table class="table mb-0">
							<tbody>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Full Name') }} </span>
									</td>
									<td class="py-2 px-0">  {{ auth()->user()->full_name }}</td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Job Role ') }}</span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>								
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Company') }}</span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">Website </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('City') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Country') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Email') }} </span>
									</td>
									<td class="py-2 px-0">{{ auth()->user()->email }}</td>
								</tr>
								<tr>
									<td class="py-2 px-0">
										<span class="font-weight-semibold w-50">{{ __('Phone') }} </span>
									</td>
									<td class="py-2 px-0"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-12">
			<div class="card border-0">				
				<div class="card-body">					
					<div class="row">
						<div class="col-lg-4 col-md-12 col-xm-12">
							<div class="card overflow-hidden border-0 special-shadow">
								<div class="card-body">
									<p class=" mb-0 fs-12 font-weight-bold">{{ __('Standard Characters Used') }}</p>
									<p class=" mb-3 fs-10 text-muted">({{ __('Current Month') }})</p>
									<h2 class="mb-2 number-font-light"></h2>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-xm-12">
							<div class="card overflow-hidden border-0 special-shadow">
								<div class="card-body">
									<p class=" mb-0 fs-12 font-weight-bold">{{ __('Neural Characters Used') }}</p>
									<p class=" mb-3 fs-10 text-muted">({{ __('Current Month') }})</p>
									<h2 class="mb-2 number-font-light"></h2>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-xm-12">
							<div class="card overflow-hidden border-0 special-shadow">
								<div class="card-body">
									<p class=" mb-0 fs-12 font-weight-bold">{{ __('Audio Files Created') }}</p>
									<p class=" mb-3 fs-10 text-muted">({{ __('Current Month') }})</p>
									<h2 class="mb-2 number-font-light"></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card border-0 special-shadow">
								<div class="card-header">
									<h3 class="card-title">{{ __('Character Usage ') }}<span class="text-muted">({{ __('Current Year') }})</span></h3>
								</div>
								<div class="card-body">
									<div class="row mb-5 mt-2">	
										<div class="col-xl-3 col-12 ">
											<p class=" mb-1 fs-12">{{ __('Total Standard Characters Used') }}</p>
											<h3 class="mb-0 fs-20 number-font"></h3>
										</div>
										<div class="col-xl-3 col-12 ">
											<p class=" mb-1 fs-12">{{ __('Total Neural Characters Used') }}</p>
											<h3 class="mb-0 fs-20 number-font"></h3>
										</div>
										<div class="col-xl-3 col-12 ">
											<p class=" mb-1 fs-12">{{ __('Total Audio Files Created') }}</p>
											<h3 class="mb-0 fs-20 number-font"></h3>
										</div>
										<div class="col-xl-3 col-12 ">
											<p class=" mb-1 fs-12">{{ __('Total Listen Mode Results') }}</p>
											<h3 class="mb-0 fs-20 number-font"></h3>
										</div>
									</div>
									<div class="chartjs-wrapper-demo">
										<canvas id="chart-user-usage" class="h-330"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<!-- END USER PROFILE PAGE -->
    @endsection
</body>

</html>