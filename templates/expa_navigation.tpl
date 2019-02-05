<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="expa.php">Текущая дата: {$date_today}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" active>
                    <button type="button" class="btn btn-primary" onClick="addUzver({$uz.id})"  data-toggle="modal" data-target="#modalUzverData">Добавить сотрудника</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPosition">Список должностей</button>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="input.php" method="POST">
            <button class="btn btn-danger my-2 my-sm-0" id="logout" name="logout"  type="submit" > Вернуться к выбору системы</button>
        </form>

    </div>
</nav>