<?php
$fname=$lname=$mname=$gender=$selectedone=$des=$subject="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$mname=$_POST["middlename"];
$gender=$_POST["gender"];
$selectedone=$_POST["choice"];
$des=$_POST["address"];
$subs=$_POST["sub"];

}
echo $fname."</br>";
echo $lname."</br>";
echo $mname."</br>";
echo $gender."</br>";
echo $selectedone."</br>";
echo $des."</br>";
   foreach($subs as $sub){
           echo $sub."</br>";
}
?>