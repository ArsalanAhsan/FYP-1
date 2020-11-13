<?php include("header.php");?>
	<!--Page Title-->
    <section class="page-title">
		<div id="particles-js" class="particles-pattern"></div>
        <div class="auto-container">
			<div class="inner-container clearfix">
				<div class="pull-left">
					<h2>Contact Us</h2>
				</div>
                <div class="pull-right">
					<ul class="bread-crumb clearfix">
						<li><a href="index.html">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
            </div>
        </div>
		<!--Waves Container-->
        <div>
          <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="parallax">
          <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
          <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
          </g>
          </svg>
        </div>
        <!--Waves end-->
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Form -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">GET IN TOUCH</div>
							<h2>Ready to Get Started?</h2>
						</div>
						
						<!-- Default Form -->
						<div class="default-form contact-form">
							<form method="post" action="http://wp.efforttech.net/html/tecnic/tecnic/sendemail.php" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" value="" placeholder="Name" required>
                                </div>
                                    
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Email" required>
								</div>
								
								<div class="form-group">
									<input type="text" name="subject" value="" placeholder="Subject" required>
								</div>
								
								<div class="form-group">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-four"><span class="txt">Send Question</span></button>
								</div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">GET IN TOUCH</div>
							<h2>Ready to Get Started?</h2>
							<div class="text">Give us a call or drop by anytime, we endeavour to  answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</div>
						</div>
						
						<!-- Info List -->
						<ul class="info-list">
							<li>
								<span class="icon flaticon-placeholder-2"></span>
								<strong>FL 33401, Gulshan e Iqbal</strong>
								576d University St, Seattle, Karachi
							</li>
							<li>
								<span class="icon flaticon-phone-call"></span>
								<strong>999-999-9999</strong>
								Give us a call
							</li>
							<li>
								<span class="icon flaticon-stopwatch"></span>
								<strong>mazdorjee@mail.com</strong>
								Get in Touch
							</li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Page Section -->
	
	
	
	<!-- Signup Section -->
	<section class="signup-section style-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-2">
						<div class="image" data-depth="0.40">
							<img src="images/resource/signup.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Sign up for new update form us and get company News</h2>
							<div class="separate"></div>
						</div>
						
						<!-- Signup Form -->
						<div class="signup-form wow tada" data-wow-duration="1500ms">
							<form method="post" action="http://wp.efforttech.net/html/tecnic/tecnic/contact.html">
								<div class="form-group clearfix">
									<input type="email" name="email" value="" placeholder="Enter Your Email here" required>
									<button type="submit" class="theme-btn send-btn flaticon-send"></button>
								</div>
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
<?php include("footer.php");?>