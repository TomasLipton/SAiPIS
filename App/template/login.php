<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>Авторизация</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/assets/css/login_form.css">
</head>

<body class="text-center">

<form class="form-signin" method="post" action="/?ctrl=user&act=auth">
    <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>

    <?php if (!empty($errors['login'])):?>
        <p class="alert alert-danger text-left">Нет такого пользователя или пароля</p>
    <?php endif; ?>

    <label for="inputEmail" class="sr-only">Имя пользователя</label>
    <input type="text" name="userLogin" id="inputEmail" class="form-control" placeholder="Имя пользователя" value="<?php echo $userLogin; ?>" required autofocus>
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" name="userPassword" id="inputPassword" class="form-control" placeholder="Пароль" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    <p class="mt-5 mb-3 text-muted"> &copy; Анастасия Березюк, гр.672302</p>
</form>
</body>
</html>
