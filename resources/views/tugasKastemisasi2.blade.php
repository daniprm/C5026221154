<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
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
      <img src="https://hips.hearstapps.com/hmg-prod/images/2024-bmw-m3-110-1674509061.jpg?crop=0.732xw:0.548xh;0.0833xw,0.305xh&resize=1200:*" alt="BMW" width="1100" height="500">
      <div class="carousel-caption">
        <h3>M3</h3>
        <p> Driving Performance to the Max</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2023-mercedes-amg-gt-63-21c0293-107-source-1649250184.jpg?crop=0.822xw:0.616xh;0.0456xw,0.276xh&resize=1200:*" alt="Mercedez Benz" width="1100" height="500">
      <div class="carousel-caption">
        <h3>AMG 63 GT</h3>
        <p>Unleash Your Inner Beast on Every Road</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2024-audi-rs7-performance-motion-front-2-1669663936.jpg?crop=0.689xw:0.517xh;0.276xw,0.368xh&resize=1200:*" alt="Audi" width="1100" height="500">
      <div class="carousel-caption">
        <h3>RS7</h3>
        <p>Elevate Your Driving Experience</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
