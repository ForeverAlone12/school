<?php
/* Smarty version 3.1.32, created on 2019-02-05 06:38:08
  from 'C:\OSPanel\domains\school.local\templates\expa_modalUzver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c59052094c972_13188817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc553e54b1cdf00e3472809f62c69e8e18efbb51' => 
    array (
      0 => 'C:\\OSPanel\\domains\\school.local\\templates\\expa_modalUzver.tpl',
      1 => 1549337881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59052094c972_13188817 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade bd-example-modal-xl" id="modalUzverData" tabindex="-1" role="dialog" aria-labelledby="modalUzverDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUzverTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="uzverData" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <h4>Анкетные данные</h4>
                            <label for="surname">Фамилия</label>
                            <input id="surname" type="text" class="form-control" required name="surname" placeholder="Иванов"  />
                            <label for="name">Имя</label>
                            <input id="name" name="name" type="text" class="form-control" required placeholder="Иван" value=""/>
                            <label for="secondname">Отчество</label>
                            <input id="secondname" name="secondname" type="text" class="form-control" placeholder="Иванович" value=""/>
                            <label for="birthday">Дата рождения</label>
                            <input id="birthday" name="birthday" type="date" class="form-control" required  value=""/>
                            <label for="inn">ИНН</label>
                            <input id="inn" name="inn" type="text" class="form-control" pattern="" placeholder="012345678912"/>
                            <label for="snils">СНИЛС</label>
                            <input id="snils" name="snils" type="text" class="form-control" pattern=""  placeholder="123-456-789 00"/>
                            <label for="sex">Пол</label>
                            <select id="sex" name="sex" type="text" class="form-control" pattern=""  value="">
                                <option value="муж">мужской</option>
                                <option value="жен">женский</option>
                            </select>
                            <br>
                            <div class="container positionDiv">
                                <label for="positionSelect">Должность</label>
                                <select  id="positionSelect" multiple>
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
                            </div>
                            <input name="action" hidden/>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-primary" id="expa_addUzver"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
