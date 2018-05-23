<?php
 session_start();

 include ('config.php');

 if(isset($_POST['submit'])) {
  if(isset($_POST['username'])){
      $user = $_POST['username'];
      $pass = $_POST['idcust'];

      $sql = "SELECT * FROM pembeli where pbl_nama = '$user' and pbl_id = '$pass'";
      $result = mysqli_query($conn, $sql) or die("Error, query failed!");
      $rows = $result->fetch_assoc();
      $nama = $rows['pbl_nama'];
      $passw = $rows['pbl_id'];

      if(mysqli_num_rows($result) > 0)  
      {
        $_SESSION['user'] = $nama;
        $_SESSION['pw'] = $passw;

        header("location: typo.php");
          
      }

      else
      {
          echo "<script> 
            alert('invalid username or password');
            window.location.assign('index.php');
            </script>";  
          // header("location: index.php");      
      }
    }
  }
  else{
     header("location: index.php");
  }
?>