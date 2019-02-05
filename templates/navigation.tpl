<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="#">Здравствуйте, {$uzverName}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Выберите систему для работы<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php" method="POST">
            <input class="btn btn-danger my-2 my-sm-0" id="logout" name="exit"  type="submit" value="Выйти из ситемы" />
        </form>
    </div>
</nav>