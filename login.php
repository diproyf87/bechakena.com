<?php
require("db.php");
print_r($GLOBALS);
$email=0;
$pass=0;
if(strlen($_REQUEST["email"])==0){
    echo "name";
}
else{
    $email=1;
}
if(strlen($_REQUEST["password"])==0){
    echo "pass";
}
else{
    $pass=1;
}

session_start();


if($email==1 && $pass==1 ){
$sql="select USER_ID,PASSWORD from user_information where EMAIL='".$_REQUEST['email']."'";
	$a=getfromDB($sql);
    foreach($a as $v){
    if($v["PASSWORD"]==$_REQUEST["password"]){
       	$_SESSION["uid"]=$v["USER_ID"];
	header("location:profile.php"); 
    }
    else{
		
        header("location:login1.php");
    }
    }    
}
/*else{
	echo "rryfrtygtyr";
        header("location:login1.php");
    }*/
    ?>