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
          <a class="nav-link" href="head.php">Руководство</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link bg-warning fw-bold" href="provision.php">Обеспечение</a>
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
            <h3>Материально-техническое обеспечение ДОУ</h3>
          </div>

          <div class="card-body container">
            Созданные в дошкольном образовательном учреждении материально-технические и медико-социальные условия пребывания детей соответствуют их возрастным особенностям и реализуемой Образовательной программе. <br>   
            В детском саду имеются музыкальный и физкультурный залы, изостудия, мини-музей национального быта, картинная галерея, кабинеты психолога, учителя-логопеда, методический, медицинский.<br>    
            Кабинеты заведующего, заместителя заведующего по АХЧ, старших воспитателей, учителей-логопедов, педагога-психолога оснащены оргтехникой: компьютеры, принтеры, МФУ.<br>   
            В ДОУ имеются 2 мультимедийных проектора и экрана, интерактивная приставка.<br>
            <div class="row justify-content-center">
              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision1.jpg" class="w-100">
                Мини-музей "Русская изба"
              </div>

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision2.jfif" class="w-100">
                Правила безопасности
              </div> 

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision3.jfif" class="w-100">
                Музыкальный зал
              </div>

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision4.jfif" class="w-100">
                Методический кабинет
              </div> 

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision5.jfif" class="w-100">
                Кабинет педагога-психолога
              </div> 

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision6.jfif" class="w-100">
                Кабинет учителя-логопеда
              </div> 

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision7.jfif" class="w-100">
                Кабинет учителя-дефектолога
              </div>  

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision8.jfif" class="w-100">
                Спортивный зал
              </div>    

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision9.jfif" class="w-100">
                Изостудия
              </div>   

              <div class="col-5 text-center m-3 mb-5">
                <img src="assets/resources/provision10.jfif" class="w-100">
                Медицинский кабинет
              </div>

              <h4 class="col-11">На спортивной площадки имеется оборудование для лазания, метания в цель, прыжков, бега и т.д.</h4>
              <h4 class="col-11">Прогулочные участки оснащены малыми архитектурными формами.</h4>    

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision11.jfif" class="w-100">
              </div>    

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision12.jfif" class="w-100">
              </div>   
                 
              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision13.jfif" class="w-100">
              </div>   

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision14.jfif" class="w-100">
              </div>   

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision15.jfif" class="w-100">
                В приемных комнатах всех групп установлены шкафы для сушки верхней одежды
              </div>    

              <h4 class="col-7">Пищеблок в ДОУ оснащен современным оборудованием</h4>  

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision16.jfif" class="w-100">
              </div>  

              <div class="col-5 text-center m-3">
                <img src="assets/resources/provision17.jfif" class="w-100">
              </div>

            </div>
          </div>

          <div class="card-footer">
            Материально-техническое обеспечение ДОУ выстроено в соответствии со следующими принципами:
            <ul>        
              <li>информативности, предусматривающего разнообразие тематики материалов и оборудования и активности воспитанников во взаимодействии с предметным окружением;</li>
              <li>вариативности, определяющейся видом дошкольного образовательного учреждения, содержанием воспитания, культурными и художественными традициями, климатогеографическими особенностями;</li>
              <li>полифункциональности, предусматривающего обеспечение всех составляющих воспитательно-образовательного процесса и возможность разнообразного использования различных составляющих предметно-развивающей среды;</li>
              <li>педагогической целесообразности, позволяющей предусмотреть необходимость и достаточность наполнения предметно-развивающей среды, а также обеспечить возможность самовыражения воспитанников, индивидуальную комфортность и эмоциональное благополучие каждого ребенка;</li>
              <li>трансформируемости, обеспечивающего возможность изменений предметно-развивающей среды, позволяющих, по ситуации, вынести на первый план ту или иную функцию пространства.</li>
            </ul>
          </div>
    <!--<div class="row justify-content-center">
      <div class="col-11 container">

        <h3>Материально-техническое обеспечение ДОУ</h3>

        Созданные в дошкольном образовательном учреждении материально-технические и медико-социальные условия пребывания детей соответствуют их возрастным особенностям и реализуемой Образовательной программе. <br>

В детском саду имеются музыкальный и физкультурный залы, изостудия, мини-музей национального быта, картинная галерея, кабинеты психолога, учителя-логопеда, методический, медицинский.<br>

          Кабинеты заведующего, заместителя заведующего по АХЧ, старших воспитателей, учителей-логопедов, педагога-психолога оснащены оргтехникой: компьютеры, принтеры, МФУ.<br>

          В ДОУ имеются 2 мультимедийных проектора и экрана, интерактивная приставка.<br>

        <div class="row justify-content-center">

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision1.jpg" class="w-100">
            Мини-музей "Русская изба"
          </div>
          
          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision2.jfif" class="w-100">
            Правила безопасности
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision3.jfif" class="w-100">
            Музыкальный зал
          </div>
          
          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision4.jfif" class="w-100">
            Методический кабинет
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision5.jfif" class="w-100">
            Кабинет педагога-психолога
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision6.jfif" class="w-100">
            Кабинет учителя-логопеда
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision7.jfif" class="w-100">
            Кабинет учителя-дефектолога
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision8.jfif" class="w-100">
            Спортивный зал
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision9.jfif" class="w-100">
            Изостудия
          </div>

          <div class="col-5 text-center m-3 mb-5">
            <img src="assets/resources/provision10.jfif" class="w-100">
            Медицинский кабинет
          </div>

          <h4 class="col-11">На спортивной площадки имеется оборудование для лазания, метания в цель, прыжков, бега и т.д.</h4>
          <h4 class="col-11">Прогулочные участки оснащены малыми архитектурными формами.</h4>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision11.jfif" class="w-100">
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision12.jfif" class="w-100">
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision13.jfif" class="w-100">
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision14.jfif" class="w-100">
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision15.jfif" class="w-100">
            В приемных комнатах всех групп установлены шкафы для сушки верхней одежды
          </div>

          <h4 class="col-7">Пищеблок в ДОУ оснащен современным оборудованием</h4>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision16.jfif" class="w-100">
          </div>

          <div class="col-5 text-center m-3">
            <img src="assets/resources/provision17.jfif" class="w-100">
          </div>

        </div>

        Материально-техническое обеспечение образовательного процесса осуществляется по следующим направлениям: <br>

        <ul>
          <li>обеспечение компьютерной техникой;</li>
          <li>обеспечение свободного доступа педагогов к ресурсам сети Интернет;</li>
          <li>готовность ДОУ для свободного самовыражения педагогов, воспитанников;</li>
          <li>обеспечение групп методическими материалами и средствами обучения и воспитания за счёт субвенций.</li>
        </ul>

        Материально-техническое обеспечение ДОУ выстроено в соответствии со следующими принципами:

        <ul>

          <li>информативности, предусматривающего разнообразие тематики материалов и оборудования и активности воспитанников во взаимодействии с предметным окружением;</li>
          <li>вариативности, определяющейся видом дошкольного образовательного учреждения, содержанием воспитания, культурными и художественными традициями, климатогеографическими особенностями;</li>
          <li>полифункциональности, предусматривающего обеспечение всех составляющих воспитательно-образовательного процесса и возможность разнообразного использования различных составляющих предметно-развивающей среды;</li>
          <li>педагогической целесообразности, позволяющей предусмотреть необходимость и достаточность наполнения предметно-развивающей среды, а также обеспечить возможность самовыражения воспитанников, индивидуальную комфортность и эмоциональное благополучие каждого ребенка;</li>
          <li>трансформируемости, обеспечивающего возможность изменений предметно-развивающей среды, позволяющих, по ситуации, вынести на первый план ту или иную функцию пространства.</li>

        </ul>




        </div>-->

    </div>
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