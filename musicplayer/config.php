<?php

$conn = mysqli_connect("localhost", "root", "", "music_store");

if (!$conn) {
    echo "Connection Failed";
}