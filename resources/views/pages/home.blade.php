@extends('app')

@section('title')
{{'Homepage'}}
@endsection

@section('content')

	<section id="banner">
		<div class="banner-item" style="background-image:url(images/hero-area/bg1.jpg)">
			<div class="container">
				<div class="banner-content text-center">
					<div class="countdown classic-style">
					  	<div class="counter-day">
					    	<span class="days">00</span>
					    	<div class="smalltext">Days</div>
					  	</div>
					  	<div class="counter-hour">
					  		<span class="hours">00</span>
					    	<div class="smalltext">Hours</div>
					  	</div>
					  	<div class="counter-minute">
					    	<span class="minutes">00</span>
					    	<div class="smalltext">Minutes</div>
					  	</div>
					  	<div class="counter-second">
					    	<span class="seconds">00</span>
					    	<div class="smalltext">Seconds</div>
					  	</div>
					</div><!-- Countdown end -->

					<h1 class="banner-title">Largest tech conference</h1>
					<h2 class="banner-desc">NewYork, 21-23 October, 2018</h2>
					<p class="banner-btn">
						<a href="#" class="btn btn-primary">Register Now</a>
						<a href="#" class="btn btn-border">Learn More</a>
					</p>
				</div><!-- Banner content end -->
			</div><!-- Container end -->
		</div><!-- Banner item end -->
	</section><!-- Section banner end -->

	<section id="ts-intro" class="ts-intro">
		<div class="container">

			<div class="row text-center">
				<h2 class="section-title">About the Event</h2>
				<p class="section-sub-title">Design, Development, UX and Products</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="intro-video">
						<img class="img-responsive" src="images/intro-video.jpg" alt="" />
						<a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
	                  <div class="video-icon">
	                  	<i class="fa fa-play"></i>
	               	</div>
	            	</a>
					</div>
				</div><!-- Col end -->

				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="featured-tab">
						<ul class="nav nav-tabs">
						  	<li class="active">
						  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
						  			Hands-on Experiences
						  		</a>
						  	</li>
						  	<li>
							  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Networking</span>					
									</span>
							  	</a>
							</li>
						 	<li>
							  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Fun &amp; Foods</span>					
									</span>
							  	</a>
							</li>
						</ul>

						<div class="tab-content">
					      <div class="tab-pane active animated fadeInRight" id="tab_a">
				        		<h3 class="tab-content-title">Workshops - Project Sessions - Industry Leaders</h3>
				        		<p class="sppb-cta-text">	We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
								</p>
								<blockquote>Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.</blockquote>
								<p>Few stray gleams steal into the inner sanctuary grow familiar with the countless indescribable forms, then I feel the presence of the Almighty.</p>
					      </div><!-- Tab pane 1 end -->

				        <div class="tab-pane animated fadeInRight" id="tab_b">
				        		<h3 class="tab-content-title">Meet the Right People</h3>
				        		<p>A great opportunity to network with your peers from the web industry. Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.
				        		</p>
					        	<ul class="list-arrow">
									<li>Maecenas nibh dolor</li>
									<li>Aliquettiabser libero</li>
									<li>Consectetur ut vestibulum</li>
									<li>Skateboard dolor brunch</li>
								</ul>
				        </div><!-- Tab pane 2 end -->

				        	<div class="tab-pane animated fadeInRight" id="tab_c">
				        		<h3 class="tab-content-title">After Party, Fun and Food is Unlimited</h3>
				        		<p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus. Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.</p>
					        	<ul class="list-arrow">
									<li>Maecenas nibh dolor</li>
									<li>Aliquettiabser libero</li>
									<li>Consectetur ut vestibulum</li>
									<li>Skateboard dolor brunch</li>
								</ul>
				        	</div><!-- Tab pane 3 end -->	
						</div><!-- tab content -->
					</div><!-- Featured tab end -->
				</div><!-- Col end -->

			</div><!-- Content Row end -->
		</div><!-- Container end -->
	</section><!-- Intro area end -->

	<section id="facts" class="facts-area bg-overlay">
		<div class="container">
			<div class="row">
				<div class="facts-wrapper">
					<div class="col-sm-3 ts-facts">
						<span class="ts-facts-icon">
							<i class="fa fa-users"></i>
						</span>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">968</span></h2>
							<h3 class="ts-facts-title">Attendees</h3>
						</div>
					</div><!-- Col 1 end -->

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-icon">
							<i class="fa fa-microphone"></i>
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">117</span></h2>
							<h3 class="ts-facts-title">Speakers</h3>
						</div>
					</div><!-- Col 2 end -->

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-icon">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">121</span></h2>
							<h3 class="ts-facts-title">Sessions</h3>
						</div>
						
					</div><!-- Col 3 end -->

					<div class="col-sm-3 ts-facts">
						<div class="ts-facts-icon">
							<i class="fa fa-globe"></i>
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">119</span></h2>
							<h3 class="ts-facts-title">Countries</h3>
						</div>
						
					</div><!-- Col 4 end -->
				</div><!-- Facts end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->

	<section id="ts-schedule" class="ts-schedule">
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

						<div class="gap-60"></div>

						<div class="text-center"><a class="btn btn-primary" href="#">Download PDF</a></div>

					</div><!-- Schedule tab end -->
				</div><!-- Col end -->
			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!-- Schedule end -->

	<section id="ts-speakers" class="ts-speakers bg-overlay">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title title-white">Event Speakers</h2>
				<p class="section-sub-title">Listen, Learn, Get inspired.</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker1.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Albert Brown</a></h3>
							<p class="ts-speaker-designation">CEO, HughWoods</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 1 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker2.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Katherine Key</a></h3>
							<p class="ts-speaker-designation">COO, Irving's Inc.</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 2 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker3.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Ernest Backman</a></h3>
							<p class="ts-speaker-designation">Google Developer Expert</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 3 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker4.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Angelica Bradley</a></h3>
							<p class="ts-speaker-designation">Creative Director at Cards</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 4 end -->

			</div><!-- Content row 1 end -->

			<div class="gap-40"></div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker5.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Lydia Austin</a></h3>
							<p class="ts-speaker-designation">Head of Interactive</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 1 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker6.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Jay Henderson</a></h3>
							<p class="ts-speaker-designation">iOS Developer</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 2 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker7.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Lara Reynolds</a></h3>
							<p class="ts-speaker-designation">Android Developer</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 3 end -->

				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="ts-speaker transparent">
						<div class="ts-speaker-image">
							<img class="img-responsive" src="images/speakers/speaker8.jpg" alt="" />
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div><!--Image end -->
						<div class="ts-speaker-info">
							<h3 class="ts-speaker-name"><a href="#">Matthew Blakeley</a></h3>
							<p class="ts-speaker-designation">Director, Nathan Inc.</p>
						</div><!-- Info end -->
					</div><!-- Speaker end -->
				</div><!-- Speaker Col 4 end -->

			</div><!-- Content row 2 end -->
		</div><!--/ Container end -->
	</section><!-- Speakers end -->

	<section id="ts-sponsors" class="ts-sponsors">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Sponsors &amp; Partners</h2>
				<p class="section-sub-title">They helping us make this event possible.</p>
			</div><!--/ Title row end -->

			<div class="row sponsor-padding text-center">
				<h3 class="sponsor-title">Diamond Sponsors</h3>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor1.png" alt="" />
					</a>
				</div><!-- Col 1 end -->

				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor2.png" alt="" />
					</a>
				</div><!-- Col 2 end -->

				<div class="col-xs-12 col-sm-4 col-md-4">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor3.png" alt="" />
					</a>
				</div><!-- Col 3 end -->
			</div><!--/ Content row 1 end -->

			<div class="row text-center">
				<h3 class="sponsor-title">Platinum Sponsors</h3>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor4.png" alt="" />
					</a>
				</div><!-- Col 1 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor5.png" alt="" />
					</a>
				</div><!-- Col 2 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor6.png" alt="" />
					</a>
				</div><!-- Col 3 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor7.png" alt="" />
					</a>
				</div><!-- Col 4 end -->
			</div><!--/ Content row 2 end -->

			<div class="row text-center">
				<h3 class="sponsor-title">Exhibitor</h3>
				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor8.png" alt="" />
					</a>
				</div><!-- Col 1 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor9.png" alt="" />
					</a>
				</div><!-- Col 2 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor10.png" alt="" />
					</a>
				</div><!-- Col 3 end -->

				<div class="col-xs-12 col-sm-3 col-md-3">
					<a href="#" class="sponsor-logo">
						<img class="img-responsive" src="images/sponsors/sponsor11.png" alt="" />
					</a>
				</div><!-- Col 4 end -->
			</div><!--/ Content row 3 end -->

			<div class="row">
				<div class="general-btn text-center">
					<a class="btn btn-primary" href="#">Become our Sponsor</a>
				</div>
			</div><!--/ Content row 3 end -->

		</div><!--/ Container end -->
	</section><!-- Sponsors end -->


	<section id="ts-pricing" class="ts-pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				   <div class="ts-pricing-box">
				   	<div class="ts-pricing-header">
				   		<h2 class="ts-pricing-name">Early Bird</h2> 
				   		<h2 class="ts-pricing-price">
				   			<span class="currency">$</span><strong>149</strong><small>/1 Person</small>
				   		</h2>
				   	</div><!-- Pricing header end-->
				      <div class="ts-pricing-features">
				         <ul class="list-unstyled">
				            <li>1 Conference day</li>
				            <li>1 Workshop Day</li>
				            <li>Free Cofee/Lunch</li>
				            <li>Custom Badge</li>
				         </ul>
				      </div><!-- Features end -->
				      <div class="plan-action">
				         <a href="#" class="btn btn-primary">Buy Now</a>                        
				      </div>
				   </div><!-- Plan 1 end -->
				</div><!-- Col end -->

				<div class="col-md-4">
				   <div class="ts-pricing-box pricing-featured">
				   	<div class="ts-pricing-header">
				   		<h2 class="ts-pricing-name">Regular</h2> 
				   		<h2 class="ts-pricing-price">
				   			<span class="currency">$</span><strong>219</strong><small>/1 Person</small>
				   		</h2>
				   	</div><!-- Pricing header end-->
				      <div class="ts-pricing-features">
				         <ul class="list-unstyled">
				            <li>1 Conference day</li>
				            <li>2 Workshop Day</li>
				            <li>Free Cofee/Lunch</li>
				            <li>Premium Badge</li>
				         </ul>
				      </div><!-- Features end -->
				      <div class="plan-action">
				         <a href="#" class="btn btn-primary">Buy Now</a>                        
				      </div>
				   </div><!-- Plan 2 end -->
				</div><!-- Col end -->

				<div class="col-md-4">
				   <div class="ts-pricing-box">
				   	<div class="ts-pricing-header">
				   		<h2 class="ts-pricing-name">Last Chance</h2> 
				   		<h2 class="ts-pricing-price">
				   			<span class="currency">$</span><strong>379</strong><small>/1 person</small>
				   		</h2>
				   	</div><!-- Pricing header end-->
				      <div class="ts-pricing-features">
				         <ul class="list-unstyled">
				            <li>2 Conference day</li>
				            <li>2 Workshop Day</li>
				            <li>Free Cofee/Lunch</li>
				            <li>Premium Badge</li>
				         </ul>
				      </div><!-- Features end -->
				      <div class="plan-action">
				         <a href="#" class="btn btn-primary">Buy Now</a>                        
				      </div>
				   </div><!-- Plan 3 end -->
				</div><!-- Col end -->

			</div><!--/ Content row end -->
		</div><!-- Conatiner end -->
	</section><!-- Pricing end -->

	<section id="blog" class="blog">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Event Blog</h2>
				<p class="section-sub-title">Get upto date information</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<div class="latest-post-media">
							<a href="#" class="latest-post-img">
								<img class="img-responsive" src="images/blog/blog1.jpg" alt="img">
							</a>
							<div class="post-item-date">
								<span class="day">29</span>
								<span class="month">Nov</span>
							</div>
						</div>
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">See Eventech Creative Strategy to Tap Into New York City Marathon Buzz Station</a>
							</h4>
						</div>	
					</div><!-- Latest post end -->
				</div><!-- 1st post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<div class="latest-post-media">
							<a href="#" class="latest-post-img">
								<img class="img-responsive" src="images/blog/blog2.jpg" alt="img">
							</a>
							<div class="post-item-date">
								<span class="day">17</span>
								<span class="month">Aug</span>
							</div>
						</div>
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Met Gala Planner to Oversee Inauguration Events, Why Virtual Reality</a>
							</h4>
						</div>	
					</div><!-- Latest post end -->
				</div><!-- 2nd post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<div class="latest-post-media">
							<a href="#" class="latest-post-img">
								<img class="img-responsive" src="images/blog/blog3.jpg" alt="img">
							</a>
							<div class="post-item-date">
								<span class="day">18</span>
								<span class="month">Sep</span>
							</div>
						</div>
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Eventech Founded to Use Event Planning as an Experiential Teaching Tool</a>
							</h4>
						</div>	
					</div><!-- Latest post end -->
				</div><!-- 3rd post col end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Blog end -->

	<section id="ts-newsletter" class="ts-newsletter">
		<div class="container">
			<div class="row">
				<div class="newsletter-form clearfix">
					<h3>Join Our Newsletter</h3>
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
							<button class="btn btn-primary">Subscribe</button>
						</div>
					</form>
				</div>
			</div><!-- Row end -->
		</div><!--/ Container end -->
	</section><!--/ Newsletter end -->

	<section id="ts-venue" class="ts-venue">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-title">Venu Information</h2>
				<p class="section-sub-title">Where to find us</p>
			</div><!--/ Title row end -->

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

			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Venue end -->

    <div id="map" class="map"></div> <!-- Google Map -->
    
    @endsection
