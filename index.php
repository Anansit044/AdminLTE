<?php
require 'connect.php';

if(empty($_SESSION['username'])) {
    header("Location:iogin.php");
}