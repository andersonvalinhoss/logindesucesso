<?php
//entry php
session_start();
if (!isset($_SESSION["username"]))
{
  header("location:principal.php?action=login");
}
?>
<!DOCTYPE html>
<html>


    <head>
      <style type="text/css">
      body, div, iframe {margin:0; padding:0; height:100%}
      iframe {display:block; width:100%; border:none; position:absolute;}
      </style>
          <title>login</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>
    <br /><br />
    <div class="container" style="width:500px;">
      <h3 align="center">Login e registro</h3>
      <br />
    <?php
    //echo '<h1>Bem vindo -'.$_SESSION["username"].'</h1>';

    echo '<a href="sucuri/index.html">Link1</a>';
    echo '<label><a href="logout.php">Logout</a></label>';

     ?>
    </div>
     <iframe src="clone.html" title="W3Schools Free Online Web Tutorials"></iframe>
  </body>
</html>
