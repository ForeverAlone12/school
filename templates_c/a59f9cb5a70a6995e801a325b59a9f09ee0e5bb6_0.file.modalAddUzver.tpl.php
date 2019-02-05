<?php
/* Smarty version 3.1.32, created on 2018-08-12 10:35:45
  from 'C:\xampp\htdocs\templates\modalAddUzver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b6ff1617eca53_29423326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59f9cb5a70a6995e801a325b59a9f09ee0e5bb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\templates\\modalAddUzver.tpl',
      1 => 1534061823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6ff1617eca53_29423326 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="addUzver" tabindex="-1" role="dialog" aria-labelledby="addUzverLabel" aria-hidden="true">
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
                        <input id="surname" name="surname" type="text" class="form-control" required placeholder="Иванов">
                        <label for="name">Имя</label>
                        <input id="name" name="name" type="text" class="form-control" required placeholder="Иван">
                        <label for="secondname">Отчество</label>
                        <input id="secondname" name="secondname" type="text" class="form-control" placeholder="Иванович">
                        <label for="birthday">Дата рождения</label>
                        <input id="birthday" name="birthday" type="date" class="form-control" required placeholder="<?php echo $_smarty_tpl->tpl_vars['date_today']->value;?>
">
                        <br>
                        <h4>Стаж работы: <?php echo $_smarty_tpl->tpl_vars['expa']->value;?>
</h4>
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
                        <button type="submit" class="btn btn-primary">Внести измения</button>
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
