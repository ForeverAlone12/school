<div class="row align-items-start">
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
                    {foreach from=$uzvers key=k item=uz}
                        <tr>
                            <td>
                                {($k+1)}
                                <input type="numb" id="uzverId" value="{$uz.id}" hidden/>
                            </td>
                            <td>{$uz.surname}</td>
                            <td>{$uz.name}</td>
                            <td>{$uz.secondname}</td>
                            <td>{$uz.position}</td>
                            <td>{date("d.m.Y", strtotime($uz.birthday))}</td>                            
                            <td>{$uz.inn}</td>
                            <td>{$uz.snils}</td>
                            <td>{$uz.expa}</td>
                            <td>{$uz.sex}</td>
                            <td>
                                <div>
                                    <button type="button" class="btn btn-outline-info" onClick="editUzver()" data-toggle="modal" data-target="#modalUzverData" data-whatever="{$k}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" onClick="delUzver()" data-toggle="modal" data-target="#modalUzverData" data-whatever="{$k}">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>

{include file="expa_modalUzver.tpl"}
{include file="expa_modalPosition.tpl"}

{literal}
    <script language="JavaScript" type="text/javascript" src="js/expa_dataUzver.js" ></script> 
    <script language="JavaScript" type="text/javascript" src="js/expa_addUzver.js" ></script> 
    <script language=JavaScript type="text/javascript" src="js/dynamicTable.js" ></script>
    <script language=JavaScript type="text/javascript" src="js/autocomplete_position.js" ></script>
    <script language="JavaScript" type="text/javascript" src="js/expa_edit_position.js" ></script>
{/literal}

