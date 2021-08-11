<?php

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/job-portal/';

$user_logged = false;

?>
<!DOCTYPE html>
<html>

<head>
	<title>JobPortal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo $server; ?>css/style.css">

	

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 350px;
			padding: 20px;
		}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

	</style>
</head>

<body>
	<header class="d-flex w-100">
		<nav class="navbar navbar-expand-lg w-100 bg-light">
			<div class="navbar-collapse collapse justify-content-between">
				<ul class="navbar-nav" id="navbar">
					<li class="nav-item active">
						<a class="nav-link text-dark" href="<?php echo $server; ?>index.php"><h4>JobPortal</h4></a>
					</li>
	

					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$user_logged = true;
						if ($_SESSION['role'] == 'admin') { ?>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/job/view.php">Jobs</a>
							</li>
					<?php }
					} ?>

					

				</ul>

				

				

				
  
</div>
					
				</ul>


					
				

</ul>	
<ul class="navbar-nav nav-item mr-sm-2">
         

					<form action="/job.php" >
 
  
  <div>
  
		
  <select  name="title" id="cars">

  <h5>
  <h5> <option value="2"><h5>Jr. Software Developer </h5></option></h5>
  <h5> <option value="2"><h5>UI Designer</h5></option></h5>
  <h5>  <option value="3"><h5>Data Scientist</option></h5>
  <h5> <option value="4"><h5>Backend Dev</option></h5>
  <h5><option value="4"><h5>Java Developer</option></h5>
				</h5>			
  </select>
  	
 </form>

 </div>		
 </ul>	
				

				<ul class="navbar-nav">

				
					<?php
					if ($user_logged) { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/user/logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Sign Out</a>
						</li>
					<?php } else { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-primary text-white" href="<?php echo $server; ?>components/user/login.php"><span><i class="fa fa-sign-in text-white"></i></span> Sign In</a>
						</li>
					<?php } ?>
				</ul>

				

			</div>
		</nav>
	</header>

	<div class="container-fluid page-container">