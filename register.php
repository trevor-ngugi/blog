
    <?php 
    include_once'header.php';
    ?>
    <link rel="stylesheet" href="styles/register.css">
    <div class="bg">
    <img src="images/register.png" alt="pic">
    
    <div class="register">
        
        <h2>register form</h2>
        <!-- <img src="images/register.png" alt="pic"> -->
        <form action="include/signup.inc.php" method="post" >
            <input class="input" type="text" name="name" placeholder="full name"><br><br>
            <input class="input" type="text" name="email" placeholder="email"><br><br>
            <input class="input" type="text" name="uid" placeholder="username"><br><br>
            <input class="input" type="password" name="pwd" placeholder="password"><br><br>
            <input class="input" type="password" name="pwdrepeat" placeholder="repeat password"><br><br>
            <button type="submit" class="btn"name="submit">sign up</button><br>
        </form>
        <?php 
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>fill in all fields</p>";

        }
        else if($_GET["error"]=="invaliduid"){
            echo "<p>choose a proper name</p>";
        }
        else if($_GET["error"]=="invalidemail"){
            echo "<p>choose a proper email</p>";
        }
        else if($_GET["error"]=="passwordsdontmatch"){
            echo "<p>choose a proper name</p>";
        }
        else if($_GET["error"]=="stmtfailed"){
            echo "<p>something went worng try agian</p>";
        }
        else if($_GET["error"]=="usernametaken"){
            echo "<p>choose another name</p>";
        }
        else if($_GET["error"]=="none"){
            echo "<p>you have signed up</p>";
        }
    }
    ?>
    </div>
    </div>

    

    <?php 
    include_once'footer.php';
    ?>