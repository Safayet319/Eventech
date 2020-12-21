<header id="header" class="header header-transparent">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <div class="logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="">
                </a>
             </div><!-- logo end -->
            </div><!-- Navbar header end -->

            <div class="site-nav-inner">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">

                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                          <a href="{{'/'}}" class="dropdown-toggle" >Home </a>
                          
                        </li><!-- Home li end -->

                   <li class="dropdown">
                      <a href="{{'/speakers'}}" class="dropdown-toggle" >Speakers</a>
                     
                   </li><!-- Speakers li end -->

                   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                       <li><a href="schedule-list.html">Schedule List</a></li>
                       <li><a href="schedule-tab.html">Schedule Tab</a></li>
                      </ul>
                   </li><!-- Schedule li end -->

                   <li class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                       <li><a href="{{'/about'}}">About Eventime</a></li>
                       <li><a href="{{'/tickets'}}">Tickets</a></li>
                       <li><a href="{{'/venue'}}">Venue</a></li>
                       <li><a href="{{'/sponsor'}}">Sponsors &amp; Partners</a></li>
                       <li><a href="{{'/faq'}}">Faq</a></li>
                       <li><a href="{{'/gallery'}}">Gallery</a></li>
                     
                      </ul>
                   </li><!-- About li end -->

                   <li class="dropdown">
                      <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                       
                       <li><a href="{{'/blog'}}">Blog Right Sidebar</a></li>
                       <li><a href="{{'/blog-details'}}">Blog Single</a></li>
                      </ul>
                   </li><!-- Blog li end -->

                        <li><a href="{{'/contact'}}">Contact</a></li>

                   <li class="header-ticket">
                       <a class="ticket-btn btn-primary" href="{{'/tickets'}}"><i class="fa fa-ticket"></i> Tickets</a>
                   </li>

                </ul><!--/ Nav ul end -->

                </nav><!--/ Collapse end -->

            </div><!--/ Site nav inner end -->
        </div><!--/ Row end -->
    </div><!--/ Container end -->
</header>