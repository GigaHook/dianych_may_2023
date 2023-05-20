<?php 

require_once 'db.php';

session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: index.php');
}

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);
  if (!$result) die("Ошибка выполнения запроса: " . mysqli_error($con));
  if (mysqli_num_rows($result) == 1) $_SESSION['email'] = $email;
  else $error = "Неверный логин или пароль";
  mysqli_close($con);
}

if (isset($_POST['title']) && isset($_POST['text']) && isset($_FILES['image'])) {
  $title = $_POST['title'];
  $text = $_POST['text'];
  $date = date('m/d/Y', time());
  $image = $_FILES["image"];
  $destination = 'assets/uploads/';
  $imageName = $image["name"];
  $imageTemp = $image["tmp_name"];
  $imageDestination = $destination . time() . $imageName;
  move_uploaded_file($imageTemp, $imageDestination);
  $query = "INSERT INTO posts (title, text, image, date) VALUES ('$title', '$text', '$imageDestination', '$date')";
  $result = mysqli_query($con, $query);
  if (!$result) die("Ошибка выполнения запроса: " . mysqli_error($con));
  $added = 1;
  mysqli_close($con);
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
            <a class="nav-link bg-warning fw-bold" href="admin.php">Админ панель</a>
          </li>
        <? endif; ?>
      </div>
      
    </ul>
  </nav>

  <main class="container mb-5">
    <div class="row justify-content-center">
      <? if(!isset($_SESSION['email'])): ?>
        
        <form method="post" class="col-8 border rounded p-3 m-3">
          <h3>Войдите в аккаунт</h3>
          <div class="mb-3">
            <label for="email" class="form-label">Почта</label>
            <input type="email" class="form-control" name="email" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" name="password" required>
          </div>        

          <button type="submit" class="btn btn-warning">Войти</button>
        </form>

        <div class="col-8 text-secondary">*Это страница предназначина для управления сайтом. Если вы не являетесь администратором, пожалуйста, покиньте её.</div>

        <? if (isset($error)): ?>
          <script>
            alert(<?= $error ?>)
          </script>
          <? unset($error); ?>
        <? endif; ?>

      <? else: ?>

        <form method="post" class="col-8 border rounded p-3 m-3" enctype="multipart/form-data">
          <h3>Добавление новости</h3>
          <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="text" class="form-label">Содержание</label>
            <textarea rows="5" name="text" class="form-control" required></textarea>  
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" name="image" class="form-control" required accept=".png,.jpg,.jpeg">  
          </div>

          <button type="submit" class="btn btn-warning">Добавить</button>
        </form>

        <? if(isset($added)): ?>
          <script>
            alert('Новость <?= $_POST['title'] ?> добавлена')
          </script>
          <? unset($added); ?>
        <? endif; ?>    

        <form method="GET">
          <button type="submit" name="logout" class="btn btn-warning mb-3">Выйти из аккаунта</button>
        </form>
        
      <? endif; ?>
    </div>
  </main>

  <footer class="d-flex justify-content-space-between w-100 text-center position-absolute bottom-0">
    <div class="col-3">
      МБДОУ №34 "Ромашка"© 2023 <br>
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