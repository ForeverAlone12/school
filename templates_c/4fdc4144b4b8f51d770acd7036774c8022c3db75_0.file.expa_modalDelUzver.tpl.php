<?php
/* Smarty version 3.1.32, created on 2019-02-05 06:29:06
  from 'C:\OSPanel\domains\school.local\templates\expa_modalDelUzver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c590302476574_98726989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdc4144b4b8f51d770acd7036774c8022c3db75' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_modalDelUzver.tpl',
      1 => 1549337341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c590302476574_98726989 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="modalr" tabindex="-1" role="dialog" aria-labelledby="modalDelUzverLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDelUzverTitle">Удалениие сотрудника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <p>Вы действительно хотите удалить сотрудника</p> 
                    <h5 id="uzverDel"></h5> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-danger" id="expa_delUzver">Удалить</button>
                </div>

            </div>
        </div>
    </div>
</div><?php }
}
