
    <?php 
    include_once'header.php';
    ?>

    
    <div class="register">
        <h2>login form</h2>
        <form action="include/login.inc.php" method="post">
            <input type="text" name="name" placeholder="username/email">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">login</button>
        </form>
        <a href="register.php">register</a>
    </div>

    <?php 
    include_once'footer.php';
    ?>