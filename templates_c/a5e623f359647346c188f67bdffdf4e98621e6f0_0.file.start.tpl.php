<?php
/* Smarty version 3.1.32, created on 2018-08-27 14:58:08
  from 'D:\sites\expirience\templates\start.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b83f56053d744_17840338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e623f359647346c188f67bdffdf4e98621e6f0' => 
    array (
      0 => 'D:\\sites\\expirience\\templates\\start.tpl',
      1 => 1534075637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu_left.tpl' => 1,
    'file:modalEditUzver.tpl' => 1,
  ),
),false)) {
function content_5b83f56053d744_17840338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row align-items-start">
    <?php $_smarty_tpl->_subTemplateRender("file:menu_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div class="col-10">
        <div class="panel panel-default col">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <p><h1>Текущая дата: <?php echo $_smarty_tpl->tpl_vars['date_today']->value;?>
</h1></p>
            </div>
            <!-- Таблица с работниками-->
            <table class="table table-bordered table-s">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Дата рождения</th>
                        <th>Стаж</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="uzvers">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzvers']->value, 'uz', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['uz']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['surname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['secondname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['birthday'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['expa'];?>
</td>
                            <td><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#editUzver" data-whatever="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><img src="img/pencil.png"> Редактировать</button></td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:modalEditUzver.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

    <?php echo '<script'; ?>
 language=JavaScript src="js/dataUzver.js" type="text/javascript"><?php echo '</script'; ?>
>












<?php }
}
