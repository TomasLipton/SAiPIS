<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <?php if ($this->user): ?>
            <!--            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">-->
            <!--                <span>Аккаунт</span>-->
            <!--                <a class="d-flex align-items-center text-muted" href="#">-->
            <!--                    <span data-feather="plus-circle"></span>-->
            <!--                </a>-->
            <!--            </h6>-->
            <?php if ('admin' == $this->user->role): ?>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="/page/AdminPanel/">Панель администратора <span class="sr-only">(current)</span></a>

                    </li>
                </ul>
            <?php endif; ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>История</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <?php foreach ($this->calculations as $calculating): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/calculations/one/?id=<?php echo $calculating->id; ?>"><?php echo $calculating->title; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Авторизация</span>
                <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <?php if (!empty($errors['login'])):?>

                <div class="alert alert-danger text-left mb-0">Нет такого пользователя или пароля</div>
            <?php endif; ?>
            <form method="post" action="/user/auth/">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя пользователя</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               placeholder="Имя пользователя">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>
                    <button type="submit" class="btn btn-primary">Авторизироваться</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</nav>