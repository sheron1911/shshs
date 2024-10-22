<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?><!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人網站</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

  	<div class="row">
  		<div class="col-md-12">

      <?php include('menu.php'); ?>
      <div class="jumbotron">
      <p>
      <?php include("get-index-meta-data.php"); ?>

      <hr />

      <?php include('get-cpu-load.php'); ?>
			</p>
      <p>
      </p>
    </div>
    </div>
    </div>
    </div>
    <section id="about">
        <h2>個人簡介</h2>
        <p>資工三甲11111143許立倫</p>
    </section>

    <section id="contact">
        <h2>聯絡方式</h2>
        <p>Email: a0960970426@gmail.com</p>
        <p>電話: 0960970426</p>
    </section>

    <section id="portfolio">
        <h2>展示作品</h2>
        <h3>影像</h3>
        <img src="1111111.jpg"width="300">

        <h3>影片</h3>
        <video controls width="300">
            <source src="123.mp4" type="video/mp4">
        </video>

        <h3>聲音</h3>
        <audio controls>
            <source src="12.mp3" type="audio/mpeg">
        </audio>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

  </body>
</html>
