<?php
  session_start();

  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "anansit";
  
  

  $con = mysqli_connect($host,$user,$pass,$dbname);

  if (mysqli_connect_errno()) {
      echo "Connection failed <br>" . mysqli_connect_error();
      exit();
  }
  else 
    {echo "Connected successfully <br>";
  
  }



