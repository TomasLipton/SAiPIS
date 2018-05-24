<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <?php require_once __DIR__ . '/parts/css.php' ?>

    <title>Программное средство для поиск наилучшей альтернативы на основе принципа Кондорсе (на примере производства автомобилей)</title>

    <script>

    </script>
</head>
<body>
<?php require_once __DIR__ . '/parts/navbar.php' ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__ . '/parts/sidebar.php' ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <h1 class="mt-3">Панель администратора</h1>

            <div>

                <div class="card">
                    <div class="card-header d-flex">
                        <span class="mr-auto align-self-center" style="display: inline-block">Пользователи</span>
                        <button type="button" style="display: inline-block" class="btn btn-sm ml-auto" data-toggle="modal" data-target="#exampleModal">Зарегистрировать нового
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Всего <span class="float-right"><?php echo count($users['all']); ?></span></li>
                            <li class="list-group-item">Администраторов <span class="float-right"><?php echo count($users['admins']); ?></span></li>
                            <li class="list-group-item">Пользователей <span class="float-right"><?php echo count($users['default']); ?></span></li>
                        </ul>

                        <h3 class="mt-3 mb-3">Все пользователи</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Логин</th>
                                <th scope="col">Роль</th>
                                <th scope="col">Управление</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($users['all'] as $user): ?>
                                <tr>
                                    <th scope="row"><?php echo $user->id; ?></th>
                                    <td><?php echo $user->username; ?></td>
                                    <td>
                                        <?php if ($user->role == 'admin'):?>
                                        Администратор
                                        <?php else:?>
                                        Пользователь
                                        <?php endif;?>
                                    </td>
                                    <td><a href="/user/delete/?id=<?php echo $user->id; ?>" onclick="return confirm('Точно?');">удалить</a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-5 mb-5">
                    <div class="card-header">
                        Операции <small>Всего: <?php echo count($calculations); ?></small>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Название</th>
                                <th scope="col">Пользователь</th>
                                <th scope="col">Дата операции</th>
                                <th scope="col">Упрвление</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($calculations as $calculating): ?>
                                <tr>
                                    <th scope="row"><?php echo $calculating->id; ?></th>
                                    <td><a href="/calculations/one/?id=<?php echo $calculating->id; ?>"><?php echo $calculating->title; ?>
                                        </a></td>
                                    <td>
                                        <?php echo $calculating->owner->username; ?></a>
                                    </td>
                                    <td><?php echo $calculating->creation_time; ?></td>
                                    <td><a href="/calculations/delete/?id=<?php echo $calculating->id; ?>" onclick="return confirm('Точно?');">удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </main>
    </div>
</div>
<?php require_once __DIR__ . '/modals/registerUser.php' ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="/assets/js/method.js"></script>
</body>
</html>