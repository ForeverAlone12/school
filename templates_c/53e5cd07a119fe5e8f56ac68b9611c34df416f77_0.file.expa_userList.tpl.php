<?php
/* Smarty version 3.1.32, created on 2019-02-05 06:57:14
  from 'C:\OSPanel\domains\school.local\templates\expa_userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c59099ade0e83_33367248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53e5cd07a119fe5e8f56ac68b9611c34df416f77' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_userList.tpl',
      1 => 1549339029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:expa_modalUzver.tpl' => 1,
    'file:expa_modalPosition.tpl' => 1,
  ),
),false)) {
function content_5c59099ade0e83_33367248 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row align-items-start">
    <div class="col-12">
        <div class="panel panel-default col">        
            <br>
            <table id="allUzverData" class="table table-hover" contenteditable="true">
                <thead class="thead-light">
                    <tr>
                        <th>№ <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Фамилия <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Имя <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Отчество <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Должность <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Дата рождения <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>ИНН <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>СНИЛС <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
                        <th>Стаж <i class="fa fa-arrows-v" aria-hidden="true"></i></th>  
                        <th>Пол <i class="fa fa-arrows-v" aria-hidden="true"></i></th>
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
                            <td>
                                <?php echo ($_smarty_tpl->tpl_vars['k']->value+1);?>

                                <input type="numb" id="uzverId" value="<?php echo $_smarty_tpl->tpl_vars['uz']->value['id'];?>
"/>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['surname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['secondname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['position'];?>
</td>
                            <td><?php echo date("d.m.Y",strtotime($_smarty_tpl->tpl_vars['uz']->value['birthday']));?>
</td>                            
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['inn'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['snils'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['expa'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['uz']->value['sex'];?>
</td>
                            <td>
                                <div>
                                    <button type="button" class="btn btn-outline-info" onClick="editUzver()" data-toggle="modal" data-target="#modalUzverData" data-whatever="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" onClick="delUzver()" data-toggle="modal" data-target="#modalUzverData" data-whatever="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
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

<?php $_smarty_tpl->_subTemplateRender("file:expa_modalUzver.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:expa_modalPosition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="js/expa_dataUzver.js" ><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="js/expa_addUzver.js" ><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 language=JavaScript type="text/javascript" src="js/dynamicTable.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language=JavaScript type="text/javascript" src="js/autocomplete_position.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="js/expa_edit_position.js" ><?php echo '</script'; ?>
>


<?php }
}
