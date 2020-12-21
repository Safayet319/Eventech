@extends('app')

@section('title')
{{'single-blog'}}
@endsection

@section('content')
<div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner3.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Blog Single</h2>
     </div>
  </div><!-- Subpage title end -->
</div><!-- Page Banner end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                <div class="post-content">
                    <div class="post-media post-image">
                        <img src="images/blog/blog1.jpg" class="img-responsive" alt="">
                         <div class="post-meta-date">
                            <span class="day">27</span>
                            <span class="month">Nov</span>
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
                                <span class="post-comment"><i class="fa fa-comment-o"></i> 03<a href="#" class="comments-link">Comments</a></span>
                            </div>
                            
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                            <p>Kucididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>

                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. </p>

                            <blockquote>
                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.<cite>- Anger Mathe</cite></p>

                            </blockquote>

                            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quira tione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ue magnam aliquam quaerat voluptatem.</p>
                        </div>

                        <div class="tags-area clearfix">
                            <div class="post-tags pull-left">
                               <a href="#">Conference</a>
                               <a href="#">Event</a>
                               <a href="#">Social</a>
                           </div>
                           <div class="share-items pull-right">
                               <ul class="post-social-icons unstyled">
                                   <li class="social-icons-head">Share:</li>
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               </ul>
                           </div>
                        </div>
                        
                    </div><!-- post-body end -->
                </div><!-- post content end -->

                <div class="author-box">
                    <div class="author-img pull-left">
                        <img src="images/blog/avator1.jpg" alt="">
                    </div>
                    <div class="author-info">
                        <h3>Albert Brown</h3>
                        <p>Lisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad vene minim veniam, quis nostrud exercitation nisi ex ea commodo.</p>
                        <p class="author-url">Website: <span><a href="#">http://www.example.com</a></span></p>

                    </div>
                </div> <!-- Author box end -->

                <!-- Post comment start -->
                <div id="comments" class="comments-area">
                    <h3 class="comments-heading">07 Comments</h3>

                    <ul class="comments-list">
                        <li>
                            <div class="comment">
                                <img class="comment-avatar pull-left" alt="" src="images/blog/avator2.jpg">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">Katherine Key</span>
                                        <span class="comment-date pull-right">Jan 17, 2017 at 1:38 pm</span>
                                    </div>
                                    <div class="comment-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
                                    <div class="text-left">
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>	
                                </div>
                            </div><!-- Comments end -->

                            <ul class="comments-reply">
                                <li>
                                    <div class="comment">
                                        <img class="comment-avatar pull-left" alt="" src="images/blog/avator3.jpg">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">Ernest Backman</span>
                                                <span class="comment-date pull-right">Feb 19, 2017 at 1:38 pm</span>
                                            </div>
                                            <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
                                            <div class="text-left">
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>	
                                        </div>
                                    </div><!-- Comments end -->
                                </li>
                            </ul><!-- comments-reply end -->
                                <div class="comment last">
                                    <img class="comment-avatar pull-left" alt="" src="images/blog/avator4.jpg">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment-author">Lydia Austin</span>
                                            <span class="comment-date pull-right">Mar 17, 2017 at 1:38 pm</span>
                                        </div>
                                        <div class="comment-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p></div>
                                        <div class="text-left">
                                            <a class="comment-reply" href="#">Reply</a>
                                        </div>	
                                    </div>
                                </div><!-- Comments end -->
                        </li><!-- Comments-list li end -->
                    </ul><!-- Comments-list ul end -->
                </div><!-- Post comment end -->

                <div class="comments-form border-box">
                    <h3 class="title-normal">Add a comment</h3>

                    <form role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>
                                </div>
                            </div><!-- Col 12 end -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                                </div>
                            </div><!-- Col 4 end -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Your Website" type="text" required>
                                </div>
                            </div>

                        </div><!-- Form row end -->
                        <div class="clearfix">
                            <button class="btn btn-primary" type="submit">Post Comment</button> 
                        </div>
                    </form><!-- Form end -->
                </div><!-- Comments form end -->

        

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

    </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection