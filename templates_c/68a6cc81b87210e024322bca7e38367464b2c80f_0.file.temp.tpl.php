<?php
/* Smarty version 3.1.32, created on 2018-08-12 09:57:19
  from 'C:\xampp\htdocs\templates\temp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6fe85fe83941_21570161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a6cc81b87210e024322bca7e38367464b2c80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\temp.tpl',
      1 => 1534060601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6fe85fe83941_21570161 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" id="add_persons" method="post" onsubmit="addRow();return false;">
<fieldset>
<legend>Добавить сотрудника</legend>
    <ul>
        <li>
            <label for="name">Фамилия</label>
            <input type="text" name="name" id="name" value="" size="12" tabindex="1" />
        </li>
        <li>
            <label for="initials">Инициалы</label>
            <input type="text" name="initials" id="initials" value="" size="12" tabindex="2" />
        </li>
        <li>
            <label for="posada">Должность</label>
            <input type="text" name="posada" id="posada" value="" size="12" tabindex="3" />
        </li>
        <li>
            <label for="subm">Действия</label>
            <input type="submit" name="subm" class="submit" value="Добавить" tabindex="4" />
        </li>
	</ul>
</fieldset>
</form><?php }
}
