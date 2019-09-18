

<?php
if(isset($_POST["pass"]) && strcmp($_POST["pass"],$_POST["repass"])!=0)
         header("Location:Register.php/?passval=enter same password");
if(isset($_POST["cid"]))
{
try{
         $u=$_POST["username"];
          $p=$_POST["pass"];
          $i=$_POST["cid"];
          $e=$_POST["email"];
          $m=$_POST["mobileno"];
          $g=$_POST["gender"];
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
	//echo "Connection is established...<br/>";
      
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//        if($u && $p && $c && $g )
//        {
        $sql1="insert into register(username,password,collegeid,gender,mobileno,email) values(?,?,?,?,?,?)";
        $query1=$dbhandler->prepare($sql1);
       $query1->execute(array($u,md5($p),$i,$g,$m,$e));
       header("Location:Login.php");
//        }
//        else
//        {
//            header("Location:demo2.php");
//            
//        }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

}
?>
//<?php 
//
//
//{
//    #echo "hello";
//    
//    header("Location:Register.php/?passval=enter same password");
//}if(isset($_POST["cid"]))
//{
//  try
//    {
//	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
//	//echo "Connected<br/>";
//	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
//          $u=$_POST["uname"];
//          $p=$_POST["pass"];
//          $i=$_POST["cid"];
//          $e=$_POST["email"];
//          $m=$_POST["mobile"];
//          $g=$_POST["gender"];
//        
//       // if(!query1)
//  
//       $sql1="insert into register(username,password,collegeid,gender,mobileno,email) values(?,?,?,?,?,?)";
//        $query1=$dbhandler->prepare($sql1);
//       $query1->execute(array($u,sha1($p),$i,$g,$m,$e)); 
//    }
//    catch(PDOException $e){
//	echo $e->getMessage();
//	die();
//}
//   header("Location:"); 
//}
// ?>   