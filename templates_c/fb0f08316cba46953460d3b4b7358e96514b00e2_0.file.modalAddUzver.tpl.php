<?php
/* Smarty version 3.1.32, created on 2018-10-23 06:58:59
  from 'C:\OSPanel\domains\expirience.local\templates\modalAddUzver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bce9c83cced67_33286589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb0f08316cba46953460d3b4b7358e96514b00e2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\expirience.local\\templates\\modalAddUzver.tpl',
      1 => 1540267136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bce9c83cced67_33286589 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="addUzver" tabindex="-1" role="dialog" aria-labelledby="editUzverLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление сотрудника</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="addUzver.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <h4>Анкетные данные</h4>
                        <label for="surname">Фамилия</label>
                        <input id="surname" name="surname" type="text" class="form-control" required value="" />
                        <label for="name">Имя</label>
                        <input id="name" name="name" type="text" class="form-control" required value="">
                        <label for="secondname">Отчество</label>
                        <input id="secondname" name="secondname" type="text" class="form-control" value="">
                        <label for="birthday">Дата рождения</label>
                        <input id="birthday" name="birthday" type="date" class="form-control" required value="">
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
                                    <td><input type="date" class="form-control" name="date_start[]" required ></td>
                                    <td><input type="date" class="form-control" name="date_final[]"></td>
                                    <td>
                                        <button type="button" class="add btn btn-outline-success">+</button>
                                        <button type="button" class="del btn btn-outline-danger">-</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                        <button type="submit" class="btn btn-primary">Внести сотрудника</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php echo '<script'; ?>
 language=JavaScript src="js/dynamicTable.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
