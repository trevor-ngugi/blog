<?php

// if($_POST["message"]) {
//     $name = $_POST["name"];
//     $visitorEmail = $_POST["email"];
//     $message = $_POST["message"];
//     $OUR_MAIL = 'ngugitrevor@gmail.com';
    
// $errors = "";
// //NORMAL OPERATION - NO ERRORS        
//     if(empty($errors)){
//         $EMAIL_SUBJECT = "New Form Contact From " . $name . " @ Your Portfolio Website!";
//         $emailBody = "User name: " . $name . "rn".
//                      "User email: " . $visitorEmail . "rn".
//                      "User message: " . $message . "rn";
 
//         $TARGET_EMAIL = "ngugitrevor@gmail.com";
// //HEADERS
//         $headers = "From: " . $OUR_MAIL . "rn";
//         $headers .= "Reply-To: " . $visitorEmail . "rn";
// }}
// mail($TARGET_EMAIL, $EMAIL_SUBJECT, $emailBody, $headers);

// $success = mail($TARGET_EMAIL, $EMAIL_SUBJECT, $emailBody, $headers);
// //SUCCESS OR FAIL FOR CORRECT TEXT
// if ($success){
//         ?>
       <script language="javascript" type="text/javascript">
//       //REDIRECT TO THE MAIN PAGE or alternatively to 'thank you page'
//  alert('Thank you for the message. I will be in contact with you shortly.');
//        window.location.href = './index.php';
//       </script>
       <?php
// } else{
//       //mail failed for some reason
//       ?>
        <script language="javascript" type="text/javascript">
//         alert('Message failed. Please, contact me by an alternative way.');
//         window.location.href = './index.php';
//       </script>
       <?php
// }
?>


<!DOCTYPE html>
<html>

<head>
    <title>contact us</title>
    <meta charset="utf-8">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>
<body>
    <h2>contact us<h2>
    <form class="" accept-charset="utf-8" action="form.php" method="POST" enctype="multipart/form-data">
        Enter Name:	<input type="text" name="name"><br>
        Enter Email Address:	<input type="text" name="email"><br>
        Subject:	<input type="text" name="subject"><br>
        Enter Message:	<textarea name="message"></textarea><br>
        <input type="submit" name="submit" >
</form>


   
    <!-- <?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";
?> -->



</body>
<!-- <script>
// console.info('virtual email sent from sendmail.php.');
// //REDIRECT TO THE MAIN PAGE
// window.location.href = './index.php';
</script> -->
<script src="script.js"></script>
</html>
