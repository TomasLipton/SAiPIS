<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Регистрация новго пользователя</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/?ctrl=user&act=register">
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
                    <div class="form-check">
                        <input type="checkbox" name="isAdmin" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Сделать админом </label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>