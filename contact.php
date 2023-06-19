<?php 
    session_start();
    include 'config.php';
   
    $name = mysqli_real_escape_string($conn, $_REQUEST['cname']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['cemail']);
    $message = mysqli_real_escape_string($conn, $_REQUEST['message']);

  
    $query="insert into contact (name, email, message) values ('{$name}', '{$email}', '{$message}')";
    // $result = mysqli_query($conn, $query);
    if(mysqli_query($conn, $query)){
        // echo "Records added successfully.";
        echo '<script>alert("Thank You For Your Responce.")</script>';
        header("Location: welcome.php");
    } else{
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

 
    
?>