<?php

require_once 'db.php'



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Детский сад №34</title>
</head>
<body class="position-relative">
  
  <div class="top w-100"></div>
  <div class="bot w-100"></div>

  <header class="container">
    <div class="row justify-space-between">

      <div class="col-10">
        <h1>Детский сад</h1>
        <h2>номер 34</h2>
      </div>

      <div class="col-2">
        <h2>г.Канск</h2>
        <b class="normal-font">8 (39161) 3-42-44</b>
      </div>
      
    </div>
  </header>

  <nav class="navbar navbar-expand-lg bg-body-tertiary container">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
        <a class="nav-link" href="index.php">Главная</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="news.php">Новости</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="education.php">Образование</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="head.php">Руководство</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="provision.php">Обеспечение</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="service.php">Платные услуги</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="admission.php">Условия поступления</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="achievements.php">Наши достижения</a>
      </li>

      <!--<li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          Основные сведенеия
        </a>  

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="about.php">Действие</a></li>
        </ul>

      </li>-->

    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">

      <div class="col-8 mb-4">
        <div class=" card">
          <div class="card-header fs-3">
            TITLE
          </div>
          <div class="card-body">
            <img src="assets/resources/post1.jpg" class="w-100 mb-1">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae sapiente voluptates consequuntur distinctio fugit dicta ipsam, architecto earum voluptate soluta ab itaque est minima nostrum quisquam. Quaerat amet eum adipisci.
          </div>
          <div class="card-footer fs-5">DATE</div>
        </div>
      </div>
      
      <div class="col-8 mb-4">
        <div class=" card">
          <div class="card-header fs-3">
            TITLE
          </div>
          <div class="card-body">
            <img src="assets/resources/post1.jpg" class="w-100 mb-1">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae sapiente voluptates consequuntur distinctio fugit dicta ipsam, architecto earum voluptate soluta ab itaque est minima nostrum quisquam. Quaerat amet eum adipisci.
          </div>
          <div class="card-footer fs-5">DATE</div>
        </div>
      </div>

      <div class="col-8 mb-4">
        <div class=" card">
          <div class="card-header fs-3">
            TITLE
          </div>
          <div class="card-body">
            <img src="assets/resources/post1.jpg" class="w-100 mb-1">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae sapiente voluptates consequuntur distinctio fugit dicta ipsam, architecto earum voluptate soluta ab itaque est minima nostrum quisquam. Quaerat amet eum adipisci.
          </div>
          <div class="card-footer fs-5">DATE</div>
        </div>
      </div>

    </div>
  </main>

  <footer class="d-flex justify-space-between text-center text-secondary w-100">
    <div class="w-25">
      МБДОУ №34 "Ромашка"© 2023
    </div>
    <div class="w-25">
      г. Канск, пер. Индустриальный, 4
    </div>
    <div class="w-25">
      mbdou-34@yandex.ru
    </div>
    <div class="w-25">
      8-(39161)-3-42-44
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<!--

это база

CREATE DATABASE sadik;

USE sadik;

CREATE TABLE users (
id INT(11) NOT NULL AUTO_INCREMENT,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE posts (
id INT(11) NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
text TEXT NOT NULL,
image VARCHAR(255),
date VARCHAR(255),
PRIMARY KEY (id)
);

INSERT INTO users (email, password) VALUES ('asd@zxc.qwe', 'asdzxcqwe');

-->