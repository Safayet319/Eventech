@extends('app')

@section('title')
{{'schedule'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner2.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Schedule Tab</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <h2 class="section-title">Event Schedule</h2>
            <p class="section-sub-title">Don't Miss a Topic on the Event</p>
        </div><!--/ Title row end -->


        <div class="row">
            <div class="col-md-12">
                <div class="schedule-tab">
                    <ul class="nav nav-tabs" id="nav-tabs">
                          <li class="active">
                              <a class="animated fadeIn" href="#tab_one" data-toggle="tab">
                                  <span class="tab-head">
                                    <span class="tab-text-title">Day One</span>					
                                </span>
                              </a>
                          </li>
                          <li>
                              <a class="animated fadeIn" href="#tab_two" data-toggle="tab">
                                  <span class="tab-head">
                                    <span class="tab-text-title">Day Two</span>					
                                </span>
                              </a>
                        </li>
                         <li>
                              <a class="animated fadeIn" href="#tab_three" data-toggle="tab">
                                  <span class="tab-head">
                                    <span class="tab-text-title">Day Three</span>					
                                </span>
                              </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active animated fadeInRight" id="tab_one">
                            <h2 class="schedule-date">Sunday, 21th October</h2>

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">9:30 - 10:00</span>
                                <div class="schedule-slot-info">
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-title">Registration</h3>
                                        <p class="schedule-slot-desc">Pick up your name badge and goodie bag</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 1 end -->

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">10:30 - 11:15AM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker6.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Jay Henderson</h3>
                                        <h4 class="schedule-slot-title">Reinventing Experiences to All</h4>
                                        <p class="schedule-slot-desc">Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 2 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">11:15 - 13:15PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker5.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Lydia Austin</h3>
                                        <h4 class="schedule-slot-title">Human Centered Design </h4>
                                        <p class="schedule-slot-desc">Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 3 end -->

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">13:30 - 14:30PM</span>
                                <div class="schedule-slot-info">
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-title">Lunch</h3>
                                        <p class="schedule-slot-desc">Five star buffet for everybody.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 4 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">14:35 - 16:00PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Ernest Backman</h3>
                                        <h4 class="schedule-slot-title">A frontier for designers: cultures of creativity</h4>
                                        <p class="schedule-slot-desc">Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 5 end -->

                      </div><!-- Tab pane 1 end -->

                    <div class="tab-pane animated fadeInRight" id="tab_two">
                          <h2 class="schedule-date">Monday, 22nd October</h2>

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">09:30 - 11:15AM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker1.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Albert Brown</h3>
                                        <h4 class="schedule-slot-title">Getting Started With User-Centered Content</h4>
                                        <p class="schedule-slot-desc">Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 1 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">11:15 - 13:15PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker7.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Lara Reynolds</h3>
                                        <h4 class="schedule-slot-title">Content Measurement and Analytics</h4>
                                        <p class="schedule-slot-desc">Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 2 end -->

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">13:30 - 14:30PM</span>
                                <div class="schedule-slot-info">
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-title">Lunch</h3>
                                        <p class="schedule-slot-desc">Five star buffet for everybody.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 3 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">14:35 - 16:00PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker8.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Matthew Blakeley</h3>
                                        <h4 class="schedule-slot-title">Not Perfect, Always Better: A Story of Inclusion</h4>
                                        <p class="schedule-slot-desc">Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 4 end -->
                    </div><!-- Tab pane 2 end -->

                        <div class="tab-pane animated fadeInLeft" id="tab_three">
                        <h2 class="schedule-date">Tuesday, 23rd October</h2>

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">09:30 - 11:15AM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker2.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Katherine Key</h3>
                                        <h4 class="schedule-slot-title">How Silos Learn: Working in the Idea Factory</h4>
                                        <p class="schedule-slot-desc">Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 1 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">11:15 - 13:15PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker3.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Ernest Backman</h3>
                                        <h4 class="schedule-slot-title">Empathy Behind the Algorithms</h4>
                                        <p class="schedule-slot-desc">Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 2 end -->

                            <div class="schedule-listing">
                                <span class="schedule-slot-time">13:30 - 14:30PM</span>
                                <div class="schedule-slot-info">
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-title">Lunch</h3>
                                        <p class="schedule-slot-desc">Five star buffet for everybody.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 3 end -->

                            <div class="schedule-listing bg">
                                <span class="schedule-slot-time">14:35 - 16:00PM</span>
                                <div class="schedule-slot-info">
                                    <a href="#">
                                        <img class="schedule-slot-speakers" src="images/speakers/speaker4.jpg" alt="" />
                                    </a>
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-speaker-name">Angelica Bradley</h3>
                                        <h4 class="schedule-slot-title">Adaptive Content, Context, and Controversy</h4>
                                        <p class="schedule-slot-desc">Plaid fashion axe semiotics skateboard, try-hard food truck aesthetic biodiesel exercitation. Accusamus VHS Wes Anderson Banksy food truck vero.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 4 end -->

                            <div class="schedule-listing listing-last">
                                <span class="schedule-slot-time">16:30 - Late</span>
                                <div class="schedule-slot-info">
                                    <div class="schedule-slot-info-content">
                                        <h3 class="schedule-slot-title">After Party</h3>
                                        <p class="schedule-slot-desc">Stick around and enjoy a dazzling after work.</p>
                                    </div><!--Info content end -->
                                </div><!-- Slot info end -->
                            </div><!-- Slot listing 5 end -->

                        </div><!-- Tab pane 3 end -->	
                    </div><!-- tab content -->

                </div><!-- Schedule tab end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Main container end -->
@endsection