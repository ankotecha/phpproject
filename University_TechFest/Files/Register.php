
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
                            <form class="login100-form validate-form" action="Registerdatabse.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                                    <div class="wrap-input100 validate-input" data-validate="Renter password">
						<input class="input100" type="password" name="repass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                                    <div class="wrap-input100 validate-input" data-validate="College Id">
						<input class="input100" type="text" name="cid" placeholder="College Id">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                                        
                                         <div class="wrap-input100 validate-input" data-validate="Mobileno">
						<input class="input100" type="text" name="mobileno" placeholder="Mobile No">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                                         <div class="wrap-input100 validate-input" data-validate="Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                                    <div  data-validate="gender">
                                        <font style="color: white">
                                        Gender
                                        <br>
                                        <table>
                                            <tr>
                                                <td>
                                           Male         
                                                </td>
                                                <td>
                                           <input class="input100" type="radio" name="gender" value="male">
                                 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Female
                                                </td>
                                                <td>
                                                           <input class="input100" type="radio" name="gender"  value="female">						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                                      
                                                </td>
                                            </tr>
                                                      </table>
                                     
                                        </font>
                                    </div>

                                    
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>











