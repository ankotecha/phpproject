<?php
$c=$_POST['cid'];
$n1=$_POST['name'];
$n2=$_POST['name2'];
$n3=$_POST['name3'];
$n4=$_POST['name4'];
$n5=$_POST['name5'];
$e=$_POST['event'];
try{
        
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php','harsh','harsh1868@A');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($c || $e)
        {
        $sql1="insert into GroupDatabse(Collegeid,Name1,Name2,Name3,Name4,Name5,EventName) values(?,?,?,?,?,?,?)";
        $query1=$dbhandler->prepare($sql1);
       $query1->execute(array($c,$n1,$n2,$n3,$n4,$n5,$e));
       header("Location:demo2.php");
        }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
