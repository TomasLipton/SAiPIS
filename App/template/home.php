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

            <h1 class="pt-3 pb-2 mb-3">Поиск наилучшей альтернативы на основе принципа Кондорсе</h1>
            <div id="saving">


                <div class="card mb-5 hidden" id="rankingAlternatives">
                    <div class="card-header">
                        Ранжирование альтернатив
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="rankingAlternativesTable">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody>
                            <tr></tr>
                            </tbody>
                        </table>
                        <input type="submit" class="btn" id="start" value="Вычислить">
                        <input type="submit" class="btn hidden" id="saveCalculations" value="Сохранить">
                    </div>
                </div>

                <div class="card mb-5 hidden" id="preferredAlternatives">
                    <div class="card-header">
                        Предпочтение альтернати в парных предпочтениях
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="preferredAlternativesTable">
                            <thead>
                            <tr></tr>
                            </thead>
                            <tbody>
                            <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-5 hidden" id="bestAlternative">
                    <div class="card-header">
                        Предпочтение альтернати в парных предпочтениях
                    </div>
                    <div class="card-body">
                        <p>Привилу Кондорса удовлетворяет альтернатива №<span id="theBestAlternative"></span> </p>
                    </div>
                </div>

                <div class="container text-left">
                    <form id="startData">
                        <div class="form-group">
                            <label for="numberOfAlternatives">Количество альтернатив</label>
                            <input type="number" min="2" max="100" value="5" class="form-control" id="numberOfAlternatives" placeholder="Количество альтернатив" autofocus
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="numberOfExperts">Количество экспертов</label>
                            <input type="number" min="2" max="100" value="5" class="form-control" id="numberOfExperts" placeholder="Количество экспертов" required>
                        </div>
                        <input type="submit" value="Продолжить" class="btn">
                    </form>
                </div>
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