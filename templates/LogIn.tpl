<div class="container-fluid">
    <div class="row align-items-center justify-content-center" {$hidden}>
        <div class="col-md-6" >
            <div class="alert alert-dismissable alert-danger" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Закрыть</button>
                <h4>Ошибка авторизации!</h4>
                <strong>Проверьте</strong> правильность ввода логина/пароля!
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-2">
            <form role="form" method="POST" action="input.php" name="LogIn">
                <div class="form-group">
                    <label for="login">Пользователь</label>
                    <input type="text" class="form-control" id="login" name="login" />
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
            </form>
        </div>
    </div>
</div>







