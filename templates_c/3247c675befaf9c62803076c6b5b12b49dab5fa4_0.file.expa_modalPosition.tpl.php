<?php
/* Smarty version 3.1.32, created on 2019-02-03 08:30:10
  from 'C:\OSPanel\domains\school.local\templates\expa_modalPosition.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c567c6280dc76_67202005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3247c675befaf9c62803076c6b5b12b49dab5fa4' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_modalPosition.tpl',
      1 => 1549171801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c567c6280dc76_67202005 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="modalPosition" tabindex="-1" role="dialog" aria-labelledby="modalPositionLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPositionLabel">Редактирование должностей</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="container">
                <form name="position">
                    <div class="modal-body">
                        <div class="form-group">
                            <h4>Список должностей</h4>
                            <br>
                            <table class="table" id="tablePosition">
                                <thead>
                                    <tr>
                                        <th>Полное название  должности</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="dynamicPosition">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'pos', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['pos']->value) {
?>
                                        <tr id="templateRow">                                    
                                            <td>
                                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value['full_position'];?>
"/>
                                                <input type="text" class="form-control" hidden id="id_position" name="id_position" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value['id'];?>
" />
                                            </td>
                                            <td>                                      
                                                <button type="button" name="delPosition" onclick="delRow(this)" class="del btn btn-outline-danger">-</button> 
                                            </td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>                        
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="action" name="action" value="" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                            <button type="submit" id="editPosition" class="btn btn-primary">Внести изменения</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div><?php }
}
