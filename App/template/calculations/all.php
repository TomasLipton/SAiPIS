<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/favicon.png">

    <title>История операций</title>

    <?php require_once __DIR__ . '/../parts/css.php' ?>
</head>
<body>
<header>
    <?php require_once __DIR__ . '/../parts/navbar.php' ?>
</header>
<main>
    <div class="container">
        <h1 class="text-center mb-4">История операций</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название компании</th>
                <th scope="col">Дата операции</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($calculations as $calculating): ?>
                <tr>
                    <th scope="row"><?php echo $calculating->id; ?></th>
                    <td><a href="/?ctrl=calculating&act=one&id=<?php echo $calculating->id; ?>"><?php echo $calculating->company_name; ?></a></td>
                    <td><?php echo $calculating->creation_time; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</main>

<?php require_once __DIR__ . '/../parts/footer.php' ?>

</body>
</html>