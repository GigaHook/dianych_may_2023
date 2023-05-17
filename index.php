<?php session_start(); ?>
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
        <a class="nav-link active" href="index.php">Главная</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="news.php">Новости</a>
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
          <a class="nav-link" href="admin.php">Админ панель</a>
        </li>
      <? endif; ?>

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
    <div class="row">

      <div class="col-6 fs-4">
        <h3>Мы рады приветствовать Вас на нашем сайте!</h3>
        Муниципальное бюджетное дошкольное образовательное учреждение «Детский сад №34 «Ромашка» общеразвивающего вида с приоритетным осуществлением деятельности по художественно-эстетическому развитию детей» 
      </div>

      <div class="col-6 row justify-content-center py-2">
        <img src="assets/resources/index1.jpg" class="col-9">
      </div>

      Муниципальное бюджетное дошкольное образовательное учреждение «Детский сад №34 «Ромашка» общеразвивающего вида с приоритетным осуществлением деятельности по художественно-эстетическому развитию детей» (сокращенно: МБДОУ № 34). <br>
      Детский сад функционирует с 1964 года, построен по типовому проекту. <br>
      Учредитель – Администрация города Канска Красноярского края. <br>
      Филиалы и представительства отсутствуют. <br>
      Местонахождение МБДОУ: 663606, г. Канск, пер. Индустриальный, 4. <br>
      Время работы групп общеразвивающей направленности: с 7.00 до 19.00, выходные: суббота, воскресенье и праздничные дни. <br> 
      Время работы групп компенсирующей направленности (логопедических групп): с 7.15 до 18.45, выходные: суббота, воскресенье и праздничные дни. <br>
      <a href="https://dou34.kansk24.ru/images/OSNOVNIE/GrafikRabotiSotrudnikov20222023.pdf">Годовой календарный график работы сотрудников ДОУ 2022-2023 уч.год</a><br>
      <a href="https://dou34.kansk24.ru/images/OSNOVNIE/prillicenziaVIPISKA.pdf">Места осуществления образовательной деятельности</a> (лицензия, приложение к ней, выписка из реестра лицензий)<br><br>
      Контактный телефон: 8-(39161)-3-42-44 <br>
      Адрес электронной почты: mbdou-34@yandex.ru <br>
      Руководитель МБДОУ – Гребенюк Ольга Сергеевна <br>
      Старший воспитатель – Толстунова Оксана Евгеньевна <br>
      Заместитель заведующего (АХЧ) – Лопунова Елена Станиславовна <br><br>
      В ДОУ функционирует 11 групп (возраст воспитанников от 1,6 до 7 лет). <br>
      Списочный состав воспитанников на 01.04.2023г. - 228 детей <br><br>
      График личного приема граждан:
      <ul>
        <li>Гребенюк Ольга Сергеевна, заведующий МБДОУ – с 15.45 до 16.45 каждый понедельник месяца;</li>
        <li>Лопунова Елена Станиславовна, заместитель заведующего (АХЧ) – с 15.45 до 16.45 каждый вторник месяца;</li>
        <li>Толстунова Оксана Евгеньевна, старший воспитатель – с 15.45 до 16.45 каждая среда месяца;</li>
        <li>Концевая Оксана Юрьевна, педагог-психолог – с 15.45 до 17.30 каждый вторник и среда месяца.</li>
      </ul>

      <div class="col-2 mb-3">
        <a href="admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я администратор</a>
      </div>
      <div class="col-10"></div>

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