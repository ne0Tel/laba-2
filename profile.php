<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Скрипальщиков С.И</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">

</head>
<body>

  <div class="container nav_bar">
    <div class="row">

      <div class="col-3 nab_log"></div>

      <div class="col-9">
        <div class="nav_text">
          Информация обо мне!
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-6">
        Информация о том что я учусь быть администратором
      </div>

      <div class="col-6">
        <div class="row my_photo"></div>
        <div class="row">
          <p class="title_photo">Скрипальщиков. С.И</p>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-8">
        Информация заполнитель чтобы показать как работает Bootstrap, а справа lorem
      </div>

      <div class="col-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dolor voluptatibus, eveniet nihil sint ex sapiente quis, molestiae ab dolore doloribus porro, consequuntur adipisci debitis ratione recusandae quae delectus quasi!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque alias architecto omnis rerum quaerat, quae nulla accusamus, quis ratione voluptatem quam incidunt nesciunt nostrum sit porro exercitationem? Obcaecati, cumque dolor?
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="button_js col-12">
        <button id="myButton">Click me</button>
        <p id="demo"></p>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="hello">
          Привет, <?php echo $_COOKIE['User'] ?>
        </h1>
      </div>
      <div class="col-12">
        <form method="POST" action="profile.php">
          <input type="text" class="form" name="title" placeholder="Заголовок вашего поста">
          <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea>
          <button type="submit" class="btn_red" name="submit">Сохранить пост!!!</button>
        </form>
      </div>
    </div>
  </div>





  <script src="./js/button.js"></script>
</body>
</html>

<?php
  require_once('db.php');

  $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

  if (isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die("Не удалось добавить пост");
  }
?>