<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    if($name=='' || $email=='' || $subject=='' || $message){
        echo "<script>alert('All fields are required!')</script>";
    } else
    {
        $from = "Shivam Graphics";
        $webmaster = "graphics.shivamsinghal160@gmail.com";
        $to = "graphics.shivamsinghal@gmail.com";
      
    $subject= "Form Submission From Shivam Graphics";
    $headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Phone : ". $_POST['contact'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('index.php?sent=Your Form Has been Submited','_self')</script>";
}
}
?>
