<meta charset= "utf8">
<?php
//ob_start();
session_start();
?>
<?php
$sId1 = "chair";
$sPwd1 = "123";
$sId2 = "reviewer";
$sPwd2 = "234";
$sId3 = "author";
$sPwd3 = "345";

$uId=$_GET["uId"];
//echo"你的帳號:".$uId."<br/>";
$uPwd=$_GET["uPwd"];
//echo"你的密碼:".$uPwd."<br/>";

$role=$_GET["role"];

if($role == "c" && $uId == $sId1 && $uPwd == $sPwd1)
{
    $_SESSION["check"] = "Yes";
    header("Location:chair.php");
    setcookie("login", "uid", time()+60*60*24*7);
}else if($role == "r" && $uId == $sId2 && $uPwd == $sPwd2)
{
    $_SESSION["check"] = "Yes";
    header("Location:reviewer.php");
    setcookie("login", "uid", time()+60*60*24*7);
}else if($role == "a" && $uId == $sId3 && $uPwd == $sPwd3)
{
    $_SESSION["check"] = "Yes";
    header("Location:author.php");
    setcookie("login", "uid", time()+60*60*24*7);
}else{
    $_SESSION["check"] = "No";
    header("Location:fail.php");
}
//ob_flush();//緩衝區
?>
