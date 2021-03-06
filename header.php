<!DOCTYPE html>
<html>

<?php
session_start();
?>

<head>
    <title>portfolio</title>
    <meta charset="utf-8">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
    <link rel="stylesheet" href="styles/profile.css">
    <!-- <link rel="stylesheet" href="styles/portfolio.css"> -->
    <!-- <link rel="stylesheet" href="styles/login.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body>
    <!-- navbar -->
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
                    <a class="nav-link" href="portfolio.php">Gallery</a>
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