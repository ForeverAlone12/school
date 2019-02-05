<?php
/* Smarty version 3.1.32, created on 2018-12-12 06:41:31
  from 'C:\OSPanel\domains\scholl46.local\templates\accessDeny.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c10836b9c38b9_37548553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2c5e5af65df93d1feb679b9e6224d33e2bfcbc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\scholl46.local\\templates\\accessDeny.tpl',
      1 => 1544586085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c10836b9c38b9_37548553 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <h1><?php echo $_smarty_tpl->tpl_vars['school']->value;?>
</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            Логин и/или пароль введены неверно
            Доступ к системе запрещён!
        </div>
    </div>
</div><?php }
}
