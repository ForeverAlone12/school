<?php
/* Smarty version 3.1.32, created on 2019-02-03 08:32:03
  from 'C:\OSPanel\domains\school.local\templates\expa_navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c567cd3db7ac4_02002072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92570da6d3184f82e2d4ef5294496dfb947841a' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_navigation.tpl',
      1 => 1549171909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c567cd3db7ac4_02002072 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="expa.php">Текущая дата: <?php echo $_smarty_tpl->tpl_vars['date_today']->value;?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" active>
                    <button type="button" class="btn btn-primary" onClick="addUzver(<?php echo $_smarty_tpl->tpl_vars['uz']->value['id'];?>
)"  data-toggle="modal" data-target="#modalUzverData">Добавить сотрудника</button>
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
</nav><?php }
}
