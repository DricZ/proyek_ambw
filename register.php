<?php
    session_start();
    include ('phps/connect.php');
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register Member - PHP</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 offset-md-4 mt-5">
    				<?php
    				if(isset($_SESSION['error'])) {
    				?>
    				<div class="alert alert-warning" role="alert">
    				  <?php echo $_SESSION['error']?>
    				</div>
    				<?php
    				}
    				?>
    				<?php
    				if(isset($_SESSION['message'])) {
    				?>
    				<div class="alert alert-success" role="alert">
    				  <?php echo $_SESSION['message']?>
    				</div>
    				<?php
    				}
    				?>
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register Form</h1>
    					</div>
    					<div class="card-body">
    						<form action="phps/regist_handler.php" method="post">
    							<div class="form-group">
    								<label for="full_name">Nama Lengkap</label>
    								<input type="text" name="full_name" class="form-control" id="full_name" value="<?php echo @$_SESSION['full_name']?>" aria-describedby="full_name" placeholder="Nama lengkap" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$_SESSION['username']?>" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" value="<?php echo @$_SESSION['password']?>" placeholder="Password">
    							</div>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
    <?php
    session_destroy();
    ?>
    