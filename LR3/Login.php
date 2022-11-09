<?php
session_start();
$error = null;
include_once __DIR__.'/helpers.php';

if (isMoreAttempt()) {
  $error = 'Пользователь заблокирован';
}
$validation = function() {
    
  $email = clearField($_POST['email']);
  $password = clearField($_POST['password']);
  
  $errors = [];  

  if (!$email) {
    $errors[] = 'Не введён email';
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email должен быть в формате почты';
  }

  if (!$password) {
    $errors[] = 'Не введён пароль';
  }


  if (!empty($errors)) {
    throw new Exception(implode('. ', $errors));
  }
  
  return [
    $email, $password
  ];
  
}; 
if (!empty($_POST)) {
  try {
    $validation();
    $email = clearField($_POST['email']);
    $password = clearField($_POST['password']);
    [$id, $email] = checkPassword($email, $password);
    if (!$id) {
      throw new Exception("Не удалось авторизовать пользователя");
    }
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;

    header('Location: Artists.php?message=Успешный вход');
    
  } catch(Exception $ex) {
    $error = $ex->getMessage();
  }
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Цирк</title>

  <link rel="stylesheet" href="Styles/ArtistsStyle.css">
  <link rel="stylesheet" href="Styles/Header.css">
  <link rel="stylesheet" href="Styles/AuthoriseStyle.css">
  <link rel="stylesheet" href="Styles/Form.css">
</head>

<body>
  <div class="container page">
    <header>
      <div class="authorise">
        <?php if(!checkAuth()) {?>
        Вы не авторизованы
        <div class="links">
          <a class="link" href="Login.php">Ввести логин и пароль</a>
          <a class="link" href="Registration.php">Зарегестрироваться</a>
        </div>
        <?php } else {?>
        Вы уже авторизованы, как <?=$_SESSION['email']?>
        <div class="links">
          <a class="link" href="Logout.php">Выйти</a>
        </div>
        <?php };?>
      </div>
    </header>

    <h2 class="page-title">Вход</h2>

    <?php if(checkAuth()) {?>
    Вы уже авторизованы, как <?=$_SESSION['email']?><br>
    <a href="Artists.php">Назад</a>
    <?php } else {?>
    <?php if($error) {?>
    <div>
      <span class="error"><?php echo $error?><span>
    </div>
    <?php }?>
    <form method="post">
      <div class="row">
        <div class="col-25">
          <label for="fname">Email</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="email" placeholder="Email" ]
            <?php if(isset($_POST['email'])) { ?>value="<?php echo $_POST['email']?>"<?php }?>>
        </div>
      </div>
      <div class=" row">
        <div class="col-25">
          <label for="lname">Пароль</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Введите пароль..">
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Войти">
      </div>
    </form>
    <?php }?>



    <script src="Scripts/buttons.js"></script>
    <script src="Scripts/Animations.js"></script>
</body>

</html>