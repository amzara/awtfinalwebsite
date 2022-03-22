<?php
$conn= new mysqli('localhost', 'root', '', 'myfinal');
if($conn->connect_error){
die("Connected failed:" .$conn->connect_error);
 } 