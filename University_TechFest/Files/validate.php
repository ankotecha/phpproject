<?php
session_start();
if ($_POST['vercode1'] != $_SESSION['vercode'] OR $_SESSION['vercode']=='')  {
      header('Location:Login.php/?invalidlogin=Incorrect Captcha code');
                       

} else {


try{

	if(($_POST['username']) && ($_POST['pass']))
        {
$n=$_POST['username'];
$p=$_POST['pass'];

$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
	//echo "Connection is established...<br/>";
      
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          echo md5($p);
        if(!empty($n) && !empty($p))
	{ 
            $query=$dbhandler->prepare("select* from register where username=? and password=? ");
			$query->execute(array($n,md5($p)));
			$count = $query->rowcount();
                        echo 'Registered user is '.$n;
			if($count == 0)
			{
                            header('Location:Login.php/?invalidlogin=please enter correct username or password');
                        }
                        else
                        {   session_start ();
                            echo 'Session for  user'.$n.'is created';
                            $_SESSION['logged']=true;
                            $_SESSION["uname"]=$n;
                            header('Location:demo2.php');
							
                        }
                        
            
            
        }
        }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
     }
}     	
        
            
?>
