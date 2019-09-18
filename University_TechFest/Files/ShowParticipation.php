
<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
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
     
                 	<div class="container-login100" style="background-image: url(\'image/game.jpg\');">
			<div class="wrap-login100">
                            <form class="login100-form validate-form"action="validate.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>';

                                         try{
        echo 'You participated in following event';
         session_start ();
       if(isset($_SESSION['logged']))
        {
            $name=$_SESSION["uname"];
        
                         
						
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql2="Select * from individualEventRegistration where StudentName='$name'";
        $query2=$dbhandler->query($sql2);
       // $query2->execute(array($name));
        $sql1="Select * from GroupDatabse where Name1='$name'  or  Name2='$name' or  Name3='$name' or  Name4='$name' or Name5='$name'";
        $query1=$dbhandler->query($sql1);
        //$query1->execute(array($name,$name,$name,$name,$name));
        $r=$dbhandler->query($sql1);//nnquery(query1);
        echo '<br>';
        echo '<br>';
       
        echo 'Group Event is ';
        while($a=$r->fetch())
        {   
           
            echo '<br>';
            echo $a['EventName'];
        }
        echo '<br>';
        echo 'Individual Event is ';
        $r=$dbhandler->query($sql2);//nnquery(query1);
        
        while($a=$r->fetch())
        {
            echo '<br>';
            echo $a['EventName'];
        }
        
        }
            
            
        }

catch(PDOException $e){
	echo $e->getMessage();
	die();
}
   
                                            
     echo'</form>
			</div>
		</div>
	</div>
	


</body>
</html>';

?>
