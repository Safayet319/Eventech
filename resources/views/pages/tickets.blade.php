@extends('app')

@section('title')
{{'tickets'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner2.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Tickets</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
               <div class="ts-pricing-box bg">
                   <div class="ts-pricing-header">
                       <h2 class="ts-pricing-name">Early Bird</h2> 
                       <h2 class="ts-pricing-price">
                           <span class="currency">$</span><strong>149</strong><small>/1 Person</small>
                       </h2>
                   </div><!-- Pricing header -->
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
               <div class="ts-pricing-box bg pricing-featured">
                   <div class="ts-pricing-header">
                       <h2 class="ts-pricing-name">Regular</h2> 
                       <h2 class="ts-pricing-price">
                           <span class="currency">$</span><strong>219</strong><small>/1 Person</small>
                       </h2>
                   </div><!-- Pricing header -->
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
               <div class="ts-pricing-box bg">
                   <div class="ts-pricing-header">
                       <h2 class="ts-pricing-name">Last Chance</h2> 
                       <h2 class="ts-pricing-price">
                           <span class="currency">$</span><strong>379</strong><small>/1 person</small>
                       </h2>
                   </div><!-- Pricing header -->
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
</section><!-- Main container end -->

@endsection