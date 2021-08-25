<?php 
     include_once'header.php';
    ?>
    <link rel="stylesheet" href="styles/portfolio.css">


<!-- <div id="slider">
    <figure>
    <img src="images/register.png" alt="">
    <img src="images/blog.png" alt="">
    <img src="images/login.png" alt="">
    <img src="images/blog.png" alt="">
    <img src="images/login.png" alt="">

    </figure>
</div> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider</title>
    <link rel="stylesheet" href="styles/portfolio.css">
  </head>
  <div class="body2">

    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="images/hobbie.jpeg" alt="pic1">
        </div>
        <div class="slide">
          <img src="images/profile.jpg" alt="pic 2">
        </div>
        <div class="slide">
          <img src="images/profile2.jpeg" alt="pic 3">
        </div>
        <!-- <div class="slide">
          <img src="images/blog.png" alt="pic 4">
        </div> -->
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

</div>
</html>
      
<!-- <script src="script/portfolio.js"></script> -->

            <?php 
    include_once'footer.php';
    ?>