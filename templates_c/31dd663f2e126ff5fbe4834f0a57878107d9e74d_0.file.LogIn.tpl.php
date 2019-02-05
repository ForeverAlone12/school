<?php
/* Smarty version 3.1.32, created on 2018-12-25 16:08:01
  from 'C:\OSPanel\domains\scholl46.local\templates\LogIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c222bb115bb67_60393097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31dd663f2e126ff5fbe4834f0a57878107d9e74d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\scholl46.local\\templates\\LogIn.tpl',
      1 => 1545743273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c222bb115bb67_60393097 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $_smarty_tpl->tpl_vars['school']->value;?>
</h1>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-3">
            <form method="POST" action="input.php" name="LogIn">
                <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин...">
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль...">
                <button type="submit" class="btn btn-primary">Войти в ситему</button>
            </form>
        </div>
    </div>
</div>









<?php }
}
