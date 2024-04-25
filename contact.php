<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['phone'];
// $select= $_POST['course'];
// $txt= $_POST['subject1'];
$message= $_POST['address'];
// $date= $_POST['DOB'];
// $gender= $_POST['radio'];


// $to = "info@atharvafashionschool.com";
$to = "tushartambde00@gmail.com";

$subject = "New Email Inbox";

$txt ="Name : ". $name . "\r\n Email : " . $email . "\r\n Contact :".$number . "\r\n Last Qualification :".$txt . "\r\n Selected Course :".$select . "\r\n Address :".$message ;
$headers = "From: atharvafashionschool.com" . "\r\n" .
"CC: tushartambde00@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
?>