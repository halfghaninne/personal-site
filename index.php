<?php 
  $route = $_SERVER[REQUEST_URI];

  if ($route == "/")
    include('home.php');
  if ($route == "/talks")
    include('talks.php');
  if (($route) == "/writing")
    include('writing.php');
  if ($route == "/work")
    include('work.php');

?>