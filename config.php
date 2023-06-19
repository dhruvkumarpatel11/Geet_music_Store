<?php


$conn = mysqli_connect
    //Remote database conncetion
    ("remotemysql.com","lvkta8EZ78","nlirBUGW2q","lvkta8EZ78");
    // Development Coneection
    // "localhost", "root", "", "music_store"



if (!$conn) {
    echo "Connection Failed";
}
?>