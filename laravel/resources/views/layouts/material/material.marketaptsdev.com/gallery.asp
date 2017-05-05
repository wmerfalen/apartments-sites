<!DOCTYPE html>

<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="http://www.willowcoveapts.net/images/amc/04CIS/favicon.ico" />
		<title>644 City Station - Gallery</title>
		<!-- CSS -->
			
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/animate.css">
			
			<link rel="stylesheet" href="css/materialize.min.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/lightcase.css">
			
			
		<!-- End CSS -->
	</head>
	<body id="galleryPage">
		<!-- Header -->
				<header>
			<!-- Filter Modal -->
			<div id="tour_form" class="modal">
				<div class="modal-content">
					<form>
					<div class="row">
						<div class="col s2 m1 left-align">
							<h5><i class="material-icons modal-close">arrow_back</i></h5>
						</div>
						<div class="col s8 m10 center-align">
							<h5>Schedule a Tour</h5>
						</div>
						<div class="col s2 m1 right-align">
							<h5><i class="material-icons modal-close">close</i></h5>
						</div>
					</div>
					<form>
					<div class="row">
						<div class="input-field col s12">
							<input id="first_name" type="text">
							<label for="first_name" class="">First Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="last_name" type="text">
							<label for="last_name" class="">Last Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="text">
							<label for="email" class="">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="phone" type="text">
							<label for="phone" class="">Phone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="date" class="datepicker" placeholder="Please select a date">
							<label class="active">Approximate Move-in Date</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m6">
							<a href="#!" class="btn-block btn-large modal-action modal-close waves-effect waves-light deep-orange darken-2 white-text center-align">Submit</a>
						</div>
					</div>
					</form>
				</div>
			</div>
			<!-- End Filter Modal -->
			<!-- Top Nav -->
			<div class="top-nav blue-grey darken-4 white-text">
				<div class="row">
					<div class="col s12">
						<ul class="top-nav-left">
							<li><i class="material-icons">phone</i> <b>Call Today</b>&nbsp;:&nbsp;(801) 869-8200 </li>
							<li><i class="material-icons">location_on</i> <a href="https://goo.gl/maps/dEyTw" target="_blank"><span class="hide-on-small-only"><b>Location&nbsp;:&nbsp;</b></span>644 West North Temple Salt Lake City, UT 84116</a></li>
							<li><i class="material-icons">directions_car</i> <a href="getdirections.asp">Map It</a></li>
						</ul>
					</div>
				</div>
			</div> 
			<!-- End Top Nav -->
			<!-- Nav Residents Dropdown -->
			<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="residents.asp">Pay Online</a></li>
				<li class="divider"></li>
				<li><a href="residents.asp">Apply Online</a></li>
				<li class="divider"></li>
				<li><a href="residents.asp">Maintenance Request</a></li>
				<li class="divider"></li>
				<li><a href="residents.asp">Suggestion Box</a></li>
				<li class="divider"></li>
				<li><a href="residents.asp">Reviews</a></li>
				<li class="divider"></li>
				<li><a href="residents.asp">Pet Policies</a></li>
			</ul>
			<!-- End Nav Residents Dropdown -->
			<!-- Nav -->
			<nav>
				<div class="nav-wrapper white black-text">
					<a href="index.asp" class="brand-logo"><img src="http://www.amcapartments.com/uploads/properties/cb63a34b8caea54fefabe610e457b837.png" class="responsive-img"></a>
					<a href="#" data-activates="mobile-demo" class="mobile-toggle button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.asp" id="homeNavLink">Home</a></li>
						<li><a href="gallery.asp" id="galleryNavLink">Gallery</a></li>
						<li><a href="amenities.asp" id="amenitiesNavLink">Amenities</a></li>
						<li><a href="floor-plans.asp" id="floorplansNavLink">Floor Plans</a></li>
						<li><a href="neighborhood.asp" id="neighborhoodNavLink">Neighborhood</a></li>
						<li><a href="contact.asp" id="contactNavLink">Contact</a></li>
						<li><a href="#tour_form" id="scheduleNavLink">Schedule a Tour</a></li>
						<!-- Dropdown Trigger -->
      					<li><a class="dropdown-button" href="#!" data-activates="dropdown1" id="residentsNavLink">Residents<i class="material-icons right">arrow_drop_down</i></a></li>
      					<li><a href="#" id="applyNavLink">Apply online</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo">
						<li><a href="index.asp" id="homeMobileNavLink">Home</a></li>
						<li><a href="gallery.asp" id="galleryMObileNavLink">Gallery</a></li>
						<li><a href="amenities.asp" id="amenitiesMobileNavLink">Amenities</a></li>
						<li><a href="floor-plans.asp" id="floorplansMobileNavLink">Floor Plans</a></li>
						<li><a href="neighborhood.asp" id="neighborhoodMobileNavLink">Neighborhood</a></li>
						<li><a href="contact.asp" id="contactMobileNavLink">Contact</a></li>
						<li><a href="#tour_form" id="scheduleMobileNavLink">Schedule a Tour</a></li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
								<li>
									<a class="collapsible-header" id="residentsMobileNavLink">Residents</a>
									<div class="collapsible-body">
										<ul>
											<li><a href="residents.asp">Resident Pay Online</a></li>
											<li><a href="residents.asp">Resident Apply Online</a></li>
											<li><a href="residents.asp">Resident Maintenance Request</a></li>
											<li><a href="residents.asp">Resident Suggestion Box</a></li>
											<li><a href="residents.asp">Resident Reviews</a></li>
											<li><a href="residents.asp">Pet Policies</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</li>
						<li><a href="#" id="applyMobileNavLink">Apply online</a></li>
					</ul>
				</div>
			</nav>
			<!-- End Nav -->
		</header>
		<!-- End Header -->
		<!-- Content -->

		<div class="content">
			
			<div class="page-header deep-orange darken-2">
				<div class="row container">
					<h2 class="white-text">Gallery</h2>
				</div>
			</div>

			

			<div class="section white gallery">
				<div class="row container">

					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/704ee5469ab83402fc614934de1408c3.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/704ee5469ab83402fc614934de1408c3.jpg" alt="644 City Station Apartments Salt Lake City, UT" title="644 City Station Apartments Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/7dfdc99773e2c8956411d999fe3ea509.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/7dfdc99773e2c8956411d999fe3ea509.jpg" alt="644 City Station Apartments Salt Lake City" title="644 City Station Apartments Salt Lake City" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/1d8c3c45c2bc23990ff39971c0d9d169.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/1d8c3c45c2bc23990ff39971c0d9d169.jpg" alt="644 City Station Apartments, UT" title="644 City Station Apartments, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/ace86bfd7ff5d8623bd1f7edad1114fd.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/ace86bfd7ff5d8623bd1f7edad1114fd.jpg" alt="644 City Station Apartments" title="644 City Station Apartments" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/2565943eb2b5bdac6f7d4d2bb8686fe1.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/2565943eb2b5bdac6f7d4d2bb8686fe1.jpg" alt="644 City Station Apts Salt Lake City, UT" title="644 City Station Apts Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/1ab6713503ec44135a1c72be89597508.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/1ab6713503ec44135a1c72be89597508.jpg" alt="644 City Station Apartments" title="644 City Station Apartments" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/917ff274a6f62e1ed4c787c08f23c052.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/917ff274a6f62e1ed4c787c08f23c052.jpg" alt="644 City Station Salt Lake City, UT" title="644 City Station Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/85bbc46ccfc4182863698ece27f017f2.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/85bbc46ccfc4182863698ece27f017f2.jpg" alt="644 City Station Apartments SLC, UT" title="644 City Station Apartments SLC, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/5db77f1f80a51b2425c8885838364051.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/5db77f1f80a51b2425c8885838364051.jpg" alt="644 City Station Apts Salt Lake City" title="644 City Station Apts Salt Lake City" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/b7597b46adb95c48ef7ad8c55854e22c.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/b7597b46adb95c48ef7ad8c55854e22c.jpg" alt="644 City Station Apartments Salt Lake City, UT" title="644 City Station Apartments Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/6d1dc8672c5b23e31abdc1988c299eeb.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/6d1dc8672c5b23e31abdc1988c299eeb.jpg" alt="644 City Station Apartments Salt Lake City, UT" title="644 City Station Apartments Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/02e64e73e3bc60ec289c9cdf929fa474.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/02e64e73e3bc60ec289c9cdf929fa474.jpg" alt="Apartments Salt Lake City, UT" title="Apartments Salt Lake City, UT" ></a>
					</div>
					
					<div class="col s12 m4">
						 <a href="http://www.amcapartments.com/uploads/photos/87935c326d2deb36b68cfbc02b1932e7.jpg" data-rel="lightcase:gallery"><img class="lightcaseboxed responsive-img" src="http://www.amcapartments.com/uploads/photos/87935c326d2deb36b68cfbc02b1932e7.jpg" alt="644 City Station Apartments SLC, UT" title="644 City Station Apartments SLC, UT" ></a>
					</div>
					
		       		
				</div>
			</div>

		</div>
		<!-- End Content -->
		<!-- Footer -->
				<footer class="page-footer blue-grey darken-4 white-text">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h3 class="white-text">Come check us out!</h3>
                <ul class="footer-list">
					<li><b>Call Today</b>&nbsp;:&nbsp;(801) 869-8200 </li>
					<li><b>Location</b>&nbsp;:&nbsp;644 West North Temple Salt Lake City, UT 84116</li>
					<li>

					</li>
					<li>
						<a href="" target="_blank"><img src="images/facebook.png"></a>
						<a href="" target="_blank"><img src="images/twitter.png"></a>
						<a href="" target="_blank"><img src="images/instagram.png"></a>
						<a href="" target="_blank"><img src="images/google-plus.png"></a>
						
					</li>
				</ul>
              </div>
              <div class="col l4 s12">
                <h4 class="white-text">644 City Station</h4>
                <ul>
					<li><a href="gallery.asp">Gallery</a></li>
					<li><a href="amenities.asp">Amenities</a></li>
					<li><a href="floor-plans.asp">Floor Plans</a></li>
					<li><a href="neighborhood.asp">Neighborhood</a></li>
					<li><a href="contact.asp">Contact</a></li>
					<li><a href="floor-plans.asp">Schedule a Tour</a></li>
					<li>
						<a href=""><img class="hud-img" src="images/Fair-Housing.png" alt="Equal Housing" title="Equal Housing"></a>
						<a href="residents.asp"><img class="hud-img" src="images/Pet-Friendly-Icon.png" width="30" height="20" alt="Pet Friendly" title="Pet Friendly"></a>
						<a href=""><img class="hud-img" src="images/Handicap_Icon.png" width="30" height="20" alt="Disability Access" title="Disability Access"></a>
					</li>

                </ul>
              </div>
              <div class="col l2 s12">
                <h4 class="white-text">Residents</h4>
                <ul>
					<li><a href="residents.asp">Pay Online</a></li>
					<li><a href="residents.asp">Apply Online</a></li>
					<li><a href="residents.asp">Maintenance Request</a></li>
					<li><a href="residents.asp">Suggestion Box</a></li>
					<li><a href="residents.asp">Reviews</a></li>
					<li><a href="residents.asp">Pet Policies</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
            	<div class="row">
            		<div class="col s12">
						<ul class="legal-links">
							<li>&reg; 2016 644 City Station</li>
							<li><a href="privacy-policy.asp">Privacy Policy</a></li>
							<li><a href="terms-of-service.asp">Terms of Service</a></li>
							<li><a href="https://www.marketapts.com/" target="_blank" title="Powered by MarketApts.com&reg;">Powered by MarketApts.com&reg;</a></li>
						</ul>
            		</div>
            	</div>
            </div>
          </div>
        </footer>
		<!-- End Footer -->
		<!-- Scripts -->
		<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
		<script src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/lightcase.js"></script>
		<script type="text/javascript" src="js/jquery.events.touch.js"></script>
		<script type="text/javascript">
			$( document ).ready(function(){

				$('.materialboxed').materialbox();
				// Slider
				$('.carousel.carousel-slider').carousel({full_width: true});
				// Mobile Nav Slide Out Button
				$(".button-collapse").sideNav();
				$('select').material_select();
				// More Options Dropdown
				$('.modal').modal({
			      dismissible: false, // Modal can be dismissed by clicking outside of the modal
			      opacity: .5, // Opacity of modal background
			      in_duration: 200, // Transition in duration
			      out_duration: 200, // Transition out duration
			      starting_top: '0%', // Starting top style attribute
			      ending_top: '0%' // Ending top style attribute
			    });
			    $(document).ready(function(){
					$('.parallax').parallax();
				});
			    $('.datepicker').pickadate({
					selectMonths: true, // Creates a dropdown to control month
					selectYears: 15 // Creates a dropdown of 15 years to control year
				});

				$('input.autocomplete').autocomplete({
					data: {
					"1": null,
					"2": null,
					"3": null,
					"11": null,
					"22": null,
					"330": null,
					"215": null,
					"157": null,
					}
				});

			})
		</script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('a[data-rel^=lightcase]').lightcase();
			});
		</script>
		<!-- End Scripts -->
	</body>
</html>