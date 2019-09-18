
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Event Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/159539.jpg');">
			<div class="wrap-login100">
                            <form class="login100-form validate-form" action="Eventdatabase.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Event Registeration
					</span>

                                 <div class="wrap-input100 validate-input" data-validate="College Id">
						<input class="input100" type="text" name="name" placeholder="Student Name">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                                    </div>
					
                                    <div class="wrap-input100 validate-input" data-validate="College Id">
						<input class="input100" type="text" name="cid" placeholder="College Id">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                                    </div>
                                        
                                    <div class="wrap-input100 validate-input" >
                                        <select name="event">
                                            <option>PaintBall</option>
                                            <option>Sherlock Holmes</option>
                                            <option>Box Cricket</option>
                                            <option>Adventure</option>
                                            <option>codejam</option>
                                            <option>Roborace</option>  
                                            <option>Huntronics</option>
                                        </select>
                                    </div>
                                    
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register Form
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

</body>
</html>











