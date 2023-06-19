<?php
$curdir=getcwd();
$directoryName = 'audio';

if (file_exists($directoryName) && is_dir($directoryName) && $_POST['upload_btn'] && $_POST['upload_btn']=='upload')
{
    $target_Path = "audio/";
    $target_Path = $target_Path.basename( $_FILES['userFile']['name'] );
    if(move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path )){
        echo "uploaded sucessfully";
        saveAudio($target_Path);
        displayAudios();
    }

}
else{
    // echo "Not exists. Creating...";
    mkdir($directoryName, 0755, true);
  }

  function displayAudios(){
      include 'config.php';
      $query="select * from audio";
      $r=mysqli_query($conn,$query);

      while($row=mysqli_fetch_array($r)){
          echo '<a href="play.php?name='.$row['file_path'].'">'.$row['file_path'].'</a>';
          echo"<br/>";
        //   session_destroy();
      }
  }

  function saveAudio($file_path){
      include 'config.php';
      $query="insert into audio(file_path) values ('{$file_path}') ";
      mysqli_query($conn, $query);
      if(mysqli_affected_rows($conn)>0){
          echo"audio file path saved in database";
          echo"<br/>";
      }
  }


?>