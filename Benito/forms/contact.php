<?php
  if(isset($_GET['action'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webdev";
  
    $conn = new mysqli( $servername, $username, $password, $database );
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];
  
    $sql = "INSERT into personal (nama,email,sub,msg)values ('$nama','$email','$sub','$msg');";
    if(mysqli_query($conn,$sql)){
        echo "<script type='text/javascript'>";
        echo "alert('Thank you for messaging!');";
        echo "window.location.href='../contact.html';";
        echo "</script>";
    }
    else{
    echo "Error: ".$sql ."<br>".$conn->error;
    }
    $conn->close();
  }

?>