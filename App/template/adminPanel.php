<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>Панель администратора</title>

    <?php require_once __DIR__ . '/parts/css.php' ?>
</head>
<body>
<header>
    <?php require_once __DIR__ . '/parts/navbar.php' ?>
</header>
<main>
    <div class="container">
        <h1 class="text-center mb-4">Панель администратора</h1>


        <div class="row">
            <div class="col-md-6">
                <h2>Пользователи</h2>
                <ul class="list-group">
                    <li class="list-group-item">Всего <span class="float-right"><?php echo count($users['all']); ?></span></li>
                    <li class="list-group-item">Админ <span class="float-right"><?php echo count($users['admins']); ?></span></li>
                    <li class="list-group-item">Пользователь <span class="float-right"><?php echo count($users['default']); ?></span></li>
                </ul>
                <button type="button" class="btn btn-info mb-3 mt-3" data-toggle="modal" data-target="#exampleModal">Зарегистрировать нового</button>
                <h3>Список</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($users['all'] as $user): ?>
                        <tr>
                            <th scope="row"><?php echo $user->id; ?></th>
                            <td><?php echo $user->username; ?> (<?php echo $user->role; ?>)</td>
                            <td><a href="/?ctrl=user&act=delete&id=<?php echo $user->id; ?>" onclick="return confirm('Точно?');">удалить</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Операции</h2>
                <ul class="list-group">
                    <li class="list-group-item">Всего <span class="float-right"><?php echo count($calculations); ?></span></li>
                </ul>
                <h3>Список</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название компании</th>
                        <th scope="col">Дата операции</th>
                        <th scope="col">...</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($calculations as $calculating): ?>
                        <tr>
                            <th scope="row"><?php echo $calculating->id; ?></th>
                            <td><a href="/?ctrl=calculating&act=one&id=<?php echo $calculating->id; ?>"><?php echo $calculating->company_name; ?> (<?php echo $calculating->owner->username; ?>)</a></td>
                            <td><?php echo $calculating->creation_time; ?></td>
                            <td><a href="/?ctrl=calculating&act=delete&id=<?php echo $calculating->id; ?>" onclick="return confirm('Точно?');">удалить</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</main>

<?php require_once __DIR__ . '/parts/footer.php' ?>

<?php require_once __DIR__ . '/modals/registerUser.php' ?>

</body>
</html>