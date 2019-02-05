<div class="modal fade bd-example-modal-xl" id="modalUzverData" tabindex="-1" role="dialog" aria-labelledby="modalUzverDataLabel" aria-hidden="true">
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
                            <input id="uzId" hidden/>
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
                                    {foreach from=$position key=$k item=$pos}
                                        <option value="{$pos.id}">{$pos.full_position}</option>
                                    {/foreach}
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
</div>