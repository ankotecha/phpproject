<?php
    $c=$_POST['cid'];
    $n=$_POST['name'];
    $e=$_POST['event'];
echo $c.$e;
if($e=="Sherlock Holmes" || $e=="Box Cricket")
       header("Location:groupeventRegistration.php");
   else {
       
   
try{
        
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($c || $n || $e)
        {
        $sql1="insert into individualEventRegistration(StudentName,Collegeid,EventName) values(?,?,?)";
        $query1=$dbhandler->prepare($sql1);
       $query1->execute(array($n,$c,$e));
        header("Location:demo2.php");
       
        }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
   } 
?>