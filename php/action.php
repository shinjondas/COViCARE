<?php
$conn=mysqli_connect("localhost","root","","remdes");
date_default_timezone_set("Asia/Kolkata");
$name=$_POST['name'];
$contact=$_POST['contact'];
//echo $name;
$info=$_POST['updateinfo'];
$datetime = date("Y-m-d H:i:s");
$query="INSERT into postinfo(name,contactinfo,updateinfo,posttime) values('$name','$contact','$info','$datetime')";
$insert=mysqli_query($conn,$query);
if($insert){
    header("Location: http://localhost/COVINFO/php/allinfo.php");
}
else{
    die("ERROR encountered");
}
?>