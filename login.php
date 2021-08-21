
    <?php 
    include_once'header.php';
    ?>

    
    <div class="register">
        <h2>login form</h2>
        <form action="include/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="username/email">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">login</button>
        </form>
        <a href="register.php">register</a>
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
        else if($_GET["error"]=="wronglogin"){
            echo "<p>incoreect login </p>";
        }
    }
    ?>
    </div>

    <?php 
    include_once'footer.php';
    ?>