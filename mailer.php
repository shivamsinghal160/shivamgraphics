<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $to='graphics.shivamsinghal@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Subject: ".$subject."\n". "Message: "."\n\n".$message;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h4> Sent Successfully! Thank you"." ".$name.", We will Contact you Shortly!</h1>";
    }
    else{
        echo "Something Went Wrong!";
    }
}
?>