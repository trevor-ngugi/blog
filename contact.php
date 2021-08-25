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
    <link rel="stylesheet" href="styles/contact.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">TNG </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php
                if(isset($_SESSION["userssuid"])){
                    // function for all
                    echo "<li class='nav-item'><a class='nav-link' href='home.php'>blog</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='profile.php'>profile</a></li>";
                    // function for author
                    echo "<li class='nav-item'><a class='nav-link' href='createblog.php'>create blog</a></li>";
                    //function for admin    
                    echo "
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            Admin
                         </a>
                        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item' href='#'>Add user</a>
                        <a class='dropdown-item' href='#'>Add category</a>
                        <a class='dropdown-item' href='#'>Delete post</a>
                        
                    </li>
                    ";
                    echo "<li class='nav-item'><a class='nav-link' href='include/logout.inc.php'>logout</a></li>";
                }
                else{
                    echo "<li class='nav-item'><a class='nav-link' href='login.php'>login</a></li>";
                }
                ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">Blog</a>
                </li> -->
                

            </ul>
        </div>
    </nav>


<div class="body2">

    

<div class="box">

            <img src="images/draw.png" alt="pic">
            <h2>contact details</h2>
            <a href="https://github.com/trevor-ngugi">github</a>
            <a href="https://www.linkedin.com/in/trevor-ngugi-390aa8168/">linkedin</a>
            <!-- <p>
                put links to github and linkedin
            </p> -->
            <div class="form-control" accept-charset="utf-8" action="form.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" class="input" placeholder="enter your name">
                <input type="email"name="email"  class="input" placeholder="enter your email">
                <input type="text" name="subject" class="input" placeholder="enter subject">
                <input type="text" name="message" class="input" placeholder="enter message">
                <button class="btn">submit</button>
            </div>
        </div>


   
    <!-- <?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";
?> -->



</div>
</body>
<!-- <script>
// console.info('virtual email sent from sendmail.php.');
// //REDIRECT TO THE MAIN PAGE
// window.location.href = './index.php';
</script> -->
<script src="script.js"></script>
</html>
