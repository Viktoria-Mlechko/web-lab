
<?php
session_start();
include_once __DIR__.'/helpers.php';

function checkExistUserByEmail($email) {
    [$db] = include __DIR__.'/boot.php';
  
    if (mysqli_connect_errno()) {
        throw new Exception('Ошибка подключения к БД');
    }

    $result = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");

    $row = mysqli_fetch_array($result);
    
    if (!empty($row['id'])) {
        throw new Exception("Пользователь с таким email'ом уже существует");
    }
}

function registration($data) {
  [$db] = include __DIR__.'/boot.php';

  $hashPassword = password_hash($data[1], PASSWORD_DEFAULT);
  $data[1] = $hashPassword;
  $value = implode(',', array_map(fn($item) => $item === 'null' ? "$item": "'$item'", $data));
  $query = "INSERT INTO users (email,password,fio,birthday,address,sex,interests,vk,group_blood,rh_factor) VALUES($value)";
  

  return mysqli_query($db, $query);
}


$validation = function() {
  
  $email = clearField($_POST['email']);
  $password = clearField($_POST['password']);
  $rpassword = clearField($_POST['rpassword']);

  $fio = clearField($_POST['fio']);
  $birthday = $_POST['birthday'] ? clearField($_POST['birthday']) : 'null';
  $address = clearField($_POST['address']);
  $sex = clearField($_POST['sex']);
  $interests = clearField($_POST['interests']) ?? '';
  $vk = clearField($_POST['vk']);
  $group_blood = clearField($_POST['group_blood']) ?? '';
  $rh_factor = clearField($_POST['rh_factor']) ?? '';

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

  if(mb_strlen($password) <= 6) {
    $errors[] = 'Пароль должен быть длинее 6 символов';
  }

  if(!preg_match("/([0-9]+)/", $password)) {
    $errors[] = 'Пароль должен содержать цифры';
  }
  if (!preg_match("/([a-z]+)/", $password)) {
    $errors[] = 'Пароль должен содержать маленькие латинские буквы';
  }
  if (!preg_match("/([A-Z]+)/", $password)) {
    $errors[] = 'Пароль должен содержать большие латинские буквы';
  }
  if (!preg_match("/\W/", $password)) {
    $errors[] = 'Пароль должен содержать спец.символы';
  }
  if (!preg_match("/\s/", $password)) {
    $errors[] = 'Пароль должен содержать пробел';
  }

  if ($password && $password !== $rpassword) {
    $errors[] = 'Введёный повторно пароль не совпадает с основным';
  }

  if (!empty($errors)) {
    throw new Exception(implode('<br> ', $errors));
  }
  
  return [
    $email, $password, $fio, $birthday, $address,
    $sex, $interests, $vk, $group_blood, $rh_factor
  ];
  
};

$error = null;
if (!empty($_POST)) {
  try {
    $data = $validation();
    checkExistUserByEmail($data[0]);
    if (!registration($data)) {
      throw new Exception("Не удалось зарегестрировать пользователя");
    }
    header('Location: Artists.php');
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
        <?php if(!checkAuth()){ ?>
        Вы не авторизованы
        <div class="links">
          <a class="link" href="Login.php">Ввести логин и пароль</a>
          <a class="link" href="Registration.php">Зарегестрироваться</a>
        </div>
        <?php } else {?>
        Вы уже авторизованы, как <?php echo $_SESSION['email']?>
        <div class="links">
          <a class="link" href="Logout.php">Выйти</a>
        </div>
        <?php }?>
      </div>
    </header>
    <h2 class="page-title">Регистрация</h2>

    <?php if(checkAuth()) {?>
    Вы уже авторизованы, как <?php echo $_SESSION['email']?><br>
    <a href="Artists.php">Назад</a>
    <?php } else {?>
    <?php if($error){?>
    <div>
      <span class="error"><?php echo $error?><span>
    </div>
    <?php }  ?>
    <form method="post">
      <div class="row">
        <div class="col-75">
          * - обязательные поля.
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="fname">Email *</label>
        </div>
        <div class="col-75">
          <input type="email" id="email" name="email" placeholder="Email"
            <?php if(isset($_POST['email'])) {?>value="<?php echo $_POST['email']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Пароль *</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Введите пароль...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Повторите пароль *</label>
        </div>
        <div class="col-75">
          <input type="password" id="rpassword" name="rpassword" placeholder="Введите повторно пароль...">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">ФИО</label>
        </div>
        <div class="col-75">
          <input type="text" id="fio" name="fio" <?php if(isset($_POST['fio'])) {?>value="<?php echo $_POST['fio']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Дата рождения</label>
        </div>
        <div class="col-75">
          <input type="date" id="birthday" name="birthday"
            <?php if(isset($_POST['birthday'])) {?>value="<?php echo $_POST['birthday']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Адрес</label>
        </div>
        <div class="col-75">
          <input type="text" id="address" name="address"
            <?php if(isset($_POST['address'])) { ?>value="<?php echo $_POST['address']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Пол</label>
        </div>
        <div class="col-75">
          <select name="sex">
            <option value="">
              Не выбрано
            </option>
            <option value="F" <?php if(isset($_POST['sex']) && $_POST['sex']==='F' ){?>
              selected
              <?php } ?>>Женский
            </option>
            <option value="M" <?php if(isset($_POST['sex']) && $_POST['sex']==='M' ){?>
              selected
              <?php } ?>>Мужской</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Интересы</label>
        </div>
        <div class="col-75">
          <textarea
            name="interests"><?php if(isset($_POST['interests'])){ ?><?php echo $_POST['interests']?><?php }?></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Ссылка на профиль в VK</label>
        </div>
        <div class="col-75">
          <input type="text" id="vk" name="vk" <?php if(isset($_POST['vk'])){?>value="<?php echo $_POST['vk']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Группа крови</label>
        </div>
        <div class="col-75">
          <input type="text" id="group_blood" name="group_blood"
            <?php if(isset($_POST['group_blood'])){?>value="<?php echo $_POST['group_blood']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Резус-фактор</label>
        </div>
        <div class="col-75">
          <input type="text" id="rh_factor" name="rh_factor"
            <?php if(isset($_POST['rh_factor'])){?>value="<?php echo $_POST['rh_factor']?>"<?php }?>>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Зарегестрироваться">
      </div>
    </form>
    <?php }?>


    <script src="Scripts/buttons.js"></script>
    <script src="Scripts/Animations.js"></script>
</body>

</html>
