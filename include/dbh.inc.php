<?php

$serverName="localhost";
$dBUserName="root";
$dBPassword="elitesoccer11";
$dBName="blog";

$conn =mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);

if(!$conn){
    die("connection failed:". mysqli_connect_error());
}