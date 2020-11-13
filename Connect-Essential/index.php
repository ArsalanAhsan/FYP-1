<?php include("header.php");?>

	<!-- Banner Section Three -->
    <section class="banner-section-three">
		<div class="patern-layer-one" style="background-image: url(images/background/pattern-9.png)"></div>
		<div class="patern-layer-two" style="background-image: url(images/background/pattern-10.png)"></div>
		<div class="circle-box"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">
						<div class="image" data-depth="0.30">
							<img src="images/resource/electrician.png" alt="" />
						</div>
					</div>
				</div>
			
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Be A Hero <br> Get Any Thing Done </h2>
						<div class="text">MazdorJee Is A Highly Intuitive Problem Solving Solution Connecting Hundreds Of Thousands Of Skilled Problem Solvers.</div>
						<div class="btn-box">
							<a href="contact.html" class="theme-btn btn-style-four"><span class="txt">Sign Up</span></a>
							<a href="web-development.html" class="theme-btn btn-style-three"><span class="txt">Book Now</span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Banner Section Three -->
	
	<!-- Business Section -->
	<section class="business-section-two margin-top" id="booknow">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-2">
						<div data-depth="0.30" class="image">
							<a href="images/resource/animation_640_kekb6zta.gif" data-fancybox="business" data-caption="" class="link"><img src="images/resource/animation_640_kekb6zta.gif" alt="" /></a>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Book Our Service</h2>
							<div class="box-loader">
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
							
						</div>
						<form method="post"  id="contact-form">
                                <div class="form-group">
                                   <select class="form-control" name="service_title" id="service">
                                   	<option hidden="hidden">Select Service</option>
                                   	<?php
                                   	$fet_ser="select * from tbl_service";
                                   	$run_ser=mysqli_query($con,$fet_ser);
                                   	while($row_ser=mysqli_fetch_array($run_ser))
                                   	{
                                   		$sid=$row_ser['service_id'];
                                   		$sname=$row_ser['service_title'];
                                   		echo "<option value='$sid'>$sname </option>";

                                   	}
                                   	?>
                                   </select>
                                </div>

                                  <div class="form-group">
                                   <select class="form-control" name="work_title" id="work">
                                   	<option hidden="hidden">Select Work</option>
                                   
                                   </select>
                                </div>
                                    
								<div class="form-group">
									<input type="number" name="uphone" value="" class="form-control" placeholder="Mobile" required>
								</div>
								
								
								
								<div class="form-group">
									<textarea name="uaddress" placeholder="Address" class="form-control"></textarea>
								</div>
								<div class="form-group">
									 <select class="form-control" name="ucity">
                                   	<option hidden="hidden">Select City</option>
                                   	<option>Karachi</option>
                                   
                                   </select>
								</div>
								<div class="form-group">
									 <select class="form-control" name="engine_title" id="engine">
                                   	<option hidden="hidden">Select Engine Power</option>
                                  
                                   
                                   </select>
								</div>

								<div class="form-group ">
									
                                   <input type="date" name="servicedate" value="" class="form-control" placeholder="Date" required>
								</div>

								<div class="form-group">
									 <select class="form-control" name="time_slot">
                                   	<option hidden="hidden">Select Time Slot</option>
                                   	<option>10am - 12pm</option>
                                   	<option>12pm - 2pm</option>
                                   	<option>2pm - 4pm</option>
                                   	<option>4pm - 6pm</option>
                                   	<option>6pm - 8pm</option>
                                   
                                   </select>
								</div>
								
								
                                
						<input type="submit" class="theme-btn btn-style-three" value="Book Now" name="ubook">
                            </form>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Business Section -->


<?php

if(isset($_POST['ubook']))
{
	if(!isset($_SESSION['uemail']))
	{
		echo "<script>window.open('user_login.php','_self')</script>";
	}
	else
	{
		$service_title=$_POST['service_title'];
		$work_title=$_POST['work_title'];
		$uphone=$_POST['uphone'];
		$uaddress=$_POST['uaddress'];
		$ucity=$_POST['ucity'];
		$engine_title=$_POST['engine_title'];
		$servicedate=$_POST['servicedate'];
		$time_slot=$_POST['time_slot'];

		$uemail=$_SESSION['uemail'];
		$fet="select * from tbl_user where user_email='$uemail'";
		$run_fet=mysqli_query($con,$fet);
		$row_fet=mysqli_fetch_array($run_fet);
		$uid=$row_fet['user_id'];

		$ins_booking="INSERT INTO tbl_booking(user_id,user_email,service_id,work_id,user_mobile,user_address,user_city,engine_id,booking_working_date,booking_timeslot,booking_applydate) VALUES ('$uid','$uemail','$service_title','$work_title','$uphone','$uaddress','$ucity','$engine_title','$servicedate','$time_slot',NOW())";
		$run_booking=mysqli_query($con,$ins_booking);

		if($run_booking)
		{
			echo "<script>alert('Booking Successfully Added')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
		else
		{

			echo "<script>alert('Booking UnSuccessfully Added')</script>";
			echo "<script>window.open('index.php','_self')</script>";

		}


	}
								
}

?>



	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 <script>

$(document).ready(function(){
  $('#service').change(function(){
    var cat_type=$(this).val();
    $.ajax({
      url:"fetch_type.php",
      method:"POST",
      data:{cattype_id:cat_type},
      dataType:"text",
      success:function(data){
        $('#work').html(data);
      }
      
    });
  });

    $('#service').change(function(){
    var cat_type=$(this).val();
    $.ajax({
      url:"fetch_type2.php",
      method:"POST",
      data:{cattype_id:cat_type},
      dataType:"text",
      success:function(data){
        $('#engine').html(data);
      }
      
    });
  });


  });
</script>
	<?php

if(isset($_POST['ubook']))
{
	echo "<script>alert('Book Successfully')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
	?>
	
	<!-- Featured Section Two -->
	<section class="featured-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-data"></span>
							</div>
							<div class="text">Finding <br>Service </div>
						</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="150ms"  data-wow-duration="2000ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-line-chart"></span>
							</div>
							<div class="text">Choose  <br> Package</div>
						</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms"  data-wow-duration="2000ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-clipboard"></span>
							</div>
							<div class="text">Working  <br> Date/Time</div>
						</div>
					</div>
				</div>
				
				<!-- Featured Block Two -->
				<div class="featured-block-two col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="450ms"  data-wow-duration="2000ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-team"></span>
							</div>
							<div class="text">Talented <br> Team Reached</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Featured Section Two -->


	<section class="services-section-two style-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our Service</div>
				<h2>Easy & Affordable Our Service</h2>
			</div>
			
			<div class="row clearfix">
			
				<!-- Services Block -->
				<div class="services-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
					<div class="inner-box">
						<div class="icon-box" >
							<span class=""><img src="images/pic1.jpg" style="height: 170px"></span>
						</div>
						<h4><a href="web-development.html">Bike Mechanic Service.</a></h4>
						<div class="text">Tuning and Maintenance, Engine Overhaul, Lubes Replacement, Electric Work, Parts Replacement etc.</div>
						<a class="read-more" href="">Read More</a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="200ms"  data-wow-duration="2000ms">
					<div class="inner-box">
						<div class="icon-box" style="background-image: url(images/resource/service-5.png)">
							<span class=""><img src="images/pic2.jpg" style="height: 200px"></span>
						</div>
						<h4><a href="web-development.html">Generator Mechanic Service</a></h4>
						<div class="text">Tuning , Repairing/ Maintenance, Battery/ AVR/ Self Work, Engine/ Overhaul /Repairing, New Generator Installation etc.</div>
						<a class="read-more" href="">Read More</a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
					<div class="inner-box">
						<div class="icon-box">
							<img src="images/pic3.jpg" style="height: 170px">
						</div>
						<h4><a href="web-development.html">Car Mechanic.</a></h4>
						<div class="text">Tuning & Maintenance, Electrical Scanning, Diagnosis, Engine Overhaul, Oil Replacement, Electric Work, Parts Replacement etc .</div>
						<a class="read-more" href="web-development.html">Read More</a>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-two col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="200ms"  data-wow-duration="2000ms">
					<div class="inner-box">
						<div class="icon-box" >

							<img src="images/pic4.jpg" style="height: 200px">
						</div>
						<h4><a href="web-development.html">User Car Inspection</a></h4>
						<div class="text">Yes we know the pain of buying a USED CAR and we know your mechanic won't easily agree to go along to check the cars you have selected to buy</div>
						<a class="read-more" href="">Read More</a>
					</div>
				</div>
				
			</div>
			
			<!-- Button Box -->
			<div class="btn-box text-center">
				<a href="web-development.html" class="theme-btn btn-style-three"><span class="txt">Read More</span></a>
			</div>
			
		</div>
	</section>
	
	<!-- Business Section Three -->
	<section class="business-section-three">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-2">
						<div class="image" data-depth="0.40">
							<img src="images/resource/business-3.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Our Business</div>
							<h2>Building Strategies for <br> Your Trust & Support</h2>
						</div>
						
						<div class="text">Its Possible Only From Your Support & Our Team Hard Working ...</div>
						<!-- Fact Counter Two / Style Two -->
						<div class="fact-counter-two style-two">
							<div class="row clearfix">

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="12">0</span>k
											</div>
											<div class="counter-title">Happy Customer</div>
										</div>
									</div>
								</div>
								
								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="25">0</span>m
											</div>
											<div class="counter-title">Consultants</div>
										</div>
									</div>
								</div>

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box alternate">
												<span class="count-text" data-speed="3000" data-stop="15">0</span>k +
											</div>
											<div class="counter-title">Complete Work</div>
										</div>
									</div>
								</div>

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="15">0</span>k +
											</div>
											<div class="counter-title">Total Reviews</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>	
			
			</div>
		</div>
	</section>
	<!-- End Business Section Three -->
	

	
	<!-- Call To Action Section -->
	<section class="call-to-action-section">
		
		<!-- Section Icons -->
		<div class="section-icons parallax-scene-3">
			<!-- Icon One -->
			<div data-depth="0.80" class="icon-one parallax-layer"></div>
			<!-- Icon Two -->
			<div data-depth="0.50" class="icon-two parallax-layer" style="background-image:url(images/icons/icon-22.png)"></div>
			<!-- Icon Three -->
			<div data-depth="0.50" class="icon-three parallax-layer"></div>
			<!-- Icon Four -->
			<div data-depth="0.30" class="icon-four parallax-layer"></div>
			<!-- Icon Five -->
			<div data-depth="0.20" class="icon-five parallax-layer" style="background-image:url(images/icons/icon-23.png)"></div>
			<!-- Icon Six -->
			<div data-depth="0.20" class="icon-six parallax-layer" style="background-image:url(images/icons/icon-24.png)"></div>
			<!-- Icon Seven -->
			<div data-depth="0.50" class="icon-seven parallax-layer" style="background-image:url(images/icons/icon-25.png)"></div>
			<!-- Icon Eight -->
			<div data-depth="0.40" class="icon-eight parallax-layer"></div>
			<!-- Icon Nine -->
			<div data-depth="0.10" class="icon-nine parallax-layer"></div>
		</div>
		
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Ready To Get Started?</h2>
				<div class="text">But I must explain to you how all this mistaken idea of denouncing </div>
			</div>
			
			<!-- Website Form-->
			<div class="website-form">
				<form method="post" action="http://wp.efforttech.net/html/tecnic/tecnic/contact.html">
					<div class="form-group clearfix">
						<input type="text" name="website" value="" placeholder="Your Website URL" required>
						<input type="email" name="email" value="" placeholder="Email address" required>
					</div>
					<button type="submit" class="theme-btn">Get Now</button>
				</form>
			</div>
			
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Testimonial Section Four -->
	<section class="testimonial-section-four" id="testimonial">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our Customers Love Us</div>
				<h2>Customer opinions are very important to us</h2>
			</div>
			
			<!-- Inner Container -->
			<div class="inner-container">
			
				<div class="testimonial-carousel-two owl-carousel owl-theme">
				
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-5.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-15.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-16.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-5.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-15.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
					<!-- Testimonial Block Four -->
					<div class="testimonial-block-four">
						<div class="inner-box">
							<!-- Upper Content -->
							<div class="upper-content">
								<div class="quote flaticon-quote-2"></div>
								<div class="text">We needed additional insight, which is something that we didn't find when looking at other companies. I would feel that I was teacvhing them things, as opposed to LSEO time.</div>
							</div>
							<!-- Lower Content -->
							<div class="lower-content">
								<div class="image">
									<img src="images/resource/author-16.png" alt="" />
								</div>
								<h4>Travis Goodwin</h4>
								<div class="designation">Designer</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section Four -->
	
	<!-- Pricing Section Three -->
	<section class="pricing-section-three" id="price">
		<!-- Icons -->
		<div class="icons parallax-scene-4">
			<!-- Icon One -->
			<div data-depth="0.20" class="icon-one parallax-layer" style="background-image:url(images/icons/icon-24.png)"></div>
			<!-- Icon Two -->
			<div data-depth="0.50" class="icon-two parallax-layer" style="background-image:url(images/icons/icon-22.png)"></div>
			<!-- Icon Three -->
			<div data-depth="0.10" class="icon-three"></div>
			<!-- Icon Four -->
			<div data-depth="0.30" class="icon-four"></div>
			<!-- Icon Five -->
			<div data-depth="0.10" class="icon-five"></div>
			<!-- Icon Six -->
			<div data-depth="0.20" class="icon-six parallax-layer" style="background-image:url(images/icons/icon-23.png)"></div>
			<!-- Icon Seven -->
			<div data-depth="0.10" class="icon-seven"></div>
			<!-- Icon Eight -->
			<div data-depth="0.40" class="icon-eight parallax-layer" style="background-image:url(images/icons/icon-24.png)"></div>
			<!-- Icon Nine -->
			<div data-depth="0.10" class="icon-nine parallax-layer" style="background-image:url(images/icons/icon-25.png)"></div>
			<!-- Icon Ten -->
			<div data-depth="0.10" class="icon-ten"></div>
			<!-- Icon Eleven -->
			<div data-depth="0.10" class="icon-eleven parallax-layer" style="background-image:url(images/icons/icon-25.png)"></div>
			<!-- Icon Twelve -->
			<div data-depth="0.10" class="icon-twelve"></div>
			<!-- Icon Thirteen -->
			<div data-depth="0.10" class="icon-thirteen parallax-layer" style="background-image:url(images/icons/icon-25.png)"></div>
			<!-- Icon Fourteen -->
			<div data-depth="0.10" class="icon-fourteen parallax-layer" style="background-image:url(images/icons/icon-23.png)"></div>
		</div>
		<!-- End Icons -->
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Choose Pricing Plan</h2>
				<div class="text">This new-found knowledge may then be used by engineers to <br> create new tools and machines,</div>
			</div>
			
			<div class="clearfix">
				
				<!-- Price Block Three -->
				<div class="price-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="title">Basic plan</div>
							<div class="price"><sup>$</sup> 29 <sub>/ mo</sub></div>
						</div>
						<div class="lower-content">
							<ul class="price-list">
								<li>Power And Predictive Dialing</li>
								<li>Customer Experience</li>
								<li>24/7 phone and email support</li>
								<li>Customer Experience</li>
								<li>Users Rating</li>
							</ul>
							<a href="#" class="theme-btn buy-btn"><span class="txt">Explore More</span></a>
						</div>
					</div>
				</div>
				
				<!-- Price Block Three -->
				<div class="price-block-three popular col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="popular">Popular</div>
						<div class="upper-box">
							<div class="title">team plan</div>
							<div class="price"><sup>$</sup> 59 <sub>/ mo</sub></div>
						</div>
						<div class="lower-content">
							<ul class="price-list">
								<li>Power And Predictive Dialing</li>
								<li>Customer Experience</li>
								<li>24/7 phone and email support</li>
								<li>Customer Experience</li>
								<li>Users Rating</li>
							</ul>
							<a href="#" class="theme-btn buy-btn"><span class="txt">Explore More</span></a>
						</div>
					</div>
				</div>
				
				<!-- Price Block Three -->
				<div class="price-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="upper-box">
							<div class="title">Corporate Plan</div>
							<div class="price"><sup>$</sup> 199 <sub>/ mo</sub></div>
						</div>
						<div class="lower-content">
							<ul class="price-list">
								<li>Power And Predictive Dialing</li>
								<li>Customer Experience</li>
								<li>24/7 phone and email support</li>
								<li>Customer Experience</li>
								<li>Users Rating</li>
							</ul>
							<a href="#" class="theme-btn buy-btn"><span class="txt">Explore More</span></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Pricing Section Three -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our Team</div>
				<h2>Our Expert Team Members <br> Will Help You</h2>
				<div class="text">This new-found knowledge may then be used by engineers to <br> create new tools and machines,</div>
			</div>
			
			<div class="three-item-carousel owl-carousel owl-theme">
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Celsiya Malocm</a></h5>
							<div class="designation">Marketing Manager</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Nelson Mecoy</a></h5>
							<div class="designation">Web Develper</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Andrea Spilber</a></h5>
							<div class="designation">Web Designer</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Celsiya Malocm</a></h5>
							<div class="designation">Marketing Manager</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Nelson Mecoy</a></h5>
							<div class="designation">Web Develper</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<!-- Social Box -->
							<ul class="social-box">
								<li><a href="#" class="fa fa-facebook-f"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google"></a></li>
							</ul>
						</div>
						<div class="lower-content">
							<h5><a href="team.html">Andrea Spilber</a></h5>
							<div class="designation">Web Designer</div>
							<!-- Arrows -->
							<a href="team.html" class="team-arrows-right">
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
								<div class="chevron"></div>
							</a>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	

	
	<!-- Discount Section -->
	<section class="discount-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Make an online Appointment and get a 10% discount to work the wizard.</h2>
						<a href="#booknow" class="theme-btn btn-style-three"><span class="txt">Get Started</span></a>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/discount.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Discount Section -->

	<?php include("footer.php");?>