<?php
/* Smarty version 3.1.32, created on 2018-11-25 18:40:14
  from 'C:\OSPanel\domains\scholl46.local\templates\expa_menu_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfac25ead4750_18404313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c0c093e0199f7d03c916332c1c2ccd79d958f2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\scholl46.local\\templates\\expa_menu_left.tpl',
      1 => 1540352076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfac25ead4750_18404313 (Smarty_Internal_Template $_smarty_tpl) {
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
       
    </div>
</div>

    <?php echo '<script'; ?>
 language=JavaScript src="js/find.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
