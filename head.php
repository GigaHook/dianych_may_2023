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

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <ul class="me-auto mb-2 mb-lg-0 w-100" style="background-color: #e3f2fd;">
      <div class="container navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link" href="index.php">Главная</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="news.php">Новости</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="education.php">Образование</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link bg-warning fw-bold" href="head.php">Руководство</a>
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
      </div>
      
    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card">

          <div class="card-header">
            <h3>РУКОВОДСТВО. ПЕДАГОГИЧЕСКИЙ СОСТАВ</h3>
          </div>

          <div class="card-body">
            <div class="fs-5">
              Заведующий ДОУ Гребенюк Ольга Сергеевна <br>
              Старший воспитатель ДОУ Толстунова Оксана Евгеньевна <br>
              Заместитель заведующего (АХЧ) ДОУ Лопунова Елена Станиславовна <br>
            </div>
            Филиалы и представительства отсутствуют <br>
            Контактный телефон: 8-(39161)-3-42-44 <br>      
            Адрес электронной почты: mbdou-34@yandex.ru <br><br>   
            <h5>Воспитатели</h5>
            <ol>
              <li>Ваулова Марина Евгеньевна</li>
              <li>Вяжевич Светлана Александровна</li>
              <li>Доброхотова Ирина Игнатьевна</li>
              <li>Жолудева Юлия Валерьевна</li>
              <li>Ивлева Татьяна николаевна</li>
              <li>Кашина Светлана Юрьевна</li>
              <li>Киреева Татьяна Витальевна</li>
              <li>Курышева Светлана Николевна</li>
              <li>Лопатина Надежда Михайловна</li>
              <li>Мемнова Татьяна Николаевна</li>
              <li>Мкртчян Маргарит Арменовна</li>
              <li>Полишкевич Олеся Владимировна</li>
              <li>Резанова Вера Васильевна</li>
              <li>Романович Елена Ивановна</li>
              <li>Скуратова Анна Владимировна</li>
              <li>Танкович Оксана Александровна</li>
              <li>Темникова Елена Валерьевна</li>
              <li>Умрихина Анастасия Валерьевна</li>
              <li>Чиж Лариса Валерьевна</li>
              <li>Чирцова Анна Игоревна</li>
              <li>Шапортова Ольга Анатольевна</li>
            </ol>     
            <h5>Воспитатель (изодеятельность)</h5>
            Черепкова Наталья Алексеевна <br><br>     
            <h5>Музыкальные руководители</h5>
            Канавцева Ирина Геннадьевна <br>
            Солодких Евгения Ефимовна <br><br>      
            <h5>Инструктор по физической культуре</h5>
            Мясоедова Наталья Сергеевне <br><br>      
            <h5>Педагоги-психологи</h5>
            Концевая Оксана Юрьевна (группы общеразвивающей направленности) <br>
            Васильченко Анастасия Эдуардовна (группы компенсирующей направленности) <br><br>      
            <h5>Учителя-логопеды</h5>
            Надымова Наталья Владимировна <br>
            Дугина Анна Викторовна <br><br>     
            <h5>Учителя-дефектологи</h5>
            Абметкина Ирина Николаевна <br>
            Надымова Наталья Владимировна <br>

          </div>
        </div>
      </div>
    </div>





    <!--<div class="row justify-content-center">
      <div class="col-11">
        <h3>РУКОВОДСТВО. ПЕДАГОГИЧЕСКИЙ СОСТАВ</h3>

        <b>
          Заведующий ДОУ Гребенюк Ольга Сергеевна <br>
          Старший воспитатель ДОУ Толстунова Оксана Евгеньевна <br>
          Заместитель заведующего (АХЧ) ДОУ Лопунова Елена Станиславовна <br>
        </b>


        Филиалы и представительства отсутствуют <br>

        Контактный телефон: 8-(39161)-3-42-44 <br>

        Адрес электронной почты: mbdou-34@yandex.ru <br>

        <h5>Воспитатели</h5>
        <ol>
          <li>Ваулова Марина Евгеньевна</li>
          <li>Вяжевич Светлана Александровна</li>
          <li>Доброхотова Ирина Игнатьевна</li>
          <li>Жолудева Юлия Валерьевна</li>
          <li>Ивлева Татьяна николаевна</li>
          <li>Кашина Светлана Юрьевна</li>
          <li>Киреева Татьяна Витальевна</li>
          <li>Курышева Светлана Николевна</li>
          <li>Лопатина Надежда Михайловна</li>
          <li>Мемнова Татьяна Николаевна</li>
          <li>Мкртчян Маргарит Арменовна</li>
          <li>Полишкевич Олеся Владимировна</li>
          <li>Резанова Вера Васильевна</li>
          <li>Романович Елена Ивановна</li>
          <li>Скуратова Анна Владимировна</li>
          <li>Танкович Оксана Александровна</li>
          <li>Темникова Елена Валерьевна</li>
          <li>Умрихина Анастасия Валерьевна</li>
          <li>Чиж Лариса Валерьевна</li>
          <li>Чирцова Анна Игоревна</li>
          <li>Шапортова Ольга Анатольевна</li>
        </ol>

        <h5>Воспитатель (изодеятельность)</h5>
        Черепкова Наталья Алексеевна <br><br>

        <h5>Музыкальные руководители</h5>
        Канавцева Ирина Геннадьевна <br>
        Солодких Евгения Ефимовна <br><br>

        <h5>Инструктор по физической культуре</h5>
        Мясоедова Наталья Сергеевне <br><br>

        <h5>Педагоги-психологи</h5>
        Концевая Оксана Юрьевна (группы общеразвивающей направленности) <br>
        Васильченко Анастасия Эдуардовна (группы компенсирующей направленности) <br><br>

        <h5>Учителя-логопеды</h5>
        Надымова Наталья Владимировна <br>
        Дугина Анна Викторовна <br><br>

        <h5>Учителя-дефектологи</h5>
        Абметкина Ирина Николаевна <br>
        Надымова Наталья Владимировна <br>
      </div>

    </div>-->
  </main>

  <footer class="d-flex justify-content-space-between w-100 text-center">
    <div class="col-3">
      МБДОУ №34 "Ромашка"© 2023 <br>
      <a href="admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Я администратор</a>
    </div>
    <div class="col-3">
      г. Канск, пер. Индустриальный, 4
    </div>
    <div class="col-3">
      mbdou-34@yandex.ru
    </div>
    <div class="col-3">
      8-(39161)-3-42-44
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>