@extends('layouts.master')
@section('title', __('Warfira') )
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/autocomplete.css') }}">

  <section id="r-advantages-part" class="r-advantages-part">
    
    <div class="r-advantage-main-part">
      <div class="container clearfix">
       

        <div class="advantage-head">
          <span>Découvrez avec nous, une autre façon de voyager</span>
          <h2>Warfira<b></b></h2>
        </div>
        <div class="row clearfix">
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
             <div class="r-advantages-box">
               <div class="icon"> <img src="assets/images/advantage-icon-1.png" alt=""> </div>
               <div class="head animated pulse">Assistance client en ligne 24h/24 et 7j/7</div>
               <div class="sub-text">Appelez-nous n'importe où n'importe quand</div>
             </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
             <div class="r-advantages-box">
               <div class="icon"> <img src="assets/images/advantage-icon-2.png" alt=""> </div>
               <div class="head animated pulse">Réservation à tout moment</div>
               <div class="sub-text">Reserver vos vols grace a Warfira à tout moments</div>
             </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
             <div class="r-advantages-box">
               <div class="icon"> <img src="assets/images/advantage-icon-3.png" alt=""> </div>
               <div class="head animated pulse">Locations saisonieres</div>
               <div class="sub-text">250+ Locations</div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </section>

  <section id="r-about-info">
    <div class="r-about-info">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="r-about-info-img">
              <img src="{{ asset('assets/images/airport-3451416__340.jpg') }}" class="img-fluid d-block m-auto" alt="">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="r-about-info-content">
              <div class="r-sec-head r-sec-head-left r-sec-head-line r-sec-head-w pt-0">
                <span>EN SAVOIR PLUS SUR NOUS</span>
                <h2>Qui sommes nous<b></b> ?</h2>
              </div>
              <p>
                C’est bien un système sociotechnique de distribution, adaptatif, doté de propriétés d’au-
to-organisation, d’évolutivité et de durabilité.

Il s’agit des outils, ceux-ci doivent communiquer, être synchronisés pour une consolida-
tion optimale des données et de résultats.

Warfira propose un écosystème, une communauté d’établissements hôteliers ou, se dé-
veloppent des échanges en réseau, nous parlons clairement de notre marketing digital.
              </p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="r-best-vehicles">
      <div class="r-sec-head r-accent-color r-sec-head-v">
        <span>Aller simple à Aller-retour</span>
        <h2>“Voler de plus en plus haut, visiter l'Afrique et vous dire combien elle est belle.”</h2>
      </div>
      <div class="container">
        <div class="row clearfix r-best-offer-list">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset('assets/images/top-dest-fight-5.jpg') }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Bangalore</b>-Chennai</a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset('assets/images/top-dest-fight-5.jpg') }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Abidjan</b>-Paris</a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset('assets/images/top-dest-fight-5.jpg') }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Brazzaville</b>-Paris</a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <div class="r-car-search r-search-map-over">
      <div class="container">
        <div class="r-search-map-over-in">
          <div class="r-top-form-title">
            <h3>Rechercher un vol</h3>
          </div>
          <form>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Départ </label>
                  <select class="form-control">
                    <option>Any Brands</option>
                    <option>Any Brands</option>
                    <option>Any Brands</option>
                    <option>Any Brands</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Destination </label>
                  <select class="form-control">
                    <option>Any Type</option>
                    <option>Any Type</option>
                    <option>Any Type</option>
                    <option>Any Type</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Date </label>
                  <select class="form-control">
                    <option>Price Low to High</option>
                    <option>Price High to Low</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="submit" class="form-control btn-primary" value="Rechercher Maintenant">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

  <section>
    <div class="r-best-vehicles">
      <div class="r-sec-head r-accent-color r-sec-head-v">
        <span>Les meilleures destinations hôtelières</span>
        <h2>“Je choisis Warfir@, pour aller dans les bras de Morphée.”</h2>
      </div>
      <div class="container">
        <div class="row clearfix r-best-offer-list">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset('assets/images/top-dest-hotel-45206.jpg') }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Douala</b></a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset("assets/images/top-dest-hotel-45206.jpg") }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Bengaluru</b></a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <div class="r-best-offer-single">
              <div class="r-best-offer-in">
                <div class="r-offer-img">
                  <a class="d-inline-block" href="#"><img src="{{ asset("assets/images/top-dest-hotel-45206.jpg") }}" class="img-fluid d-block m-auto" alt=""></a>
                  <div class="r-offer-img-over">
                    <i class="fa fa-search"></i>
                  </div>
                </div>
                <div class="r-best-offer-content">
                  <a href="#"><b>Abidjan</b></a>
                  <p>Start at <b>45.00 USD</b> per day</p>
                  <ul class="pl-0 mb-0">
                    <li><i class="fa fa-car"></i><span>2017</span></li>
                    <li><i class="fa fa-cogs"></i><span>MANUAL</span></li>
                    <li><i class="fa fa-beer"></i><span>PETROL</span></li>
                    <li><i class="fa fa-road"></i><span>2.3k CC</span></li>
                  </ul>
                </div>
                <div class="r-offer-rewst-this">
                  <span class="text-uppercase">Reserver</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="{{ asset('assets/js/typeahead.js') }}"></script>
	<script>
		var airports = @json($airports);
				
		autocomplete(document.getElementById("from"), airports);
    autocomplete(document.getElementById("to"), airports);
					
				   
	</script>



@endsection
