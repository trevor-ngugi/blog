<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];

    $mailTo="ngugitrevor@mmtuts.net";
    $headers="from: ".$mailFrom;
    $txt="you have received an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mailsend");

}
?>