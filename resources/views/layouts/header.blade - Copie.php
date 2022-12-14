
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
      <div class="r-slider owl-carousel" id="defaultHomeSlider">
        <div class="r-slider-item">
          <img src="{{ asset('assets/images/slide-1.png') }}" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1 class="animated fadeInDown">D??couvrez avec <span>nous</span></h1>
              <h4 class="animated fadeInLeft">une autre  <strong>fa??on</strong> de voyager</h4>
              <a href="#" class="btn btn-outlined animated fadeInUp"> R??servez Maintenant </a>
            </div>
          </div>
        </div>
        <div class="r-slider-item">
          <img src="{{ asset('assets/images/slide-2.jpg') }}" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1>L'exp??rience  <span>unique </span>de</h1>
              <h4>voyage  <strong>et</strong> d???h??bergement </h4>
              <a href="#" class="btn btn-outlined"> R??servez Maintenant </a>
            </div>
          </div>
        </div>
        <div class="r-slider-item">
          <img src="{{ asset('assets/images/slide-3.png') }}" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1>Allons  <span>?? la d??couverte </span></h1>
              <h4>des merveilles <strong>de l'Afrique </strong></h4>
              <a href="#" class="btn btn-outlined"> R??servez Maintenant </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="r-car-search">
        <div class="container">
          <div class="r-top-form-title animated fadeInUp">
            <span>+400 AGENCE A??RIENNE</span>
            <h3>Rechercher <b>Votre Vol.</b></h3>
          </div>
		  <div class="container shadow  py-2">
			  <div class="container  col-sm p-2 ">
				  <div class="card bg-transparent">
					  <div class="card-header bg-transparent">
						  <h5 class="card-title"></h5>
						  <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
							  <li class="nav-item">
								  <a class="nav-link active" aria-current="true" data-bs-toggle="tab" href="#oneway">One Way</a>
							  </li>
							  <li class="nav-item">
								  <a class="nav-link" data-bs-toggle="tab" href="#roundtrip">Roundtrip / Return</a>
							  </li>
						  </ul>
					  </div>
					  <div class="card-body tab-content">
							<div class="tab-pane active" id="oneway">
								<form action="/api/search" class="mt-3" method="POST">
									<div class="row">
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> D??part </label>
										   <input type="text" class="form-control" id="from" placeholder="Ville de d??part" name="from" 
										   autocomplete="off" required>
										   <input type="hidden" name="from-code" id="from-code" value="">
										   <input type="hidden" name="request_type" id="request_type" value="oneway">
										</div>
									  </div>
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Destination </label>
										   <input type="text" class="form-control" id="to" placeholder="Ville d'arriv??e" name="to" 
										   autocomplete="off" required>
										   <input type="hidden" name="to-code" id="to-code" value="">
										</div>
									  </div>
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Date </label>
										   <input type="date" class="form-control" placeholder="S??lectionner une date" name="date" required>
										</div>
									  </div>
									  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Passagers </label>
										   <input type="number" class="form-control" placeholder="Passagers" value="1" 
										   name="passengers" required>
										</div>
									  </div>
									  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <input type="submit" class="form-control btn-primary" value="Recherchez">
										</div>
									  </div>
									</div>
								</form>
							</div>
						  <div class="tab-pane" id="roundtrip">
							  <form action="/api/search" class="mt-3" method="POST">
									<div class="row">
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> D??part </label>
										   <input type="text" class="form-control" id="from" placeholder="Ville de d??part" name="from" 
										   autocomplete="off" required>
										   <input type="hidden" name="from-code" id="from-code" value="">
										   <input type="hidden" name="request_type" id="request_type" value="oneway">
										</div>
									  </div>
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Destination </label>
										   <input type="text" class="form-control" id="to" placeholder="Ville d'arriv??e" name="to" 
										   autocomplete="off" required>
										   <input type="hidden" name="to-code" id="to-code" value="">
										</div>
									  </div>
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Departure </label>
										   <input type="date" class="form-control" placeholder="S??lectionner une date" name="date" required>
										</div>
									  </div>
									  <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Return </label>
										   <input type="date" class="form-control" placeholder="S??lectionner une date" name="date" required>
										</div>
									  </div>
									  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <label> Passagers </label>
										   <input type="number" class="form-control" placeholder="Passagers" value="1" 
										   name="passengers" required>
										</div>
									  </div>
									  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <input type="submit" class="form-control btn-primary" value="Recherchez">
										</div>
									  </div>
									</div>
								</form>
						  </div>
					  </div>
				  </div>
			  </div>
			</div>

		  
          <form action="/api/search" class="mt-3" method="POST">
            <div class="row">
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> D??part </label>
                   <input type="text" class="form-control" id="from" placeholder="Ville de d??part" name="from" 
                   autocomplete="off" required>
                   <input type="hidden" name="from-code" id="from-code" value="">
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Destination </label>
                   <input type="text" class="form-control" id="to" placeholder="Ville d'arriv??e" name="to" 
                   autocomplete="off" required>
                   <input type="hidden" name="to-code" id="to-code" value="">
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Date </label>
                   <input type="date" class="form-control" placeholder="S??lectionner une date" name="date" required>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Passagers </label>
                   <input type="number" class="form-control" placeholder="Passagers" value="1" 
                   name="passengers" required>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="submit" class="form-control btn-primary" value="Recherchez">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
