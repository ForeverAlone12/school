<?php
/* Smarty version 3.1.32, created on 2018-10-30 01:33:04
  from 'C:\OSPanel\domains\expirience.local\templates\modalUzverData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd78aa054e616_96126267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e89c140560b1fd88ea91d012be01c51a5389111' => 
    array (
      0 => 'C:\\OSPanel\\domains\\expirience.local\\templates\\modalUzverData.tpl',
      1 => 1540774461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd78aa054e616_96126267 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="UzverData" tabindex="-1" role="dialog" aria-labelledby="editUzverLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление сотрудника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="uzverData">
                <div class="modal-body">
                    <div class="form-group">
                        <h4>Анкетные данные</h4>
                        <label for="surname">Фамилия</label>
                        <input id="surname" type="text" class="form-control" required name="surname" placeholder="Иванов"  />
                        <label for="name">Имя</label>
                        <input id="name" name="name" type="text" class="form-control" required placeholder="Иван" value="">
                        <label for="secondname">Отчество</label>
                        <input id="secondname" name="secondname" type="text" class="form-control" placeholder="Иванович" value="">
                        <label for="birthday">Дата рождения</label>
                        <input id="birthday" name="birthday" type="date" class="form-control" required  value="">
                        <div class="pos">
                            <label for="position">Должность</label>
                            <input id="position" name="position" type="text" class="form-control" required  placeholder="учитель" value="">
                        </div>
                        <br>
                        <h4>Стаж работы: </h4>
                        <table class="table" id="tblAddUzver">
                            <thead>
                                <tr>
                                    <th>Дата приёма</th>
                                    <th>Дата увольнения</th>    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="dynamic">
                                <tr>                                    
                                    <td><input type="date" class="form-control" id="date_start" name="date_start{}" required ></td>
                                    <td><input type="date" class="form-control" id="date_final" name="date_final[]"></td>
                                    <td>
                                        <button type="button" class="add btn btn-outline-success">+</button>
                                        <button type="button" id="ok" class="del btn btn-outline-danger">-</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="action" name="action" value="" />
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                        <button type="submit" id="justDoIt" value="" class="btn btn-primary"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php echo '<script'; ?>
 language=JavaScript src="js/dynamicTable.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language=JavaScript src="js/dataUzver.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language=JavaScript src="js/uzverData.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language=JavaScript src="js/autocompletePosition.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
