<?php 
  // include('AltoRouter.php');

  // $router = new AltoRouter();

  // $router->map( 'GET', '/', function() {
  //   require __DIR__ . 'home.php';
  // });;

  $route = $_SERVER[REQUEST_URI];

  // echo ("<div class='request'>" . $_SERVER[REQUEST_URI] . "</div>");
  // echo ("<div class='route'>" . $route . "</div>");

  if ($route == "/")
    include('home.php');
  if ($route == "/code")
    include('code.php');
  if ($route == "/journalism")
    include('journalism.php');
  if ($route == "/talks")
    include('talks.php');
  if ($route == "/resume")
    include('resume.php');

?>