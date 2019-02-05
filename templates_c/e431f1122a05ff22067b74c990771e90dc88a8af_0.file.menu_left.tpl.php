<?php
/* Smarty version 3.1.32, created on 2018-08-27 14:58:08
  from 'D:\sites\expirience\templates\menu_left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b83f5606261b6_81593048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e431f1122a05ff22067b74c990771e90dc88a8af' => 
    array (
      0 => 'D:\\sites\\expirience\\templates\\menu_left.tpl',
      1 => 1534062508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modalAddUzver.tpl' => 1,
  ),
),false)) {
function content_5b83f5606261b6_81593048 (Smarty_Internal_Template $_smarty_tpl) {
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
