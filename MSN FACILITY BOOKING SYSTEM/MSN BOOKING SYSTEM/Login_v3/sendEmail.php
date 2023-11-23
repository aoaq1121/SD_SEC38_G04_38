<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit']) && $_POST['email'])
{   

    include "db.php";
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    $row= mysqli_num_rows($result);
    if($row < 1)
    {

       $token = md5($_POST['email']).rand(10,9999);

       mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
        
        $link = "<a href='localhost/sd/MSN%20BOOKING%20SYSTEM/Login_v3/verify.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";

        require('PHPMailer/PHPMailer.php');
        require('PHPMailer/SMTP.php');
        require('PHPMailer/Exception.php');
       

        $mail = new PHPMailer(true);
        try {
          //Server settings
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'angie@graduate.utm.my';                     //SMTP username
          $mail->Password   = 'Angieong1119&$';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      
          //Recipients
          $mail->setFrom('angie@graduate.utm.my', 'MSN');
          $mail->addAddress($_POST['email']);     //Add a recipient
          
      
          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'Email Verification';
          $mail->Body    = "<a href='localhost/sd/MSN%20BOOKING%20SYSTEM/Login_v3/verify.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
      
          $mail->send();
          
          echo "<script>
          alert('Message has been sent');
          </script>
          ";

      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          return false;
      }
    }
    else
    {
      echo "<script>
      alert('You have already registered with us. Check Your email box and verify email.');
      </script>
      ";
    }
}
?>