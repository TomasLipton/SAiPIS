<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <?php require_once __DIR__ . '/../parts/css.php' ?>

    <title>Программное средство для поиск наилучшей альтернативы на основе принципа Кондорсе (на примере производства автомобилей)</title>

    <script>

    </script>
</head>
<body>
<?php require_once __DIR__ . '/../parts/navbar.php' ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__ . '/../parts/sidebar.php' ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            <h1 class="pt-3 pb-2 mb-3"><?php echo $calculation->title; ?> <small>Добавлено: <?php echo $calculation->creation_time; ?></small></h1>

            <div class="container">
                <?php echo $calculation->data; ?>
            </div>

        </main>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="/assets/js/method.js"></script>
</body>
</html>