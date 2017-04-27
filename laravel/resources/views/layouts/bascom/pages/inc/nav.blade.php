            <!-- Home Section -->
        <section class="home-section bg-dark-alfa-30 parallax-2" data-background="<?php echo $entity->getWebPublicDirectory('')?>/slide1.jpg" id="home">
                <!-- Nav -->
            <div id="banner-special">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="text">
                                <b>MOVIE IN SPECIAL</b> SAVE 20% OFF FIRST MONTHS RENT<br>
                                <button type="submit" class="btn btn-mod btn-border-w btn-round">
                                  FIND OUT MORE
                                </button>
                            </div>
                            <a href="#" class="fa fa-times-circle" id="banner-special-close"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="top-nav">
                <div class="full-wrapper relative clearfix">
                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="top-nav-left">
                                <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> <b>Call Today</b> : <?php echo $entity->getPhone();?></li>
                                <li class="hidden-sm hidden-xs"><i class="fa fa-map-marker"></i> <b>Location</b> : <?php echo $entity->getFullAddress(); ?></li>
                                <li class="hidden-md hidden-lg"><a href="tel:+<?php echo preg_replace("|[^0-9]+|","",$entity->getPhone());?>" class="gray"><i class="fa fa-phone"></i> Call Us</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 text-right">
                            <ul class="top-nav-right">
                                <li class="hidden-sm hidden-xs"><a href="/floorplans"><i class="fa fa-search"></i> Apartment Search</a></li>
                                <li class="hidden-sm hidden-xs"><a href="/resident-portal"><i class="fa fa-user"></i> Residents</a></li>
                                <li><a href="/floorplans" class="brown"><b>Apply Now <i class="fa fa-angle-right"></i></b></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="nav" class="main-nav dark js-stick">
                <div class="full-wrapper relative clearfix">
                    <div class="nav-logo-wrap local-scroll">
                        <a href="/" class="logo">
                            <images src="images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/amenities">Amenities</a></li>
                            <li><a href="/floorplans">Floor Plans</a></li>
                            <li><a href="/neighborhood">Neighborhood</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li class="hidden-md hidden-lg"><a href="/floorplans">Apartment Search</a></li>
                            <li class="hidden-md hidden-lg"><a href="/resident-portal">Residents</a></li>
                            <li><a href="/floorplans" class="brown"><b>Schedule a Tour <i class="fa fa-angle-right"></i></b></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Nav-->
            @yield('after-nav')
            </section>
            <!-- End Home Section -->
