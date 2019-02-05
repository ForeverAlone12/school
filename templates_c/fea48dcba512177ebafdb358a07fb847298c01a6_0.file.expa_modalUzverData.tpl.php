<?php
/* Smarty version 3.1.32, created on 2019-01-22 08:44:50
  from 'C:\OSPanel\domains\school.local\templates\expa_modalUzverData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c46add2d6efe2_76130278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea48dcba512177ebafdb358a07fb847298c01a6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_modalUzverData.tpl',
      1 => 1548135795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c46add2d6efe2_76130278 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-lg" id="UzverData" tabindex="-1" role="dialog" aria-labelledby="editUzverLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>       
            </div>
            <h5 class="modal-title" >Добавление сотрудника</h5>
            <form name="uzverData">
                <div class="modal-body">
                    <div class="form-group">
                        <h4>Анкетные данные</h4>
                        <label for="surname">Фамилия</label>
                        <input id="surname" type="text" class="form-control" required name="surname" placeholder="Иванов"  />
                        <label for="name">Имя</label>
                        <input id="name" name="name" type="text" class="form-control" required placeholder="Иван" value=""/>
                        <label for="secondname">Отчествоsud</label>
                        <input id="secondname" name="secondname" type="text" class="form-control" placeholder="Иванович" value=""/>
                        <label for="birthday">Дата рождения</label>
                        <input id="birthday" name="birthday" type="date" class="form-control" required  value=""/>
                        <div class="container positionDiv">
                            <label for="123">Должность</label>

                            <select  id="position" multiple onclick="get()" >
                                <option value="" disabled hidden>Выбрать должность</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'pos', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['pos']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['pos']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pos']->value['full_position'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>

                            <input id="pos" name="position" type="text" class="form-control magicsearch" required placeholder="Начните вводить название должности, а затем выберите её из списка"  value=""/>



                            <!--
                            <input id="position" name="position" type="text" class="form-control" required placeholder="Начните вводить название должности, а затем выберите её из списка"  value=""/>
                            -->
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
                                    <td><input type="date" class="form-control" id="date_start" name="date_start[]" required ></td>
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
                        <button type="submit" class="btn btn-primary">Внести сотрудника</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
