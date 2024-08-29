<?php

if(isset($_POST['submit_contact'])){
  print_r($_POST);
}



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/src/SMTP.php';


//     if(isset($_POST['submit_contact']))  
//     {
//       $subject = htmlentities($_POST['subject']);
//       $name = htmlentities($_POST['name']);
//       $email = htmlentities($_POST['email']);
//       $message = htmlentities($_POST['message']);
  
//       $mail = new PHPMailer(true);
//       $mail->isSMTP();
//       $mail->Host = 'smtp.gmail.com';
//       $mail->SMTPAuth = true;
//       $mail->Username = 'kadu.sahil.mail@gmail.com';
//       $mail->Password = 'vxeopbktsfpalert';
//       $mail->Port = 465;
//       $mail->SMTPSecure = 'ssl';
//       $mail->isHTML(true);
//       $mail->setFrom($email, $name);
//       $mail->addAddress('kadu.sahil.mail@gmail.com');
//       $mail->Subject = ("$email ($subject)");
//       $mail->Body = $message;
//       $mail->send();
  
//        if(!$mail->send()) {
//             $msg = "Error while sending email";
//             $msgclass = 'bg-danger';
//             header("Location: /");
//             die();    
//        } 
//        else {
//           $msg = 'A mail with recovery instruction has sent to your email.';
//           $msgclass = 'bg-success';
//        }     
//     }
?>

