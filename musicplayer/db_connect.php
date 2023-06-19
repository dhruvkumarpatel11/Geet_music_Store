<?php
$host = "remotemysql.com";
$username = "lvkta8EZ78";
$pw = "nlirBUGW2q";
$db = "lvkta8EZ78";

$conn = @new mysqli($host, $username, $pw, $db);
if(!$conn){
    die("Database Connection Failed. Error: ".$conn->error);
}
