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
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark deep-orange fixed-top scrolling-navbar">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav mr-auto smooth-scroll">
							<li class="nav-item">
								<a class="nav-link" href="visitorProfile.php"> Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
						</ul>
						<!-- Social Icon  -->
						<ul class="navbar-nav nav-flex-icons">
							<li class="nav-item">
								<a href="../index.php" class="nav-link">
									<i class="fa fa-sign-out"></i>
									Log-out
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	    </header>
		<!-- the container -->
		<section class="container">
			<div class="row" style="margin-top: 80px;">
			    <div class="col-12 col-sm-6 col-md-9">
			    	<div class="card">
					    <div class="card-header black lighten-1 white-text"><h2>Reserve a Visit</h2></div>
					    <div class="card-body">					        
							<!--Section: New Visit v.2-->
							<section>
							    <div class="row">
							        <!--Grid column-->
							        <div class="col-md-8 col-xl-9">
							            <form method="POST" action="">
							            	<div class="row">
							                    <div class="col-md-12">
							                        <div class="form-group">
							                            <label for="branch-name" class="">Branch to Visit</label>
							                            <input type="text" name="branch-name" class="form-control input-square form-control-lg" required>
							                        </div>
							                    </div>
							                </div>
							                <!--Grid row-->
							                <div class="row">
							                    <!--Grid column-->
							                    <div class="col-md-6">
							                        <div class="form-group">
							                            <label for="visit-date" class="">Date of Visit</label>
							                            <input type="date" name="visit-date" class="form-control input-square form-control-lg" required>
							                        </div>
							                    </div>
							                    <!--Grid column-->
							                    <!--Grid column-->
							                    <div class="col-md-6">
							                        <div class="form-group">
							                            <label for="visit-time" class="">Time of Visit</label>
							                            <input type="time" name="visit-time" class="form-control input-square form-control-lg" required>
							                        </div>
							                    </div>
							                    <!--Grid column-->
							                </div>
							                <!--Grid row-->
							                <!--Grid row-->
							                <div class="row">
							                    <!--Grid column-->
							                    <div class="col-md-12">
							                        <div class="form-group">
							                            <label for="visit-reason">Reason of Visit</label>
							                            <textarea type="text" name="visit-reason" class="form-control input-square form-control-lg" rows="3" required></textarea>
							                            <small id="visit-reasonHelpBlock" class="form-text text-muted">
														  explain in few words, the reason of your visit 
														</small>
							                        </div>
							                    </div>
							                </div>
							                <!--Grid row-->
								            <div class="text-center text-md-left">
								                <button name="submit" class="btn btn-primary btn-block" type="submit">Submit</button>
								            </div>
							            </form>
							        </div>
							        <!--Grid column-->
							        <!--Grid column-->
							        <div class="col-md-4 col-xl-3 text-center">
							            <ul class="list-unstyled">
							                <li>
							                    <i class="fa fa-map-marker fa-2x deep-orange-text"></i>
							                    <p style="font-size: 12px !important;">20, Boulevard de la Revolution, Kigali - Rwanda</p>
							                </li>

							                <li>
							                    <i class="fa fa-phone fa-2x mt-4 deep-orange-text"></i>
							                    <p <p style="font-size: 12px !important;">(+250) 78 071 27 61</p>
							                </li>

							                <li>
							                    <i class="fa fa-envelope fa-2x mt-4 deep-orange-text"></i>
							                    <p style="font-size: 12px !important;">info@gtbank.co.rw</p>
							                </li>
							            </ul>
							        </div>
							        <!--Grid column-->
							    </div>
							</section>
							<!--Section: New Visit v.2-->
					    </div>
					</div>
			    </div>
			    <div class="col-6 col-md-3">
			        <div class="card border-warning mb-3" style="max-width: 18rem;">
					    <div class="card-header">Visitor Profile</div>
					    <div class="card-body text-warning">
					        <ul class="list-group list-group-flush">
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->first_name;?></li>
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->last_name;?>
								</li>
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->email;?>
								</li>
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->phone_number;?>
								</li>
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->date_of_birth;?>
								</li>
								<li class="list-group-item">
									<?php echo $_SESSION['visitorInfo']->address;?>
								</li>
							</ul>
					    </div>
					</div>
			    </div>
			</div>
		</section>
		<!-- end of the container -->
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
	</body>
<?php
	if(isset($_POST['submit'])){

		require_once "../class/Visit.php";

		$idVisitor = $_SESSION['visitorInfo']->id_visitor;
		
		$branchName  = $_POST['branch-name'];
		$visitDate   = $_POST['visit-date'];
		$visitTime   = $_POST['visit-time'];
		$visitReason = $_POST['visit-reason'];

		$visit = new Visit();

		$reg = $visit->createVisit($idVisitor, $branchName, $visitDate, $visitTime, $visitReason);

		if($reg){
			echo "
				<script>
					swal('Success', 'your visit program has been registered successfully', 'success').then(
						function(){
							window.location.href = 'http://localhost/VMS_GTBank/public/visitorProfile.php';
						}
					);
				</script>
				";
		}else{
			echo "
				<script>
					swal('Error', 'An unknwon error has occured, try again later', 'error');
				</script>
			";
		}
	}
?>
</html>