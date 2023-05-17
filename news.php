<?php

require_once 'db.php';

session_start();

$result = mysqli_query($con, "SELECT * FROM posts");

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  mysqli_query($con, "DELETE FROM posts WHERE id = '$id'");
  echo "<script>alert('Новость удалена')</script>";
  unset($_GET['delete']);
} else {
  $_GET['delete'] = null;
}

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

      <? if(isset($_SESSION['email'])): ?>
        <li class="nav-item">
          <a class="nav-link active" href="achievements.php">Админ-панель</a>
        </li>
      <? endif; ?>

    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">

    <? if(mysqli_num_rows($result) > 0): ?>
      <? while($row = mysqli_fetch_assoc($result)): ?>
        <? if($_GET['delete'] != $row['id']): ?>
          <div class="col-8 mb-4">
            <div class=" card">
              <div class="card-header fs-3">
              <?= $row['title'] ?>
              </div>
              <div class="card-body">
                <img src="<?= $row['image'] ?>" class="w-100 mb-1">
                <?= $row['text'] ?>
              </div>
              <div class="card-footer fs-5">
                <?= $row['date'] ?>
                <? if (isset($_SESSION['email'])): ?>
                  <form method="GET">
                    <button type="submit" name="delete" value="<?= $row['id'] ?>" class="btn btn-warning my-2">Удалить</button>
                  </form>
                <? endif;?>
              </div>
            </div>
          </div>
        <? endif; ?>
      <? endwhile; ?>
    <? endif; ?>

    </div>

    <div class="col-2 mb-3">
      <a href="admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я администратор</a>
    </div>
    <div class="col-10"></div>

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

INSERT INTO users (email, password) VALUES ('asd@asd.asd', 'asdasdasd');
INSERT INTO posts (title, text, image, date) VALUES 
('Квест-игра «Зарница» в группе № 8 (2023г.)', 'В преддверии празднования Дня Победы, в целях патриотического воспитания дошкольников, воспитания любви к своей Родине и уважения к ветеранам Великой Отечественной войны в группе № 8 «Самоцветики» (воспитатели: Т.В.Киреева, И.И.Доброхотова) была проведена квест-игра «Зарница». На территории детского сада были организованы пункты для прохождения испытаний. На построении группа была распределена на три отряда. Старшими отрядов выступили родители. Каждому отряду был выдан маршрутный лист прохождения испытаний. Все отряды действовали четко, слажено, проходя маршруты. Настроение у всех было отличное. На построении, после прохождения всех маршрутов, дети, вместе с родителями и воспитателями спели песню «Катюша». После игры, дети, вместе со взрослыми прошли к мемориалу «Землянка» и возложили цветы. Почтили память воинов, павших в сражениях, минутой молчания.', 'assets/uploads/1684345315text1.jpg', '05/17/2023'),
('Последняя встреча участников Фестиваля детского рисунка (2023г.)', '27 апреля 2023 года состоялась последняя встреча участников Фестиваля детского рисунка, которую посетили воспитанники детских садов № 27, 39 и 34. Фестиваль – это праздник талантов, в котором не может быть проигравших и победителей, нужно лишь найти интересную идею и развернуть её. Идеей для этой встречи послужила техника «Скрапбукинг» – способность творить прекрасное из простых, обыденных вещей. Основными материалами, которые использовали дошкольники стали салфетки, пластилин и, конечно же, краски. Педагог Черепкова Наталья Алексеевна познакомила ребят с методом «оживления» цветов и предоставила каждому ребенку возможность активно, самостоятельно проявить себя и испытать радость созидания.', 'assets/uploads/1684345344test2.jpg', '05/17/2023'),
('Экскурсия в библиотеке им.Бориса Костюковского (2023г.)', 'Недалеко от нашего детского сада находится городская библиотека имени Б. Костюковского. Дружба библиотеки и нашего дошкольного учреждения продолжается уже много лет. В неделю книги ребята из группы «Семицветик» (воспитатели Доброхотова И.И., Киреева Т.В.) отправились в гости в библиотеку. Работники библиотеки радушно встретили ребят и предложили совершить увлекательное путешествие в мир мультфильмов. Детям показали, как можно создавать мультфильмы, провели с ними увлекательную интерактивную викторину, в ходе которой ребята вспомнили своих любимых персонажей, угадали, какому герою принадлежит тот или иной предмет, кем сказана «крылатая фраза». Ребята доказали, что они знают и любят мультфильмы. Экскурсия произвела на дошколят огромное впечатление. Уходить из библиотеки детям не хотелось, всем очень понравилось посещение библиотеки!', 'assets/uploads/1684345344test2.jpg', '05/17/2023');

-->