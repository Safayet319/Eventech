@extends('app')

@section('title')
{{'blog'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner3.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Blog</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="post">
                    <div class="post-media post-image">
                        <img src="images/blog/blog1.jpg" class="img-responsive" alt="">
                         <div class="post-meta-date">
                            <span class="day">27</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <h2 class="entry-title">
                                 <a href="#">See Eventech Creative Strategy to Tap Into New York City Marathon Buzz Station</a>
                             </h2>
                             <div class="post-meta">
                                <span class="post-author">
                                    <i class="fa fa-user"></i><a href="#"> Admin</a>
                               </span>
                                <span class="post-cat">
                                    <i class="fa fa-folder-open"></i><a href="#"> News</a>
                               </span>
                                <span class="post-comment"><i class="fa fa-comment-o"></i> 02<a href="#" class="comments-link">Comments</a></span>
                            </div>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur  ...</p>
                        </div>

                        <div class="post-footer">
                            <a href="{{url('/blog-details')}}" class="btn btn-primary">Continue Reading</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 1st post end -->

                <div class="post">
                    <div class="post-media post-video">
                        <div class="embed-responsive">
                            <!-- Change the url -->
                            <iframe src="http://player.vimeo.com/video/153089270?title=0&amp;byline=0&amp;portrait=0&amp;color=8aba56" width="500" height="281" allowfullscreen></iframe>
                        </div>
                        <div class="post-meta-date">
                            <span class="day">17</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <h2 class="entry-title">
                                 <a href="#">Met Gala Planner to Oversee Inauguration Events, Why Virtual Reality an Immediate Consumer</a>
                             </h2>
                             <div class="post-meta">
                                <span class="post-author">
                                    <i class="fa fa-user"></i><a href="#"> Admin</a>
                               </span>
                                <span class="post-cat">
                                    <i class="fa fa-folder-open"></i><a href="#"> News</a>
                               </span>
                                <span class="post-comment"><i class="fa fa-comment-o"></i> 03<a href="#" class="comments-link">Comments</a></span>
                            </div>
                            
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur  ...</p>
                        </div>

                        <div class="post-footer">
                            <a href="{{url('/blog-details')}}" class="btn btn-primary">Continue Reading</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 2nd post end -->

                <div class="post">
                    <div class="post-media post-image">
                        <img src="images/blog/blog3.jpg" class="img-responsive" alt="">
                        <div class="post-meta-date">
                            <span class="day">19</span>
                            <span class="month">Mar</span>
                        </div>
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <h2 class="entry-title">
                                 <a href="#">Eventech Founded to Use Event Planning as an Experiential Teaching Tool for Inner City Youth</a>
                             </h2>
                             <div class="post-meta">
                                <span class="post-author">
                                    <i class="fa fa-user"></i><a href="#"> Admin</a>
                               </span>
                                <span class="post-cat">
                                    <i class="fa fa-folder-open"></i><a href="#"> News</a>
                               </span>
                                <span class="post-comment"><i class="fa fa-comment-o"></i> 01<a href="#" class="comments-link">Comments</a></span>
                            </div>
                            
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur  ...</p>
                        </div>

                        <div class="post-footer">
                            <a href="{{url('/blog-details')}}" class="btn btn-primary">Continue Reading</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 3rd post end -->

                <div class="paging">
                <ul class="pagination">
                  <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>

            </div><!-- Content Col end -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="sidebar sidebar-right">

                    <div class="widget recent-posts">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="unstyled clearfix">
                       <li>
                        <div class="posts-thumb pull-left"> 
                                <a href="#"><img alt="img" src="images/blog/blog4.jpg"></a>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <a href="#">New Partnership Aims to Turn eSports Into Larger Public Events</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                      </li><!-- 1st post end-->

                      <li>
                        <div class="posts-thumb pull-left"> 
                                <a href="#"><img alt="img" src="images/blog/blog3.jpg"></a>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <a href="#">Eventech Founded to Use Event Planning as an Experiential Teaching Tool for Inner City Youth</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                      </li><!-- 2nd post end-->

                      <li>
                        <div class="posts-thumb pull-left"> 
                                <a href="#"><img alt="img" src="images/blog/blog2.jpg"></a>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <a href="#">See Eventech Creative Strategy to Tap Into New York City Marathon Buzz Station</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                      </li><!-- 3rd post end-->

                      <li>
                        <div class="posts-thumb pull-left"> 
                                <a href="#"><img alt="img" src="images/blog/blog1.jpg"></a>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <a href="#">Met Gala Planner to Oversee Inauguration Events, Why Virtual Reality Immediate Consumer</a>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                      </li><!-- 3rd post end-->
                   </ul>
                        
                    </div><!-- Recent post end -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="arrow nav nav-tabs nav-stacked">
                      <li><a href="#">Culture</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Social</a></li>
                      <li><a href="#">Entertainment</a></li>
                      <li><a href="#">Conference</a></li>
                      </ul>
                    </div><!-- Categories end -->

                    <div class="widget">
                        <h3 class="widget-title">Archives </h3>
                        <ul class="arrow nav nav-tabs nav-stacked">
                          <li><a href="#">Feburay 2016</a></li>
                      <li><a href="#">January 2016</a></li>
                      <li><a href="#">December 2015</a></li>
                      <li><a href="#">November 2015</a></li>
                      <li><a href="#">October 2015</a></li>
                    </ul>
                    </div><!-- Archives end -->

                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags </h3>

                        <ul class="unstyled clearfix">
                          <li><a href="#">Culture</a></li>
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Music</a></li>
                      <li><a href="#">Entertainment</a></li>
                      <li><a href="#">Social</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">News</a></li>
                      <li><a href="#">Event</a></li>
                    </ul>
                    </div><!-- Tags end -->
                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

@endsection