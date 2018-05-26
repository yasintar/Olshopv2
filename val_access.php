<?php
 session_start();

 include ('config.php');

 if(isset($_POST['submit'])) {
  if(isset($_POST['username'])){
      $user = $_POST['username'];
      $pass = $_POST['passw'];

      $sql = "SELECT * FROM admin where username = '$user' and pass_word = '$pass'";
      $result = mysqli_query($conn, $sql) or die("Error, query failed!");
      
      $rows = $result->fetch_assoc();
      $nama = $rows['username'];
      $passw = $rows['password'];

      if(mysqli_num_rows($result) > 0)  
      {
        $_SESSION['user'] = $nama;
        $_SESSION['pw'] = $passw;

        header("location: indexadmin.php");
          
      }

      else
      {
          echo "<script> 
            alert('Invalid username or password');
            window.location.assign('login.php');
            </script>";       
      }
    }
  }
  else{
     header("location: login.php");
  }
?>