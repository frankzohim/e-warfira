@extends('layouts.master')
@section('title', __('Login or Registration') )
@section('content')
  
   <div class="r-header-inner-banner">
              <div class="r-header-in-over">
                <h1><b>{{ __('Login or Registration') }}</b></h1>
                <div class="r-breadcrum">
                  <ul>
                    <li><a href="{{ route('homepage') }}">{{ __('HOME') }}</a></li>
                    <li><span>{{ __('ACCOUNT') }}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
		 <section id="r-login-register">
          <div class="r-login-register">
            <div class="r-login-register-in">
              <div class="r-auth-or">
                <span>{{ __('OR') }}</span>
              </div>
              <div class="clearfix">
                <div class="r-auth-outer r-login">
                  <div class="r-auth-head">
                    <h2><b>{{ __('Log in') }}</b></h2>
                    <span>{{ __('Login to our website') }}</span>
                  </div>
                  <div class="r-auth-form">
					
					
					<!-- Starting form for login -->
                    <form role="form" method="POST" action="{{ route('login') }}">
					 @csrf
					 
					    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}"  required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
						
						<div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
						<br/>
						<div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('Remember me') }}</span>
                                </label>
                        </div>
                     <br/>
					 <br/>
                      <div class="form-group">
                        <button type="submit" class="btn btn-full">{{ __('LOG IN') }}</button>
                      </div>
					  
                    </form>
					
					<!-- Ending form for login -->
                    <div class="r-from-inof">
                      <p class="text-center">
                        {{ __("Don't have an account yet?") }} <br>
                       {{ __('Create an account in the form on your right.') }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="r-auth-outer r-register">
                  <div class="r-auth-head">
                    <h2><b>{{ __('Sign up') }}</b></h2>
                    <span>{{ __('Required information for account creation') }}</span>
                  </div>
                  <div class="r-auth-form">
                    <form role="form" method="POST" action="{{ route('register') }}" onsubmit="myFunction()">
					
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
										<div class="input-group input-group-alternative mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
											</div>
											<input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
										</div>
										@if ($errors->has('name'))
											<span class="invalid-feedback" style="display: block;" role="alert">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group{{ $errors->has('lastname') ? ' has-danger' : '' }}">
										<div class="input-group input-group-alternative mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
											</div>
											<input class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="{{ __('Lastname') }}" type="text" name="lastname" value="{{ old('lastname') }}" required autofocus>
										</div>
										@if ($errors->has('lastname'))
											<span class="invalid-feedback" style="display: block;" role="alert">
												<strong>{{ $errors->first('lastname') }}</strong>
											</span>
										@endif
								</div>
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
						
						
						
						<div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
						
						<div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                        </div>
						
						<div class="form-group{{ $errors->has('account_type') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <select class="form-control" data-toggle="select" title="Account Type" data-live-search="true" data-live-search-placeholder="Search ..." name='account_type'>
                                        <option disabled selected>{{ __('Account Type') }}</option>
										 <option value="driver">{{ __('Driver') }}</option>
                                        <option value="customer">{{ __('Customer') }}</option>
                                        <option value="provider">{{ __('Provider') }}</option>
                                     </select>
                                </div>
                                @if ($errors->has('account_type'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('account_type') }}</strong>
                                    </span>
                                @endif
                        </div>
						
						<div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="phone" name="phone" type="tel" required size="29">
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                        </div>
						<input id="country_name" name="country_name" type="hidden">
						<input id="country_code" name="country_code" type="hidden">
						<input id="country_iso2" name="country_iso2" type="hidden">
						
						<div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Terms and conditions of use') }}</a></span>
                                        </label>
                                    </div>
                                </div>
                        </div>
						
                      <div class="form-group">
                        <button type="submit" class="btn btn-full">{{ __('Create an account') }}</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<script src="{{ asset('intl-tel-input-master') }}/build/js/intlTelInput.js"></script>
  <script>
  
		var input = document.querySelector("#phone");
		var iti = window.intlTelInput(input, {
		  //allowDropdown: false,
		  //autoHideDialCode: true,
		  // autoPlaceholder: "off",
		  // dropdownContainer: document.body,
		  // excludeCountries: ["us"],
		   //formatOnDisplay: false,
		  // geoIpLookup: function(callback) {
		  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		  //     var countryCode = (resp && resp.country) ? resp.country : "";
		  //     callback(countryCode);
		  //   });
		  // },
		   //hiddenInput: "full_number",
		  initialCountry: 'cm',
		  // localizedCountries: { 'de': 'Deutschland' },
		  //nationalMode: true,
		  //onlyCountries: ['cm'],
		  // placeholderNumberType: "MOBILE",
		  // preferredCountries: ['cn', 'jp'],
		  separateDialCode: true,
		  utilsScript: "E:/laragon/www/sharemyride/public/intl-tel-input-master/buildbuild/js/utils.js",
		});
		
      
		var countryData = iti.getSelectedCountryData();
		//alert(countryData.dialCode);
		//alert(countryData.name);
		
		
		function myFunction() {
			var countryData = iti.getSelectedCountryData();
			//alert(countryData.dialCode);
			//alert(countryData.name);
			document.getElementById("country_name").value = countryData.name;
			document.getElementById("country_code").value = countryData.dialCode;
			document.getElementById("country_iso2").value = countryData.iso2;
			
		}
		

  </script>
@endsection
