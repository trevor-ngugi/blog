
    <?php 
    include_once'header.php';
    ?>

    
    <div class="register">
        <h2>register form</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="full name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwdrepeat" placeholder="repeat password">
            <button type="submit" name="submit">sign up</button>
        </form>
    </div>

    <?php 
    include_once'footer.php';
    ?>