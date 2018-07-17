<?php
	if(!isset($_SESSION)){
		session_start();
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Visit Management System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="../css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
</head>
<body>
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
		                <img class="d-block w-100" src="../img/1.jpg" alt="First slide">
		            </div>
		        </div>
		        <div class="carousel-item">
		            <!--Mask color-->
		            <div class="view">
		                <img class="d-block w-100" src="../img/15.jpg" alt="Second slide">
		                <div class="mask rgba-black-strong"></div>
		            </div>
		        </div>
		        <div class="carousel-item">
		            <!--Mask color-->
		            <div class="view">
		                <img class="d-block w-100" src="../img/3.jpg" alt="Third slide">
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
		<div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
			<!-- Content -->
			<div class="container px-md-3 px-sm-0">
				<!--Grid row-->
				<div class="row wow fadeIn">
					<!--Grid column-->
					<div class="col-md-6 mb-4 white-text wow fadeIn">
						<!-- Card -->
						<div class="card card-cascade">
							<div class="view card-header text-center deep-orange">
					            <h2 class="h2-responsive">Login Form</h2>
					        </div>
						    <!-- Card body -->
						    <div class="card-body">
						        <!-- Material form register -->
						        <!-- Nav tabs -->
								<ul class="nav nav-tabs nav-justified" role="tablist">
								    <li class="nav-item">
								        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab">
								        <i class="fa fa-user"></i> Visitor</a>
								    </li>
								    <li class="nav-item">
								        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab">
								        <i class="fa fa-users"></i> Administrator</a>
								    </li>
								</ul>
							    <!-- Nav tabs -->
							    <!-- Tab panels -->
								<div class="tab-content">
								    <!--Panel 1-->
								    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
								        <!-- Tab panels -->
								        <form method="POST" action="">
								            <div class="md-form">
								                <i class="fa fa-envelope prefix grey-text"></i>
								                <input type="email" name ="visitorEmail" class="form-control" required>
								                <label for="visitorEmail" class="font-weight-light">Your email</label>
								            </div>
								            <!-- Material input password -->
								            <div class="md-form">
								                <i class="fa fa-lock prefix grey-text"></i>
								                <input type="password" name ="visitorPass" class="form-control" required>
								                <label for="visitorPass" class="font-weight-light">Your password</label>
								            </div>
								            <div class="text-center py-4 mt-3">
								                <button class="btn btn-cyan" name ="login-visitor" type="submit">Visitor Login</button>
								            </div>
								        </form>
								    </div>
								    <!--/.Panel 1-->
								    <!--Panel 2-->
								    <div class="tab-pane fade" id="panel6" role="tabpanel">
								        <form method="POST" action="">
								            <div class="md-form">
								                <i class="fa fa-envelope prefix grey-text"></i>
								                <input type="email" name="adminEmail" class="form-control" required>
								                <label for="adminEmail" class="font-weight-light">Your email</label>
								            </div>
								            <!-- Material input password -->
								            <div class="md-form">
								                <i class="fa fa-lock prefix grey-text"></i>
								                <input type="password" name="adminPass" class="form-control" required>
								                <label for="adminPass" class="font-weight-light">Your password</label>
								            </div>
								            <div class="text-center py-4 mt-3">
								                <button class="btn btn-cyan" name="login-admin" type="submit">Admin Login</button>
								            </div>
								        </form>
								    </div>
								    <!--/.Panel 2-->
								</div>								
						    </div>
						    <!-- Card body -->
						</div>
						<!-- Card -->                      
					</div>
					<!--Grid column-->
				</div>
				<!--Grid row-->
			</div>
			<!-- Content -->
		</div>
		<!-- Mask & flexbox options-->
	</div>
	<!-- JQuery -->
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="../js/mdb.min.js"></script>
	<!-- my app script -->
	<script type="text/javascript" src="../js/app.js"></script>
	<!-- sweetAlert library  -->
	<script type="text/javascript" src="../js/lib/sweetalert/dist/sweetalert.min.js"></script>	
	<?php
		if(isset($_POST['login-visitor'])){

			require_once "../class/Visitor.php";
			require_once "../class/Config.php";

			$email = $_POST['visitorEmail'];
			$password = $_POST['visitorPass'];

			$app = new Visitor();

			$login = $app->checkVisitorLogin($email, $password);

			if($login === false){
				echo "
				<script>
					swal('Oops!', 'No account found for this email', 'error');
				</script>
				";
			}else if($login === WRONG_PASSWORD){
				echo "
				<script>
					swal('Oops!', 'The password is incorrect', 'error');
				</script>
				";
			}else if($login === true){

				$visitorInfo = $app->getVisitorInfoByEmail($email);
				$_SESSION['visitorInfo'] = $visitorInfo;

				echo "
				<script>
					window.location.href = 'http://localhost/VMS_GTBank/public/visitorProfile.php';
				</script>
				"; 
			}
		}else if(isset($_POST['login-admin'])){
			
			require_once "../class/Admin.php";
			require_once "../class/Config.php";

			$email    = $_POST['adminEmail'];
			$password = $_POST['adminPass'];

			$app = new Admin();

			$login = $app->checkAdminLogin($email, $password);

			if($login === false){
				echo "
				<script>
					swal('Oops!', 'No account found for this email', 'error');
				</script>
				";
			}else if($login === WRONG_PASSWORD){
				echo "
				<script>
					swal('Oops!', 'The password is incorrect', 'error');
				</script>
				";
			}else if($login === true){

				$adminInfo = $app->getAdminInfoByEmail($email);
				$_SESSION['adminInfo'] = $adminInfo;

				echo "
				<script>
					window.location.href = 'http://localhost/VMS_GTBank/public/adminProfile.php';
				</script>
				"; 
			}
		}
	?>
</body>
</html>