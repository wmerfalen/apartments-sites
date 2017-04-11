<!DOCTYPE html>
<html lang="">
    <head>
        <title>@yield('title')</title>
@section('meta')
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
@show
        <!-- CSS -->
@section('css')
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/dinapoli/css/main.css">
        <link rel="stylesheet" href="/dinapoli/css/custom.css">
        <link rel="stylesheet" href="/dinapoli/css/animate.min.css">
        <link rel="stylesheet" href="/dinapoli/css/owl.carousel.css">
        <link rel="stylesheet" href="/dinapoli/css/magnific-popup.css">
@show
        @yield('extra-css')
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		@yield('recaptcha-js')
    </head>
    <body class="appear-animate">
        <!-- Page Loader -->
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            <!-- Nav -->
			@include('layouts/dinapoli/pages/inc/nav')
            <!-- End Nav-->

            <?php if(!App\Util\Util::isHome()): ?>
            <!-- Page Title Section -->
            <section class="page-section bg-dark-alfa-30" data-background="<?php echo $entity->getWebPublicDirectory('img');?>/bg1.jpg">
                <div class="relative container align-left">

                    <div class="row">
						@yield('page-title-row')
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right">
                                <a href="#">Home</a>&nbsp;/&nbsp;<span>@yield('page-title-span')</span>@yield('page-title-span-suffix')
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            <!-- End Page Title Section -->

        	@yield('content')
            @yield('action')
            @section('contact')
            <section class="contact-padding page-section" id="contact">
                <div class="container relative">

                    <div class="row">

                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">

                                <!-- Phone -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-20">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Call Us
                                        </div>
                                        <div class="ci-text">
                                            <?php echo $entity->getPhone(); ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Phone -->

                                <!-- Address -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-20">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Address
                                        </div>
                                        <div class="ci-text">
                                            <?php echo strtoupper($entity->getStreet() . "<br>" . $entity->getCity() . ", " .
                                                $entity->getState() . " " . $entity->getZipCode()); 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address -->

                                <!-- Office Hours -->
                                <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-20">
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="ci-title font-alt">
                                            Office Hours
                                        </div>
                                        <div class="ci-text">
                                            <?php echo $entity->getHours() ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Office Hours-->

                            </div>
                        </div>

                    </div>

                </div>
            </section>
            @show

            @section('footer')
            	<!-- Footer -->
                @include('layouts/dinapoli/pages/inc/footer')
            	<!-- End Footer -->
            @show
            @yield('epop')

       @section('js')
        <!-- JS -->
        @yield('google-maps-js')
        <script type="text/javascript" src="js/build/marketapts.min.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
		@yield('page-specific-js')
        @show
    </body>
</html>
