<?php
include_once 'header.php';
?>
<h2>create blog form</h2>
<form action="/action_page.php">
  <label for="fname">picture:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">title:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="fname">content:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">author:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form>


<?php
include_once 'footer.php';
?>