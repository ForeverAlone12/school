<?php
/* Smarty version 3.1.32, created on 2018-11-24 08:26:53
  from 'C:\OSPanel\domains\scholl46.local\templates\start.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf8e11da27c16_79310268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91f4c8eeca26bf5dcdb3b51c06b3d0edd4546e9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\scholl46.local\\templates\\start.tpl',
      1 => 1543037211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf8e11da27c16_79310268 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row align-items-start">
    <div class="form">
        <form class="form-horizontal" role="form" method="POST" action="input.php">
            <div class="form-group">
                <div class="form-group">
                    <label for="inputLogin" class="col-4 control-label">Логин</label>
                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Логин" name="login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-4 control-label">Пароль</label>
                    <div class="col-10">
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                </div>
                <div class="form-group">
                   
                </div> 
                <div class="form-group">
                    <div class="col-2 col-10">
                        <button type="submit" class="btn btn-default btn-sm">Войти</button>
                    </div>
                </div>  
        </form>
    </div><!-- form  -->
</div>










<?php }
}
