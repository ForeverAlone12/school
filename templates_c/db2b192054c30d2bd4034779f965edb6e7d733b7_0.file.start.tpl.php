<?php
/* Smarty version 3.1.32, created on 2018-10-28 12:15:39
  from 'C:\OSPanel\domains\expirience.local\templates\start.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd57e3be25850_30373573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db2b192054c30d2bd4034779f965edb6e7d733b7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\expirience.local\\templates\\start.tpl',
      1 => 1540718137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modalUzverData.tpl' => 1,
  ),
),false)) {
function content_5bd57e3be25850_30373573 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row align-items-start">
    <div class="col-12">
        <div class="panel panel-default col">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <p>
                <h1>Текущая дата: <?php echo $_smarty_tpl->tpl_vars['date_today']->value;?>
</h1>
                <button type="button" id="btnAddUzver" class="btn btn-primary" onclick="addUzver()" data-toggle="modal" data-target="#UzverData">Добавить сотрудника</button>
                </p>
            </div>
            <!-- Таблица с работниками-->
            <table id="allUzverData" class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>№ <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Фамилия <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Имя <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Отчество <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Должность <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Дата рождения <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Стаж <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Редактирование данных</th>
                    </tr>
                </thead>
                <tbody id="uzvers">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzvers']->value, 'uz', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['uz']->value) {
?>
                        <tr>
                            <td><?php echo ($_smarty_tpl->tpl_vars['k']->value+1);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['surname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['secondname'];?>
</td>
                            <td>Раб божий</td>
                            <td><?php echo date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['uz']->value['birthday']));?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['expa'];?>
</td>
                            <td><button type="button" class="btn btn-outline-info" onClick="editUzver()" data-toggle="modal" data-target="#UzverData" data-whatever="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-outline-danger" onClick="delUzver()" data-toggle="modal" data-target="#" data-whatever="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
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
<?php $_smarty_tpl->_subTemplateRender("file:modalUzverData.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 










<?php }
}
