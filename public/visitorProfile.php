<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Visitor - Visit Management System</title>
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
								<a class="nav-link" href="visitorProfile.php">My Visit(s)
									<span class="sr-only">(current)</span>
								</a>
							</li>
						</ul>
						<!-- Social Icon  -->
						<ul class="navbar-nav nav-flex-icons">
							<li class="nav-item">
								<a href="newVisit.php" class="nav-link">New Visit</a>
							</li>
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
			<?php
				require_once "../class/Visitor.php";

				$idVisitor = $_SESSION['visitorInfo']->id_visitor;
				$visit = new Visitor();

				$list = $visit->getVisitByVisitor($idVisitor); 
			?>
			<div class="row" style="margin-top: 80px;">
			    <div class="col-12 col-sm-6 col-md-9">
			        <!--Table-->
					<table class="table table-hover">

					    <!--Table head-->
					    <thead class="mdb-color darken-4">
					        <tr class="text-light">
					            <th>#</th>
					            <th>Visit Code</th>
					            <th>Branch to visit</th>
					            <th>Visit Date</th>
					            <th>Visit Time</th>
								<th>Creation Date</th>
					        </tr>
					    </thead>
					    <!--Table head-->
					    <!--Table body-->
					    <tbody>
					    	<?php foreach ($list as $key => $value): ?>
						        <tr>
						            <th scope="row"><?php echo $value->id_visit; ?></th>
						            <td><?php echo $value->visit_code; ?></td>
						            <td><?php echo $value->branch_name; ?></td>
						            <td><?php echo $value->visit_date; ?></td>
									<td><?php echo $value->visit_time;?></td>
						            <td><?php echo $value->creation_date;?></td>
						        </tr>
					    	<?php endforeach ?>
					    </tbody>
					    <!--Table body-->
					</table>
					<!--Table-->
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
</html>