<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Award-winning journalist. Coding instructor. Web developer. Feminist.">
    <meta name="keywords" content="Alexandra,Millatmal,developer,engineer,software,Ruby,Rails,JavaScript,journalism,coder,journalist">
    <meta name="author" content="Alexandra Millatmal">
    <link rel='shortcut icon' href='alex.ico' type='image/x-icon'/ >


    <title>Alexandra Millatmal</title>

      <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="css/toolkit-minimal.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
  </head>


<body>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102779384-1', 'auto');
    ga('send', 'pageview');
  </script>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <a class="navbar-brand" href="/">Alexandra Millatmal</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- <li><a href="about.html">About</a></li> -->

          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Portfolio</a>
            <ul class="dropdown-menu">
              <li><a href="code.php">Code</a></li>
              <li><a href="journalism.php">Journalism</a></li>
              <li><a href="talks.php">Talks</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="resume.php">R&eacute;sum&eacute;</a></li>
            </ul>
          </li> -->

          <li class="nav-item
            <?php
              if ($active && $active == "code")
                echo "active";
            ?>
          ">
            <a class="nav-link" href="./code">Code</a>
          </li>
          <li class="nav-item
            <?php
              if ($active && $active == "journalism")
                echo "active";
            ?>
          ">
            <a class="nav-link" href="./journalism">Journalism</a>
          </li>
          <li class="nav-item
            <?php
              if ($active && $active == "talks")
                echo "active";
            ?>
          ">
            <a class="nav-link" href="./talks">Talks</a>
          </li>
          <li class="nav-item
            <?php
              if ($active && $active == "resume")
                echo "active";
            ?>
          ">
            <a class="nav-link" href="./resume">R&eacute;sum&eacute;</a>
          </li>

          <li class="social"><a href="http://www.twitter.com/halfghaninNE" target="_blank"><span class="icon icon-twitter"></span></a></li>
          <li class="social"><a href="http://www.github.com/halfghaninNE" target="_blank"><span class="icon icon-github"></span></a></li>
          <li class="social"><a href="http://www.linkedin.com/in/alexandrajmh" target="_blank"><span class="icon icon-linkedin"></span></a></li>
          <!-- <li><a href="#"><span class="icon icon-paper-plane"></span></a></li> -->

        </ul>
      </div>
    </div> 
    <!-- end of container div -->
  </nav>