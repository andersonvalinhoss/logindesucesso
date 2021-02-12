<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carousel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner img{
      width: 100%;
      height: 100%;
    }

  </style>
</head>
<body>

  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://th.bing.com/th/id/OIP.5jfM4kP8vFzFquD1tdOn5AAAAA?w=202&h=202&c=7&o=5&pid=1.7" alt="">
      </div>
      <div class="carousel-item ">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Number_2_in_light_blue_rounded_square.svg/768px-Number_2_in_light_blue_rounded_square.svg.png" alt="">
      </div>
      <div class="carousel-item ">
        <img src="https://th.bing.com/th/id/OIP.bnE7EwJj3OIphLQm_LS29wHaHa?pid=Api&rs=1" alt="">
      </div>
    </div>
    <a href="#demo" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#demo" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

</body>
</html>
