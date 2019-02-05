<?php
/* Smarty version 3.1.32, created on 2018-10-24 05:37:08
  from 'C:\OSPanel\domains\expirience.local\templates\menu_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bcfdad481c3b7_61683823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c51a31c67d63fb63a64cbe75d1c5b79fbcf669' => 
    array (
      0 => 'C:\\OSPanel\\domains\\expirience.local\\templates\\menu_left.tpl',
      1 => 1540348374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcfdad481c3b7_61683823 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col menu-left">
    <div class="div-group">
        <h2>Настройки</h2>
        <label for="uzverSurname">Поиск сотрудника по фамилии</label>
        <input type="text" id="uzverSurname" class="form-control" placeholder="Введите фамилию сотрудника...">
        <label for="uzverName">Поиск сотрудника по имени</label>
        <input type="text" id="uzverName" class="form-control" placeholder="Введите имя сотрудника...">
        <label for="uzverPosition">Поиск сотрудника по должности</label>
        <input type="text" id="uzverPosition" class="form-control" placeholder="Введите должность сотрудника...">
        <br>
        <button type="button" id="btnAddUzver" class="btn btn-primary form-control" onclick="addUzver()" data-toggle="modal" data-target="#UzverData">Добавить сотрудника</button>
    </div>
</div>

    <?php echo '<script'; ?>
 language=JavaScript src="js/find.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
