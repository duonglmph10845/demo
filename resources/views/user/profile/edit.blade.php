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
   <!-- EDIT USER PROFILE PAGE -->
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="card border-0">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="{{ asset('frontend_assets/img/avatar.jpg') }}"></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold fs-16">{{ auth()->user()->full_name }}</h4>
						<h6 class="text-muted fs-12">{{ auth()->user()->job_role }}</h6>
						<a href="{{ route('user.profile.index') }}" class="btn btn-primary mt-3 mb-2">{{ __('View Profile') }}</a>
					</div>
				</div>
				<div class="card-footer p-0">
					<div class="row">
						<div class="col-sm-6 border-right text-center">
							<div class="p-4">
								<h5 class="mb-1 font-weight-bold text-dark number-font fs-14">${{ number_format(auth()->user()->balance) }}</h5>
								<span class="text-muted fs-14">{{ __('Current Balance') }}</span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="text-center p-4">
								<h5 class="mb-1 font-weight-bold text-dark number-font fs-14">{{ number_format(auth()->user()->available_chars) }}</h5>
								<span class="text-muted fs-14">{{ __('Available Characters') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Edit Profile') }}</h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="" enctype="multipart/form-data">
						@method('PUT')
						@csrf
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Full Name') }}</label>
										<input type="text" class="form-control @error('name') is-danger @enderror" name="name" value="{{ auth()->user()->name }}">
										@error('name')
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@enderror									
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Job Role') }}</label>
										<input type="text" class="form-control @error('job_role') is-danger @enderror" name="job_role" value="{{ auth()->user()->job_role }}">
										@error('job_role')
											<p class="text-danger">{{ $errors->first('job_role') }}</p>
										@enderror
									</div>
								</div>
							</div>						
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Email Address') }}</label>
										<input type="email" class="form-control @error('email') is-danger @enderror" name="email" value="{{ auth()->user()->email }}">
										@error('email')
											<p class="text-danger">{{ $errors->first('email') }}</p>
										@enderror
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">								
										<label class="form-label fs-12">{{ __('Phone Number') }}</label>
										<input type="tel" class="fs-12 @error('phone_number') is-danger @enderror" id="phone-number" name="phone_number" value="{{ auth()->user()->phone_number }}">
										@error('phone_number')
											<p class="text-danger">{{ $errors->first('phone_number') }}</p>
										@enderror
									</div>
								</div>
							</div>			
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<label class="form-label fs-12">{{ __('Change Avatar') }}</label>
									<div class="input-group file-browser">									
										<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
										<label class="input-group-btn">
											<span class="btn btn-primary special-btn">
												Browse <input type="file" name="profile_photo" style="display: none;">
											</span>
										</label>
									</div>
									@error('profile_photo')
										<p class="text-danger">{{ $errors->first('profile_photo') }}</p>
									@enderror
								</div>
							</div>	
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Company Name') }}</label>
										<input type="text" class="form-control @error('company') is-danger @enderror" name="company" value="{{ auth()->user()->company }}">
										@error('company')
											<p class="text-danger">{{ $errors->first('company') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Company Website') }}</label>
										<input type="text" class="form-control @error('website') is-danger @enderror" name="website" value="{{ auth()->user()->website }}">
										@error('website')
											<p class="text-danger">{{ $errors->first('website') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Address Line') }}</label>
										<input type="text" class="form-control @error('address') is-danger @enderror" name="address" value="{{ auth()->user()->address }}">
										@error('address')
											<p class="text-danger">{{ $errors->first('address') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('City') }}</label>
										<input type="text" class="form-control @error('city') is-danger @enderror" name="city" value="{{ auth()->user()->city }}">
										@error('city')
											<p class="text-danger">{{ $errors->first('city') }}</p>
										@enderror
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Postal Code') }}</label>
										<input type="text" class="form-control @error('postal_code') is-danger @enderror" name="postal_code" value="{{ auth()->user()->postal_code }}">
										@error('postal_code')
											<p class="text-danger">{{ $errors->first('postal_code') }}</p>
										@enderror
									</div>
								</div>
							</div>
							
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">
							<a href="" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- EDIT USER PROFILE PAGE --> 
    @endsection
</body>

</html>