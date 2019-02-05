<?php
/* Smarty version 3.1.32, created on 2019-01-22 07:40:22
  from 'C:\OSPanel\domains\school.local\templates\EnterSystem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c469eb67690d1_91669864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0159129850cfc04331852422a6b6c582f93ee27d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\EnterSystem.tpl',
      1 => 1548131920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navigation.tpl' => 1,
  ),
),false)) {
function content_5c469eb67690d1_91669864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['path_to_image_admin'];?>
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
