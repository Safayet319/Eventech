@extends('app')

@section('title')
{{'venue'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner2.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Venue</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <h2 class="section-title">Venu Information</h2>
            <p class="section-sub-title">Where to find us</p>
        </div><!--/ Title row end -->


        <div class="row">
            <div class="col-md-6">
                <h3 class="title-classic left">Venue Details</h3>
                <p>This year Eventor is happening at the brand new NYC Seminar and Conference Center, New York, USA
                . One of the USA's iconic and beautiful location. You will join over 700 attendies in one of the best Conference venue in USA.</p>
                <div class="widget contact-info">
                    <div class="contact-info-box">
                        <i class="fa fa-map-marker">&nbsp;</i>
                        <div class="contact-info-box-content">
                            <h4>Address:</h4>
                            <p>NYC Seminar and Conference Center, New York</p>
                        </div>
                    </div>

                    <div class="contact-info-box">
                        <i class="fa fa-envelope-o">&nbsp;</i>
                        <div class="contact-info-box-content">
                            <h4>Email Address:</h4>
                            <p>query@eventech.com.us</p>
                        </div>
                    </div>

                    <div class="contact-info-box">
                        <i class="fa fa-phone">&nbsp;</i>
                        <div class="contact-info-box-content">
                            <h4>Phone Number:</h4>
                            <p>+1(0231) 3421 453</p>
                        </div>
                    </div>

                </div><!-- Widget end -->
            </div><!-- Col end -->

            <div class="col-md-6">
                <img src="images/venue-img.jpg" alt="">
            </div><!-- Col end -->
        </div><!-- Content row 1 end -->

        <div class="gap-60"></div>


        <div id="map" class="map"></div> <!-- Map area -->

            
        <div class="gap-60"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="venu-info-content box1">
                    <span class="venu-info-icon"><i class="fa fa-map-marker"></i></span>
                    <h3 class="venu-info-title">Location</h3>
                    <p class="venu-info-text">PLEASE NOTE: The conference takes place at the <u>NYC Seminar and Conference Center,</u> not the College Site. See the map for exact information.</p>
                    <a href="#" class="venu-info-link">Read More <i class="fa fa-angle-right"></i></a>
                </div><!-- Venu content end -->
            </div><!-- Col 1 end -->

            <div class="col-md-4">
                <div class="venu-info-content box2">
                    <span class="venu-info-icon"><i class="fa fa-bus"></i></span>
                    <h3 class="venu-info-title">Transport</h3>
                    <p class="venu-info-text">To get to the venu place, you can take one of the city bus lines, tube or railway service. All the services are comfortable to reach into the place.</p>
                    <a href="#" class="venu-info-link">Read More <i class="fa fa-angle-right"></i></a>
                </div><!-- Venu content end -->
            </div><!-- Col 2 end -->

            <div class="col-md-4">
                <div class="venu-info-content box3">
                    <span class="venu-info-icon"><i class="fa fa-building"></i></span>
                    <h3 class="venu-info-title">Hotels</h3>
                    <p class="venu-info-text">Suitable Hotels and Restaurents are surrounded all the area. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    <a href="#" class="venu-info-link">Read More <i class="fa fa-angle-right"></i></a>
                </div><!-- Venu content end -->
            </div><!-- Col 3 end -->

        </div><!-- Content row 2 end -->



    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection