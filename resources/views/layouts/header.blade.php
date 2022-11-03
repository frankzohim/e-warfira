
<header>
    <div class="r-header r-header-inner r-header-strip-01">
      <div class="r-header-strip r-header-strip-01">
        <div class="container">
          <div class="row clearfix">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="r-logo">
                <a href="{{ route('homepage') }}" class="d-inline-block"><img src="{{ asset('assets/images/logo-warfira.png') }}" class="img-fluid d-block" alt=""></a>
              </div>
              <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="r-header-action float-left">
                <a href="login-register.html"> <img src="{{ asset("assets/images/icon-lock.png") }}" alt=''> <span>Connexion</span></a>
                <a href="#" class="r-search"> <img src="{{ asset("assets/images/icon-search.png") }}" alt=''> <span>Recherche</span></a>

                <div class="r-search-wrapper">
                  <div class="r-search-inner">
                    <form>
                        <input type="text" class="r-search-field" placeholder="Search">
                        <button type="submit" class="r-search-btn">
                          <i class="fa fa-search"></i>
                        </button>
                    </form>
                  </div>
                </div> <!-- /r-search-wrapper -->
              </div>
              <div class="r-nav-section float-right">
                <nav>
                  <ul>
                    <li class="r-has-child">
                      <a href="index.html">VOLS</a>

                    </li>
                    <li class="r-has-child">
                      <a href="about.html">HOTELS</a>

                    </li>
                    <li class="r-has-child">
                      <a href="car-listing.html">EXTRANET</a>

                    </li>
                  
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="r-slider r-slider-02">  
              <div class="r-slider owl-carousel" id="defaultHomeSlider">
                <div class="r-slider-item">
                  <img src="{{ asset('assets/images/slide-1.png') }}" class="img-fluid d-block m-auto" alt="">
                  <div class="container">
                    <div class="r-slider-top-content">
                      <h1 class="animated fadeInDown">Découvrez <span>une</span></h1>
                      <h4 class="animated fadeInLeft">Autre façon <strong>de</strong> Voyager</h4>
                      <a href="#" class="btn btn-outlined animated fadeInUp"> Reservez Maintenant </a>
                    </div>
                  </div>
                </div>
                <div class="r-slider-item">
                  <img src="{{ asset('assets/images/slide-2.jpg') }}" class="img-fluid d-block m-auto" alt="">
                  <div class="container">
                    <div class="r-slider-top-content">
                      <h1>Expérience <span></span></h1>
                      <h4>Unique De voyage <strong>et</strong></h4>
                      <h4>d'hébergement</h4>
                      <a href="#" class="btn btn-outlined"> Reservez Maintenant</a>
                    </div>
                  </div>
                </div>
                <div class="r-slider-item">
                  <img src="{{ asset('assets/images/slide-3.png') }}" class="img-fluid d-block m-auto" alt="">
                  <div class="container">
                    <div class="r-slider-top-content">
                      <h1>Allons <span>à </span></h1>
                      <h4>La découverte <strong>des</strong> merveilles d'Afrique</h4>
                      <a href="#" class="btn btn-outlined"> Reservez Maintenant </a>
                    </div>
                  </div>
                </div>
              </div>


        </div>
		
		<div class="r-slider-serach form-search dark">
			
			
			
			
          <form action="/api/search"  method="POST">
					@csrf
                  <div class="form-title ">
				   
                    
            <h6>
							<b>
								<ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
									<li class="nav-item">
										<a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#oneway">One Way</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#roundtrip">Roundtrip / Return</a>
									</li>
                  <li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#multy-city">Multi-city</a>
									</li>
								</ul>
							</b>
					</h6>
                  </div>
				  
				    <div class="row row-inputs">
									<div class="col-sm-6">
										<div class="form-group has-icon has-label">
											<label>From</label>
											<input type="text" class="form-control" id="from" name="from" placeholder="Type Departure City" 
											autocomplete="off" required>
											<input type="hidden" name="from-code" id="from-code" value="">
											<span class="form-control-icon"><i class="fa fa-plane-departure"></i></span>
										</div>
									</div>
                  <div class="col-sm-6">
										<div class="form-group has-icon has-label">
											<label>To</label>
											<input type="text" class="form-control" id="to" name="to" placeholder="Type Destination City" 
											autocomplete="off" required>
											<input type="hidden" name="to-code" id="to-code" value="">
											<span class="form-control-icon"><i class="fa fa-plane-arrival"></i></span>
										</div>
									</div>
								  </div>
								 
								  <div class="row row-inputs">
									<div class="col-sm-12">
										<div class="form-group has-icon has-label label" id="datetimepicker2" data-target-input="nearest">
											<label>Departure</label>
											<input type="text" class="form-control datepicker" data-toggle="datetimepicker" data-target="#datetimepicker2" 
											placeholder="Select Date">
											<span class="form-control-icon"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
									
								  </div>
								  <div class="row row-inputs">
									<div class="col-sm-12">
									  <div class="form-group has-icon has-label">
										  <label>Travellers</label>
										  <input type="number" class="form-control" name="passengers" placeholder="Traveller" value="1" required>
										  <span class="form-control-icon"><i class="fa fa-user"></i></span>
									  </div>
								  </div>
								  </div>
				    <div class="tab-content">
							
							<div class="tab-pane active" id="oneway">
								<input type="hidden" name="request_type" id="request_type" value="oneway">
								
							</div>
							<div class="tab-pane" id="roundtrip">
								<input type="hidden" name="request_type" id="request_type" value="roundtrip">
								 
								  
								  <div class="row row-inputs">
									
									<div class="col-sm-12">
									  <div class="form-group has-icon has-label label" id="datetimepicker4" data-target-input="nearest">
										<label>Return</label>
										<input type="text" class="form-control datepicker" data-toggle="datetimepicker" data-target="#datetimepicker4" 
										placeholder="Select Date">
										<span class="form-control-icon"><i class="fa fa-calendar"></i></span>
									</div>
									</div>
								  </div>
								 
							</div>
							<div class="tab-pane" id="multy-city">
								<input type="hidden" name="request_type" id="request_type" value="roundtrip">
								  
								  
								  <div class="row row-inputs">
									<div class="col-sm-12">
									  <div class="form-group has-icon has-label label" id="datetimepicker2" data-target-input="nearest">
										<label style="text-align: center"><i class="fa fa-plus"></i> Add City</label>
										
									  </div>
									</div>
								  
									</div>
								 
							</div>
					</div>
                  
                  <div class="form-footer">
                    <div class="inner clearfix">
                        <a href="#" class="float-left"><i class="fa fa-plus-circle"></i>Advanced Search</a>
                        <button type="submit" class="btn m-auto d-block btn-full">Search</button>
                    </div>
                  </div>
              </form>
            </div>
      
    </div>
