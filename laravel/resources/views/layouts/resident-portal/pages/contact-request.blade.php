        <?php
            $residentName = "john doe"; //TODO
            $residentEmail = "foo@gmail.com"; //TODO
            ?>
        @extends($extends)
        @section('content')
		<!-- Content -->
		<section class="content">
			<!-- Content Blocks -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title">
							<h1>Contact us</h1>
							<div class="divder-teal"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Contact the property and we will get your concern taken care of as quickly as possible.</p>
						<div class="schedule-a-tour-form form-container">
							<form class="form-horizontal" action="resident-contact-mailer" name="form1" method="/resident-contact-request">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="ResidentName" id="ResidentName" value="<?php echo $residentName;?>">
									<span class="required">*</span>
								</div>
							
								<div class="form-group">
									<label>Email</label>
									<input type="text" class="form-control" name="email" id="email" value="<?php echo $residentEmail;?>">
									<span class="required">*</span>
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" name="phone" id="phone">
								</div>
								<div class="form-group">
									<label>Memo</label><br>
									<textarea name="memo" id="memo"></textarea>
								</div>
								<input type="submit" value="Submit" class="btn submit-btn">
							</form>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-2">
						<div class="contact-right-container">
							<div class="map">
								<div class="embed-responsive embed-responsive-4by3">
                                    <?php //TODO: replace this ?>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3274.454756233728!2d-82.4098738844121!3d34.84479908039779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858303520e7b549%3A0xd5cd3705dfa142fd!2s400+Rhett+St%2C+Greenville%2C+SC+29601!5e0!3m2!1sen!2sus!4v1465319930295" class="embed-responsive-item" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="location">
								<b><?php echo $entity->getCity(). ", " . $entity->getState();?></b>
								<p>
                                <?php echo $entity->getFullAddress(); ?><br>
                                <?php echo $entity->getPhone(); ?>
								</p>
							</div>
							<div class="hours">
								<b>Office Hours</b>
								<p>
                                <?php echo $entity->getHours(); ?>
								</p>
							</div>
							<div class="social-icons">
								<ul>
									<li><a href="<?php echo $entity->getSocialMedia('fb');?>" target="_blank"><i class="fa fa-facebook social-icon" aria-hidden="true"></i></a></li>
									<li><a href="<?php echo $entity->getSocialMedia('twitter');?>" target="_blank"><i class="fa fa-twitter social-icon" aria-hidden="true"></i></a></li>
									<li><a href="<?php echo $entity->getSocialMedia('insta');?>" target="_blank"><i class="fa fa-instagram social-icon" aria-hidden="true"></i></a></li>
									<li><a href="<?php echo $entity->getSocialMedia('google');?>" target="_blank"><i class="fa fa-google-plus social-icon" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        @stop
        
        @section('page-specific-js')
		<script type='text/javascript'>
        
        $(document).ready(function() {
        
            $(".nav-main-right a").on("click", function(){
   $(".nav-main-right").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
        
        });
        </script>
        @stop