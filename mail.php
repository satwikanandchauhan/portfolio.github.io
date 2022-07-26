<!-- 
 // if (isset($POST['submit_form'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $message = $_POST['message'];
//     $FromName = "Satwik";
//     $FromEmail = "Info@satwik.com";
//     $ReplyTo = $email;
//     $toemail = "s.anandchauhan2@gmail.com";
//     $subject = "Satwik Portfolio Contact form";
//     $message = 'Name: ' . $name . '<br> Email: ' . $email . '<br> Mobile No: ' . $mobile . '<br> Message: ' . $message;

//     $headers = 'MIME-version: 1.0\n';
//     $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
//     $headers .= "From: " . $FromName . "<" . $FromEmail . ">\n";
//     $headers .= "Reply-To: " . $ReplyTo . "\n";
//     $headers .= "X-Sender: <" . $FromEmail . ">\n";
//     $headers .= "X-Mailer: PHP \n";
//     $headers .= "X-Priority: 1\n";
//     $headers .= "Return-Path: <" . $FromEmail . ">\n";

    // mail($toemail, $subject, $message, $headers,'-f', $FromEmail);
//     if (mail($toemail, $subject, $message, $headers, '-f' . $FromEmail)) {
//         $hide = 1;

//         echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>' . $name . ',</strong> Your message has been sent. We will reply soon as possible. </div> ';

//     }
//     else {
//         echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
//     }
// } -->

               
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$message= $_POST['message'];
$to = "s.anandchauhan2@gmail.com";
$subject = "Mail From Portfolio website";
$txt ="Name = ". $name . "\r\n Email = " . $email ." \r\n Mobile = " . $mobile . " \r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo 'Succcessfully sent..';
?>