<?php
/* Smarty version 3.1.32, created on 2018-12-26 10:40:47
  from 'C:\OSPanel\domains\scholl46.local\templates\EnterSystem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c23307fb5a3f7_93335001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0caaf8e11364c97baf8701832eea8622492ba218' => 
    array (
      0 => 'C:\\OSPanel\\domains\\scholl46.local\\templates\\EnterSystem.tpl',
      1 => 1545810024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c23307fb5a3f7_93335001 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $_smarty_tpl->tpl_vars['school']->value;?>
</h1>
        </div>
    </div>
</div>

<div class="container">
    <form action="index.php" method="POST">
        <h4 >Добро пожаловать, <?php echo $_smarty_tpl->tpl_vars['uzverName']->value;?>
.</h4>   
        <h5 >Выберите систему для работы</h5>
        <button type="submit"  name="log" class="btn btn-outline-danger">Выйти из системы</button>
    </form>
</div>


<div class="container-fluid">
    <div class="container-fluid">
        <h4></h4>
    </div>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listSystem']->value, 'system', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['system']->value) {
?>
            <div class="col-lg-2">
                <div class="card card-block text-xs-center">
                    <div class="card-block ">
                        <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['system']->value['name'];?>
</h4>
                    </div>
                    <img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['path_to_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['system']->value['alt_image'];?>
">
                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['subcribe'];?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['url'];?>
" class="btn btn-outline-info">Войти<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
