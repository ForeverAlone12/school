<?php
/* Smarty version 3.1.32, created on 2019-01-06 09:48:17
  from 'C:\OSPanel\domains\school.local\templates\navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c31a4b1a592b2_17563144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3643d96a9db67d9d70d7c98fb49352f1892f8f7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\navigation.tpl',
      1 => 1546757288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c31a4b1a592b2_17563144 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <a class="navbar-brand" href="#">Здравствуйте, <?php echo $_smarty_tpl->tpl_vars['uzverName']->value;?>
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Выберите систему для работы<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php" method="POST">
            <input class="btn btn-danger my-2 my-sm-0" id="logout" name="exit"  type="submit" value="Выйти из ситемы" />
        </form>
    </div>
</nav><?php }
}
