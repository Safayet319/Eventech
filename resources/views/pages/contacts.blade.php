@extends('app')

@section('title')
{{'contacts'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Contact</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Banner end -->

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                            <div class="contact-info-box">
                                <i class="fa fa-map-marker">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Office Address: </h4>
                                    <p>Eventime HQ, 1638 North Street Charlottesville, NY 22903</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-envelope-o">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Email Address: </h4>
                                    <p>example@example.com</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-phone">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Phone Number: </h4>
                                    <p>+1(0231) 3421 453</p>
                                </div>
                            </div>

                        </div><!-- Widget end -->
                    </div><!-- Sidebar left end -->
                </div><!-- Sidebar col end -->

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h3 class="title-classic left">Send Message</h3>
                                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                <form  action="{{url('/message')}}" method="post" role="form">
                    @csrf
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                            <input class="form-control form-control-name @error('name') is-invalid @enderror" name="name" value="{{old('name')}}"  placeholder="" type="text" >
                            @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email   @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" 
                                placeholder="" type="email" >
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control form-control-subject  @error('subject') is-invalid @enderror" name="subject" value="{{old('subject')}}" 
                                placeholder="" >
                                @error('subject')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control form-control-message @error('message') is-invalid @enderror" name="message" value="{{old('subject')}}" placeholder="" rows="10" ></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Send Message</button> 
                    </div>
                </form>
            </div><!-- Col end -->
        
        </div><!-- Content row -->

        <div class="gap-60"></div>

        <div id="map" class="map"></div>

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection