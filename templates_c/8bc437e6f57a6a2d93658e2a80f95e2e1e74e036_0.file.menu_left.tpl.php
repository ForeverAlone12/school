<?php
/* Smarty version 3.1.32, created on 2018-08-12 10:35:45
  from 'C:\xampp\htdocs\templates\menu_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ff1617a6066_32353174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bc437e6f57a6a2d93658e2a80f95e2e1e74e036' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\menu_left.tpl',
      1 => 1534062508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modalAddUzver.tpl' => 1,
  ),
),false)) {
function content_5b6ff1617a6066_32353174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col">
    <div class="div-group">
        <h2>Настройки</h2>
        <label for="uzverSurname">Поиск сотрудника по фамилии</label>
        <input type="text" id="uzverSurname" class="form-control" placeholder="Введите фамилию сотрудника...">
        <label for="uzverName">Поиск сотрудника по имени</label>
        <input type="text" id="uzverName" class="form-control" placeholder="Введите имя сотрудника...">
        <br>
        <button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#addUzver">Добавить сотрудника</button>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:modalAddUzver.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
