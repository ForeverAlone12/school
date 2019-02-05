<?php
/* Smarty version 3.1.32, created on 2019-02-03 08:23:03
  from 'C:\OSPanel\domains\school.local\templates\LogIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c567ab7701b46_09755924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0609225c2abe166592765f267305734754cc70d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\LogIn.tpl',
      1 => 1549171306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c567ab7701b46_09755924 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row align-items-center justify-content-center" <?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
>
        <div class="col-md-6" >
            <div class="alert alert-dismissable alert-danger" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">Закрыть</button>
                <h4>Ошибка авторизации!</h4>
                <strong>Проверьте</strong> правильность ввода логина/пароля!
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-2">
            <form role="form" method="POST" action="input.php" name="LogIn">
                <div class="form-group">
                    <label for="login">Пользователь</label>
                    <input type="text" class="form-control" id="login" name="login" />
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
            </form>
        </div>
    </div>
</div>







<?php }
}
