<?php
    $host = "localhost";
    $username = "webprog";
    $password="123456";
    $dbname = "WEBPROGdb";
	echo"";
    $conn = mysqli_connect($host,$username,$password);
    if($conn){
        $create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
        if(mysqli_query($conn,$create_db)){
            $new_conn = mysqli_connect($host,$username,$password,$dbname);
            $sqls = array("CREATE TABLE `webprogdb`.`sample_table1` ( `id` INT NOT NULL AUTO_INCREMENT ,  `te` TEXT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB","CREATE TABLE `webprogdb`.`sample_table2` ( `id` INT NOT NULL AUTO_INCREMENT ,  `te` TEXT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB","CREATE TABLE `webprogdb`.`sample_table3` ( `id` INT NOT NULL AUTO_INCREMENT ,  `te` TEXT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB");
            for($i = 0;$i<count($sqls);$i++){
                mysqli_query($new_conn,$sqls[$i]);
            }
            mysqli_close($new_conn);
        }
        mysqli_close($conn);
        
    }
    
    
    
    
?>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.6/purify.min.js" integrity="sha512-rXAHWSMciPq2KsOxTvUeYNBb45apbcEXUVSIexVPOBnKfD/xo99uUe5M2OOsC49hGdUrkRLYsATkQQHMzUo/ew==" crossorigin="anonymous"></script>
	<style>
		
	</style>
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/sidebar.css">
	<link rel="stylesheet" href="css/styles.css">
	<script>
		$(document).ready(function() {
			console.log($(document).width());
			$('#register-modal').click(function(e) {
				$("#registerModal").modal("show");
			})
			$('#register-dismiss').click(function(e) {
				$('#registerModal').modal("hide");
			})
			$("#si").css("color","white");
			$('#si').click(function(e){
				
				$('#mySidenav').css('width','200px');
			})
			$('#closeSIDE').click(function(e){
				$('#mySidenav').css('width','0px');
			})
			var i1 = $(".item1");
			var i2 = $(".item2");
			var i3 = $(".item3");
			var i4 = $(".item4");
			i1.click(function(e))
		})
	</script>
	<style>
		#drp{
			color: white;
		}
		#drp:hover{
			background-color: #343a40;	
		}
		#dropdownMenu1{
			color: white;
		}
		iframe{
			border: 0;
		}
		.fas{
			color: white;	
		}
	</style>
</head>

<body>
	<!---Start Of Header-->
	
	
	<nav class="navbar navbar-expand-sm bg-dark sticky-top">
		
	<a href="#"><span class="fas fa-bars"></span></a>
		

		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<div class="dropdown">
  <a class="btn " id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
    The Disaster Resilience Rating For Hotels
  </a>
  <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item item1" id="drp" href="#">About Us</a>
    <a class="dropdown-item item2" id="drp" href="#">Our Parners</a>
    <a class="dropdown-item item3" id="drp" href="#">Contact Us</a>
    <a class="dropdown-item item4" id="drp" href="#">FAQ</a>
  </div>
</div>

			</li>
		</ul>

		<ul class='navbar-nav ml-auto'>
			<li class='nav-item' id='nav-register' style='margin-right: 1em;'>
				<a class="btn" id="register-modal" >Register</a>
			</li>
			<li class='nav-item' id='nav-login'>
				<a class='btn' id='login-modal bt'>
					Login
				</a>
			</li>
		</ul>

	</nav>
	<!--End of Header-->
	<div class="container ">
		<iframe src="" width="900" height="900" ></iframe>
	</div>
	<!---Start of Modals-->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h5 class="modal-title mr-auto ml-auto">Login Form</h5>
					</div>
					<br>
					<form action="login-auth.php" method="post" class="col-12">
						<div class="form-group">
							<label for="username"><span class="fas fa-user"></span> Username: </label>
							<input type="text" class="form-control col rounded" placeholder="Enter Username" id="username" name="user" required>
							<label for="password"><span class="fas fa-lock"></span> Password: </label>
							<input type="password" class="form-control col" placeholder="Enter Password" id="password" name="pass" required>
							<div class="modal-footer">
								<div class="row float-right">
									<div class="col">
										<button type="button" id="login-dismiss" class="btn btn-danger "><span class="fas fa-window-close">Close</span> </button>
										<button type="submit" class="btn btn-primary " id="login submit-login"><span class="fa-sign-in-alt fas"> Login</span></button>
									</div>
								</div>
								<div class="row float-right">
									<div class="col">
										<p>No Account Yet? Register <a href="#" id="x"> HERE</a></p>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h5 class="modal-title mr-auto ml-auto">Registration Form</h5>
					</div>
					<br>
					<form action="register-account.php" method="post" class="col-12">
						<label for="username"><span class="fas fa-user"></span> Username: </label>
						<input type="text" class="form-control col rounded" placeholder="Enter Username" id="username" name="user" required>
						<label for="password"><span class="fas fa-lock"></span> Password: </label>
						<input type="password" class="form-control col" placeholder="Enter Password" id="password" name="pass" required>
						<div class="modal-footer">
							<div class="row float-right">
								<button type="button" id="register-dismiss" class="btn btn-danger "><span class="fas fa-window-close">Close</span> </button>
								<button type="submit" class="btn btn-primary " id="login submit-login"><span class="fa-sign-in-alt fas"> Register</span></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!----End of Modals-->
</body>
</html>