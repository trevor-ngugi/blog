<?php
include_once 'header.php';
include_once 'include/dbh.inc.php';
$sql = "SELECT *FROM post;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
?>
<h1>anoxer</h2>
<?php
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <div class='card' style='width: 18rem;'>
                <img src='images/blog.png' class='card-img-top' alt='blog pic'>
                    <div class='card-body'>
                        <h5 class='card-title>title</h5>
                        <p class='card-text'>" . $row["post_content"] . "</p>
                        
                    </div>
                    <div class='card-body'>
                      <a href='#' class='card-link'>like</a>
                      <a href='#' class='card-link'>comment</a>
                    </div>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>category:Cras justo odio</li>
                      <li class='list-group-item'>people comments</li>
                      <li class='list-group-item'>people comments</li>
                    </ul>
            </div><br><br>";
    }
}
?>













<?php
// $sql="SELECT *FROM post;";
// $result=mysqli_query($conn,$sql);
// $resultCheck=mysqli_num_rows($result);

// if($resultCheck>0){
//     while($row=mysqli_fetch_assoc($result)){
//         echo $row["post_content"] . "<br>";
//     }
// }

?>





<?php
include_once 'footer.php';
?>