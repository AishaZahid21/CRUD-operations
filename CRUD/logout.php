<?php
include ("connection.php");
session_start();
session_unset();
header("Location:main.html");
?>