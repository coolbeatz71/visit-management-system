<?php 
	if(isset($_SESSION)){
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Welcome - Visit Management System</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
</head>
<body>	
	<!-- Main navigation -->
	<a name="top"></a>
	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark deep-orange fixed-top scrolling-navbar">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto smooth-scroll">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about" data-offset="90">About</a>
						</li>
						
					</ul>
					<!-- Social Icon  -->
					<ul class="navbar-nav nav-flex-icons">
						<li class="nav-item">
							<a href="public/login.php" class="nav-link">
								<i class="fa fa-sign-in"></i>
								Sign-In
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navbar -->
		<!-- Full Page Intro -->
		<div class="view" id="intro">
			<!--Carousel Wrapper-->
			<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
			    <!--Indicators-->
			    <ol class="carousel-indicators">
			        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			        <li data-target="#carousel-example-2" data-slide-to="1"></li>
			        <li data-target="#carousel-example-2" data-slide-to="2"></li>
			    </ol>
			    <!--/.Indicators-->
			    <!--Slides-->
			    <div class="carousel-inner" role="listbox">
			        <div class="carousel-item active">
			            <div class="view">
			                <img class="d-block w-100" src="img/10.jpg" alt="First slide">
			            </div>
			        </div>
			        <div class="carousel-item">
			            <!--Mask color-->
			            <div class="view">
			                <img class="d-block w-100" src="img/7.jpg" alt="Second slide">
			                <div class="mask rgba-black-strong"></div>
			            </div>
			        </div>
			        <div class="carousel-item">
			            <!--Mask color-->
			            <div class="view">
			                <img class="d-block w-100" src="img/4.jpg" alt="Third slide">
			                <div class="mask rgba-black-slight"></div>
			            </div>
			        </div>
			    </div>
			    <!--/.Slides-->
			    <!--Controls-->
			    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			    </a>
			    <!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper-->
                
			<!-- Mask & flexbox options-->
			<div class="mask rgba-orange-light d-flex justify-content-center align-items-center">
				<!-- Content -->
				<div class="container px-md-3 px-sm-0">
					<!--Grid row-->
					<div class="row wow fadeIn">
						<!--Grid column-->
						<div class="col-md-12 mb-4 white-text text-center wow fadeIn">
							<h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5">Visit Management System</h3>
							<hr class="hr-light my-4 w-75">
							<h4 class="subtext-header mt-2 mb-4">With this web application, we are helping GT Bank to organize all visit online. To make visit to our branches, just register and reserve a visit...</h4>
							<a class="btn btn-orange btn-rounded" data-toggle="modal" data-target="#exampleModal">
								Get started Now
							</a>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</div>
				<!-- Content -->
			</div>
			<!-- Mask & flexbox options-->
		</div>
		<!-- Full Page Intro -->
	</header>           
	<!-- main container -->
	<main>		
		<!--About us section-->
		<section class="text-center py-3 container" id="about">
			<!--Section heading-->
			<h2 class="font-weight-bold h1 py-5">
				<strong>What is GT Bank</strong>
			</h2>
			<!--Section description-->
			<h5 class="black-text pb-5 text-center">We are a team driven  to deliver the utmost in customer service.
				We are synonymous with innovation, building excellence and superior financial performance 
				and creating role models for society. <br><br>
				We are a high quality financial services provider 
				with the urge to be the best at all times whilst adding value to all stakeholders.
				</h5>
			<!--Grid row-->
			<hr class="hr-dark">
		</section>
		<!--End About us section-->
		<!-- Modal -->
		<div class="modal fade right" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog modal-full-height modal-right" role="document">
		        <div class="modal-content">
		            <!--Header-->
		            <div class="modal-header deep-orange white-text">
		                <h4 class="title">Visitor registration</h4>
		                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">×</span>
		                </button>
		            </div>
		            <!--Body-->
		            <div class="modal-body">
		            	<form id="register-form" novalidate>
			            	<div class="md-form form-sm">
			                    <i class="fa fa-user prefix"></i>
			                    <input type="text" id="firstName" class="form-control form-control-sm" required>
			                    <label for="firstName">Your first name</label>
			                    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
			                </div>
			                <div class="md-form form-sm">
			                    <i class="fa fa-user prefix"></i>
			                    <input type="text" id="lastName" class="form-control form-control-sm" required>
			                    <label for="lastName">Your last name</label>
			                    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
			                </div>
			                <!-- Material input email -->
			                <div class="md-form form-sm">
			                    <i class="fa fa-envelope prefix"></i>
			                    <input type="email" id="email" class="form-control form-control-sm" required>
			                    <label for="email">Your email</label>
			                    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
			                </div>
							<div class="md-form form-sm">
			                    <i class="fa fa-phone prefix"></i>
			                    <input type="tel" id="phoneNumber" class="form-control form-control-sm" required>
			                    <label for="phoneNumber">Your telephone</label>
			                    <div class="invalid-feedback">
							        this is a required field
						      	</div>
			                </div>
			                <!-- Material input subject -->
			                <div class="md-form form-sm">
			                    <i class="fa fa-lock prefix"></i>
			                    <input type="password" id="password" class="form-control form-control-sm" required>
			                    <label for="password">Your password</label>
			                    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
			                </div>
			                <div class="md-form form-sm">
			                    <i class="fa fa-calendar prefix"></i>
			                    <input type="date" id="dateOfBirth" class="form-control form-control-sm" required>
			                    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
			                </div>
			                <div class="md-form from-sm">
			                	<i class="fa fa-location-arrow prefix"></i>
							    <textarea type="text" id="address" required class="md-textarea form-control form-control-sm" rows="2"></textarea>
							    <label for="address">Your Location address</label>
							    <div class="invalid-feedback">
							        this is a required field.
						      	</div>
							</div></code>
		            	</form>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-primary" id="register">Register</button>
		                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		            </div>
		        </div>
		    </div>
		</div>
	</main>
	<!-- end main container -->
	<!-- footer --> 
	<footer>

	</footer>
	<!-- end footer -->
	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- my app script -->
	<script type="text/javascript" src="js/app.js"></script>
	<!-- sweetAlert library  -->
	<script type="text/javascript" src="js/lib/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$(".scrolling-navbar a[href^='#']").click(function(){
			target = $(this).attr('href');

			if($(target).length >= 1){
				height = $(target).offset().top;
			}else{
				height = $("a[name="+target.substr(1, target.length-1)+"]").offset().top;
			}

			$('html, body').animate({scrollTop:height}, 1200);

			return false;
		})
	});
</script>

