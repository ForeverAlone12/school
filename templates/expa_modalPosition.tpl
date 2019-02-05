<div class="modal fade bd-example-modal-lg" id="modalPosition" tabindex="-1" role="dialog" aria-labelledby="modalPositionLabel" aria-hidden="true">
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
                                    {foreach from=$position key=$k item=$pos}
                                        <tr id="templateRow">                                    
                                            <td>
                                                <input type="text" class="form-control" value="{$pos.full_position}"/>
                                                <input type="text" class="form-control" hidden id="id_position" name="id_position" value="{$pos.id}" />
                                            </td>
                                            <td>                                      
                                                <button type="button" name="delPosition" onclick="delRow(this)" class="del btn btn-outline-danger">-</button> 
                                            </td>
                                        </tr>
                                    {/foreach}
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
</div>