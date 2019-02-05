<?php
/* Smarty version 3.1.32, created on 2019-01-06 17:38:21
  from 'C:\OSPanel\domains\school.local\templates\navigation_expa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c3212ddb8d235_37584851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb7a9c3bef57e634bb0f015f77e900c672ab714' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\navigation_expa.tpl',
      1 => 1546785485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3212ddb8d235_37584851 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="#">Текущая дата: <?php echo $_smarty_tpl->tpl_vars['date_today']->value;?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <button type="button" id="btnAddUzver" class="btn btn-primary" onclick="addUzver()" data-toggle="modal" data-target="#UzverData">Добавить сотрудника</button>
                </a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ExvelUzverData">Загрузить данные из Excel</button>
                </a>
            </li>
            -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <button type="button" class="btn btn-warning" onclick="" data-toggle="modal" data-target="#EditPosition">Список должностей</button>
                </a>
            </li>
        </ul>
        
        <form class="form-inline my-2 my-lg-0" action="input.php" method="POST">
            <button class="btn btn-danger my-2 my-sm-0" id="logout" name="logout"  type="submit" > Вернуться к выбору системы</button>
        </form>
        
    </div>
</nav><?php }
}
