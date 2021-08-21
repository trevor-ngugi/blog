
    <?php 
    include_once'header.php';
    ?>

    
    <div class="register">
        <h2>register form</h2>
        <form action="include/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="full name"><br><br>
            <input type="text" name="email" placeholder="email"><br><br>
            <input type="text" name="uid" placeholder="username"><br><br>
            <input type="password" name="pwd" placeholder="password"><br><br>
            <input type="password" name="pwdrepeat" placeholder="repeat password"><br><br>
            <button type="submit" name="submit">sign up</button><br>
        </form>
    </div>

    <?php 
    include_once'footer.php';
    ?>