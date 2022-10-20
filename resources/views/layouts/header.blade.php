<header>
    <div class="r-header r-header-inner r-header-strip-01">
      <div class="r-header-strip r-header-strip-01">
        <div class="container">
          <div class="row clearfix">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="r-logo">
                <a href="{{ route('homepage') }}" class="d-inline-block"><img src="{{ asset('assets/images/logo-white.png') }}" class="img-fluid d-block" alt=""></a>
              </div>
              <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="r-header-action float-left">
                <a href="login-register.html"> <img src="{{ asset("assets/images/icon-lock.png") }}" alt=''> <span>Login</span></a>
                <a href="#" class="r-search"> <img src="{{ asset("assets/images/icon-search.png") }}" alt=''> <span>Search</span></a>

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
                    <li><a href="drivers.html">ENREGISTREZ VOTRE ETABLISSEMENT</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="r-slider owl-carousel" id="defaultHomeSlider">
        <div class="r-slider-item">
          <img src="assets/images/main-slider-01.jpg" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1 class="animated fadeInDown">Kia Rio <span>z</span></h1>
              <h4 class="animated fadeInLeft">FOR RENT <strong>$50</strong> PER DAY</h4>
              <a href="#" class="btn btn-outlined animated fadeInUp"> Reserve Now </a>
            </div>
          </div>
        </div>
        <div class="r-slider-item">
          <img src="assets/images/main-slider-04.jpg" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1>BMW <span>3</span></h1>
              <h4>FOR RENT <strong>$150</strong> PER DAY</h4>
              <a href="#" class="btn btn-outlined"> Reserve Now </a>
            </div>
          </div>
        </div>
        <div class="r-slider-item">
          <img src="assets/images/main-slider-05.jpg" class="img-fluid d-block m-auto" alt="">
          <div class="container">
            <div class="r-slider-top-content">
              <h1>Audi <span>A4</span></h1>
              <h4>FOR RENT <strong>$100</strong> PER DAY</h4>
              <a href="#" class="btn btn-outlined"> Reserve Now </a>
            </div>
          </div>
        </div>
      </div>

      <div class="r-car-search">
        <div class="container">
          <div class="r-top-form-title animated fadeInUp">
            <span>+400 AGENCE AÉRIENNE</span>
            <h3>Rechercher <b>Votre Vol.</b></h3>
          </div>
          <form action="/api/search" class="mt-3" method="POST">
            <div class="row">
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Départ </label>
                   <input type="text" class="form-control" placeholder="Ville de départ" name="from" required>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Destination </label>
                   <input type="text" class="form-control" placeholder="Ville d'arrivée" name="to" required>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Date </label>
                   <input type="date" class="form-control" placeholder="Sélectionner une date" name="date" required>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Passagers </label>
                   <input type="number" class="form-control" placeholder="Passagers" name="passengers" required>
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
  </header>
