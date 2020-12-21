@extends('app')

@section('title')
{{'Gallery'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner2.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Gallery</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row text-center">
            <h2 class="section-title">Events Gallery</h2>
            <p class="section-sub-title">Be a part of this great event</p>
        </div><!--/ Title row end -->

        <div class="row">
            <div id="gallery">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery1.jpg">
                            <img class="img-responsive" src="images/gallery/gallery1.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 1 end -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery2.jpg">
                            <img class="img-responsive" src="images/gallery/gallery2.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 2 end -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery3.jpg">
                            <img class="img-responsive" src="images/gallery/gallery3.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 3 end -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery4.jpg">
                            <img class="img-responsive" src="images/gallery/gallery4.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 4 end -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery5.jpg">
                            <img class="img-responsive" src="images/gallery/gallery5.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 5 end -->

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-container">
                        <a class="gallery-popup" href="images/gallery/gallery6.jpg">
                            <img class="img-responsive" src="images/gallery/gallery6.jpg" alt="">
                            <span class="gallery-icon"><i class="fa fa-search"></i></span>
                        </a>
                    </div>
                </div><!-- Gallery item 6 end -->

            </div><!-- Gallery end -->

        </div><!-- Content row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection