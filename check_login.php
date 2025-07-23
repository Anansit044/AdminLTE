<?php


  $username=$_POST['username'];
  $password=$_POST['password'];
  
  if($username == '' || $password == ''){
    echo "<script>
    alert('Please fill in both username and password.');
    location.href='iogin.php';      
          </script>";
  } else {

  require 'connect.php';


  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
 /* $result = mysqli_query($con,$sql); */      //เขียนแบบเต็ม 
  
  $result = $con->query($sql); //เขียนแบบย่อ arrow fuction
  $num = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if($num==1){
    $_SESSION['username'] = $row['username'];
    $_SESSION['fullname'] = $row['fullname'];

    header("Location:dist/");
  }else{
    echo "<script>
    alert('Login failed. Please check your username and password.');
    location.href='iogin.php';      
          </script>";
  }
}

?>