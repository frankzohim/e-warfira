@extends('layouts.master')
@section('title', __('Reservez un vol') )
@section('content')
<style>
  .color-logo{
    color: #26348B;
}
</style>
<div style="background-image:url('{{ asset("frontend/images/bread-bg7.jpg") }}'); background-size: cover; height: 200px;">
    <div class="r-header-in-over">
          
    </div>
    <br/><br/><br/><br/><br/>
     <div class="container">
    <div class="row clearfix">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
          
          </div>
          <div style="color:#ffcd00;" class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <h4>{{ __('Reserver un vol') }} </h4>
          </div>
          <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12">
          
        </div>
    </div>
  </div>

</div>
</header>
<section class="r-car-info-wrapper">
    <div class="container">
      <div class="r-car-info-header clearfix">
        <div class="r-car-top-info">
          
          <h2 class="r-car-name"> {{ $locations['from'] }} to <span>{{ $locations['to']}}</span> </h2>
        </div>

        <div class="r-car-offer">
          <div class="r-offer-cost">
            <span class="fa fa-euro r-currency"></span> {{ $data->flightOffers[0]->price->total }} <small></small>
          </div>
          <span class="r-tax-info"> INCLUDED TAXES & CHECKUP </span>
        </div>
      </div> <!-- /r-car-info-header -->

      <div class="r-car-whole-info">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
             <div class="r-car-info-content">
              <h2 class="r-product-name"> Booking Detail </h2>
              <div class="table-responsive">
                <table class="table table-bordered">
                  @php
                    $segments = $data->flightOffers[0]->itineraries[0]->segments;
                  @endphp
                  @foreach ($segments as $segment )
                   
                  
                    <tr>
                      <td>
                        <div class="d-flex align-items-center p-2 bd-highlight">
                          <div>
                              <img src="{{ asset('assets/images/airlines-logo/KQ.gif') }}" alt="">
                          </div>
                          <div style="margin-left: 10px;">
                              Kenya airways  <br>KQ 571
                          </div>
                          
                      </div>
                      </td>
                      <td>
                        @php
                          $dateTime = explode('T',$segment->departure->at);
                        @endphp
                        {{ $dateTime[0] }}, {{ Str::substr($dateTime[1], 0, 5)  }} <br>
                        {{ $segment->departure->iataCode }} 
                        
                      </td>
                      <td>
                        @php
                          $dateTime = explode('T',$segment->arrival->at);
                        @endphp
                        {{ $dateTime[0] }}, {{ Str::substr($dateTime[1], 0, 5)  }} <br>
                        {{ $segment->arrival->iataCode }} </td>
                      <td>
                          {{ strtolower(substr_replace(Str::substr($segment->duration, 2,) , ' ', 2, 0)) }} 
                          <br>
                            Stop : {{ $segment->numberOfStops }}
                          
                       </td>
                    </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <div class="r-car-info-content">
              <h2 class="r-product-name"> Fare <span>Summary</span> </h2>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <td> <b>Base Fare</b>   <br>
                      {{ $locations['passengers'] }} ADT(s) ‎({{ $locations['passengers'] }} X {{ $data->flightOffers[0]->price->base }})</td>
                    <td> <br><span class="fa fa-euro r-currency"></span>  
                      {{ $locations['passengers']*$data->flightOffers[0]->price->base  }} 
                    </td>
                  </tr>
                  <tr>
                    <td> <b>Taxes</b> <br>
                        Taxes <br>
                        Convenience Fees
                    </td>
                    <td> <br> <span class="fa fa-euro r-currency"></span> <b>{{ $data->flightOffers[0]->price->base }}</b>  <br>
                      <span class="fa fa-euro r-currency"></span> <b>{{ $data->flightOffers[0]->price->total * 0.1 }}</b> 
                    </td>
                  </tr>
                  <tr>
                    <td><strong>Grand TOTAL</strong> </td>
                    <td> 
                      <span class="color-logo" style="font-size: 15px; font-weight:bold">
                        <span class="fa fa-euro r-currency"></span>
                        {{ $data->flightOffers[0]->price->total * 1.10  }}
                      </span> 
                      </td>
                  </tr>
                  
                </table>
              </div>
            </div>
            <!-- /r-car-info-content -->
          </div>
        </div>
      </div> <!-- /r-car-whole-info -->

      <div class="row">
       

        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="r-site-default-accordion">
            <div class="r-accordion-header">
              <h2 class="r-accordion-heading">Customer Information</h2>
              <i class="fa fa-angle-up"></i>
            </div>
            <div class="r-accordion-body">
              <form action="/api/order" method="POST">
                @csrf
                <input type="hidden" value="{{ json_encode($data) }}" name="data">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="r-site-checkbox">
                        <label>
                          Mr.
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                        </label>
                        <label>
                          Mrs.
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" placeholder="Your full name">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" placeholder="Example@gmail.com">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Nationality</label>
                      <select class="form-control">
                        <option value="">United State</option>
                        <option value="">India</option>
                        <option value="">Russia</option>
                        <option value="">China</option>
                        <option value="">Australia</option>
                      </select>
                    </div>
                  </div>

                </div>

            
            </div>
          </div>
		  
		  <!-- 
			Starting travelers informations
		  -->
      @php
        $passengers = $locations['passengers'];
      @endphp
      
		  @for ($i=1; $i<= $passengers; $i++)
		  <div class="r-site-default-accordion">
            <div class="r-accordion-header">
              <h2 class="r-accordion-heading">Adult {{ $i }}</h2>
              <i class="fa fa-angle-up"></i>
            </div>
            <div class="r-accordion-body">
             
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="r-site-checkbox">
                        <label>
                          Mr.
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                        </label>
                        <label>
                          Mrs.
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Date of birth</label>
                      <input type="text" class="form-control" placeholder="DOB">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Passport Number</label>
                      <input type="text" class="form-control" placeholder="Passport number">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Issuing Country</label>
                      <select class="form-control">
                        <option value="">United State</option>
                        <option value="">India</option>
                        <option value="">Russia</option>
                        <option value="">China</option>
                        <option value="">Australia</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                      <label>Date of expiration</label>
                      <input type="date" class="form-control" placeholder="Date of expiration">
                    </div>
                  </div>
                  

                </div>
            </div>
          </div>
		@endfor
		  

          <div class="r-site-default-accordion">
            <div class="r-accordion-header">
              <h2 class="r-accordion-heading">Payment Options</h2>
              <i class="fa fa-angle-up"></i>
            </div>
            <div class="r-accordion-body">
                <div class="r-payment-options">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="r-site-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                          <span class="r-site-checkbox-text">Direct bank Transfer</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="r-site-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                          <span class="r-site-checkbox-text">Credit Card</span>
                        </label>
                        <img src="{{ asset('assets/images/payment-icons.jpg') }}" alt="" class="">
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="r-site-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                          <span class="r-site-checkbox-text">Cheque Payment</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="r-site-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                          <span class="r-site-checkbox-text">Paypal</span>
                        </label>
                        <img src="{{ asset('assets/images/paypal-icon.jpg') }}" alt="" class="">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="r-booking-form-submission">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="r-site-checkbox">
                  <label>
                    <input type="checkbox">
                    <span class="r-site-checkbox-icon"> <i class="fa fa-check-square"></i> </span>
                    <span class="r-site-checkbox-text">I accept all informations & payment eyc</span>
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 r-submission-btn-wrapper">
                <input type="reset" class="btn-default" value="Cancel This">
                <input type="submit" class="btn-primary" value="Reserve Now">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  </section> <!-- /r-car-info -->

@endsection