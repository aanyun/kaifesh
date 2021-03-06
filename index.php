<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kaifesh for Congress Official Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
	<link href="css/font.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	
</head>

<body>
<div class="wrapper">
    <div class="container">
    	<?php include "view/header.php";?>
	</div> <!-- / .container -->

	<div class="carouselWrapper">
    <div id="myCarousel" class="carousel slide">
	
				
			        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
            </div>
			<div class="item">
                <div class="fill" style="background-image:url('img/slide4.jpg');"></div>
            </div>
			
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
	
	</div> <!-- /.carouselWrapper-->
	
	
    <div class="section-flag">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 issues">
						<ul class="tab light">
							<li id="tablink">
								<a class="about" href="javascript:void(0)">Immigration Reform</a>
								<p style="margin: 0;">
								I have never supported amnesty for Illegal Immigrants. My position is as follows:<br />
								   <span style="margin-left: 20px;">1.&nbsp;&nbsp;Secure our borders</span><br />
								   <span style="margin-left: 20px;">2.&nbsp;&nbsp;Find out who is here</span><br />
								   <span style="margin-left: 20px;">3.&nbsp;&nbsp;Deport those who have committed crimes or are not</span>
								   <span style="margin-left: 35px;">contributing to society.</span>
								  <br />
								  <span class="reglink">
								  <a href="www.google.com">Read More ></a>
								  </span>
								
								</p>
							</li>

							<li id="tablink">
								<a class="history" href="javascript:void(0)">Foreign Policy</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, doloribus, minima, impedit ratione dolor nulla ullam eum inventore aspernatur nihil quaerat vitae consequuntur debitis aliquam voluptates tenetur nisi rem corporis.</p>
							</li>

							<li id="tablink">
								<a class="contact" href="javascript:void(0)">Health Care / PPACA</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, doloribus, minima, impedit ratione dolor nulla ullam eum inventore aspernatur nihil quaerat vitae consequuntur debitis aliquam voluptates tenetur nisi rem corporis.</p>
							</li>
							<li id="tablink">
								<a class="contact" href="javascript:void(0)">Jobs and the Economy</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, doloribus, minima, impedit ratione dolor nulla ullam eum inventore aspernatur nihil quaerat vitae consequuntur debitis aliquam voluptates tenetur nisi rem corporis.</p>
							</li>

						</ul>
                </div>
                <div class="col-lg-8 col-lg-push-1 col-md-8 col-md-push-1 col-sm-8 col-sm-push-1">

					<div class="testimonial">
						<p class="test_quote">"Larry's commitment to conservative values and experience as a compassionate leader in the U.S. Marine Corps 
							make him an outstanding candidate, and he will fight for the issues important to voters in 
							Illinois' 8th congressional district."</p>
						<p class="test_guy">&mdash; John Kline, 25-year veteran of the U.S. Marine Corps, Member 
of Congress (MN-2), and Chairman of the House Committee on Education and the Workforce. </p>

					<div style="text-align: center; padding-top: 12px;">
					<button type="button" class="btn btn-lg btn-primary" style="margin-right: 25px;">More About Larry</button>
					<button type="button" class="btn btn-lg btn-danger">Issues & Viewpoints</button>
					</div>					
					
					</div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->
	
	
	
	    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-7 col-md-7 subscribe">
                    <h2><strong>Stay Updated</strong><span style="font-size: 17px; color: #494949;"> &ndash; Subscribe for the latest campaign updates!</span></h3>
                    
					
					<form class="form-inline" role="form">
					<div class="row" style="margin:0;">
					  <div class="form-group adjust1">
						<label class="sr-only">First Name</label>
						<input name="firstName" class="form-control" placeholder="First Name">
					  </div>
					  <div class="form-group">
						<label class="sr-only">Last Name</label>
						<input name="lastName" class="form-control" placeholder="Last Name">
					  </div>

						  <div class="form-group adjust1" style="padding-top: 15px;">
							<label class="sr-only">Email Address</label>
							<input name="emailAddress" class="form-control" placeholder="Email Address">
						  </div>
						  <div class="form-group" style="padding-top: 15px;">
							<label class="sr-only">Zip Code</label>
							<input name="zipCode" class="form-control-sm" placeholder="Zip Code">
						  </div>
						  <span style="position: relative; top: 8px;">
						  <button type="submit" class="btn btn-danger" style="margin-left: -8px;">Submit</button>
						</span>
					  </div> <!-- /.row --> 
					</form>
					
					
                </div>
                <div class="col-lg-4 col-md-4 connect adjust2">
					<h2><strong>Stay Connected</strong><span style="font-size: 17px; color: #494949;"> with Larry Kaifesh!</span></h3>
					<hr class="divideConnect"> </hr>
					
					<a href="https://www.facebook.com/Kaifeshforcongress" target="_blank">
						<img src="img/fb_icon.png" class="connect_icon">
					</a>
					<a href="https://twitter.com/LarryKaifesh" target="_blank">
						<img src="img/twitter_icon.png" class="connect_icon">
					</a>
					<a href="https://www.youtube.com/user/kaifeshforcongress" target="_blank">
						<img src="img/youtube_icon.png" class="connect_icon">
					</a>
					<a href="https://www.linkedin.com/in/kaifeshforcongress" target="_blank">
						<img src="img/linkedin_icon.png" class="connect_icon">
					</a>					
					<a href="https://plus.google.com/110076519787570184443/posts" target="_blank">
						<img src="img/gplus_icon.png" class="connect_icon">
					</a>
					<a href="http://www.pinterest.com/larrykaifesh/" target="_blank">
						<img src="img/pin_icon.png" class="connect_icon">
					</a>
					<a href="mailto:larry@kaifeshforcongress.com">
						<img src="img/email_icon.png" class="position: relative; top: -3px;">
					</a>

						<div style="margin-top: 15px;">
					<button type="button" class="btn btn-lg btn-primary" style="margin-right: 11px;">Contribute</button>
					<button type="button" class="btn btn-lg btn-danger">Get Involved</button>
						</div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->
	
	
        <footer>
    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-4">
				<div class="paidforby">Paid for by Kaifesh for Congress</div>
				<p class="subfooter">636 E. Irving Park Road<br />
					Roselle, IL 60172<br />
					Office: 847-380-6915<br />
					After hours: 224-800-8065</p>
                </div>
				<div class="col-lg-4 subfooter-center">
                    <p>Copyright &copy; Kaifesh for Congress 2014.</p>
					<img src="img/kaifesh_logo.png" class="img2" alt="Kaifesh for Congress">
				</div>
				<div class="col-lg-4 subfooter-right">
                    <p><a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
	
    <!-- /.section-colored -->
	    <div class="section-colored2 text-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="desclaimer">Larry Kaifesh is a Colonel in the United States Marine Corps Reserve.
					<br />Use of his military rank, job titles, and photographs in uniform does not imply endorsement by the Marine Corps, Department of the Navy or the Department of Defense. </p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->
	</footer>
	
</div>
<!-- /.wrapper -->



    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/main.js"></script>	

</body>

</html>
