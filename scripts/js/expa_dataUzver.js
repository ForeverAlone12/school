var mode = -1;

/**
 * Режим редиктирования данных
 * @returns {undefined}
 */
function editUzver() {
    mode = 1;
    console.log("Модульное окно  открыто в режиме редактирования данных");
    $("#modalUzverTitle").text("Редактирование данных сотрудника");
    $("#expa_addUzver").text("Внести изменения");
    $('input[name=action]').val('edit');
    console.log("Редактирование: " + mode);
}

/**
 * Режим добавления данных
 * @returns {undefined}
 */
function addUzver() {
    mode = 0;
    console.log("Модульное окно  открыто в режиме добавления данных");
    $("#modalUzverTitle").text("Добавление сотрудника");
    $("#expa_addUzver").text("Внести сотрудника");
    $('input[name=action]').val('add');
    console.log("Добавление: " + mode);
}

function delUzver() {
    mode = 2;
    console.log("Модульное окно  открыто в режиме удаления данных");
    $("#modalUzverTitle").text("Удаление сотрудника");
    $("#expa_addUzver").text("Удалить сотрудника");
    $('input[name=action]').val('del');
    console.log("Удаление: " + mode);
}

/**
 * Действия при открытии модального окна с данныыми работников
 * @type type
 */
$('#modalUzverData').on('show.bs.modal', function (event) {
    button = $(event.relatedTarget);
    modal = $(this);
    if (mode === 1 || mode === 2) {
        copyUzverData(button, modal);
    } else if (mode === 0) {
        clearUzverData(modal);
    }
});




/**
 * Копирование данных пользователя из общей таблицы в модальное окно
 * @param {type} button
 * @param {type} modal
 */
function copyUzverData(button, modal) {
    var recipient = button.data('whatever');
    var table = document.getElementById('uzvers');
    modal.find('.modal-body #surname').val(table.rows[recipient].cells[1].innerHTML);
    modal.find('.modal-body #name').val(table.rows[recipient].cells[2].innerHTML);
    modal.find('.modal-body #secondname').val(table.rows[recipient].cells[3].innerHTML);
    date = getDateForInput(table.rows[recipient].cells[5].innerHTML);
    modal.find('.modal-body #birthday').val(date);
    modal.find('.modal-body #inn').val(table.rows[recipient].cells[6].innerHTML);
    modal.find('.modal-body #snils').val(table.rows[recipient].cells[7].innerHTML);
    modal.find('.modal-body #sex').val(table.rows[recipient].cells[9].innerHTML);

}
/**
 * Очистка полей ввода в модальном окне
 * @param {type} modal
 * @returns {undefined}
 */
function clearUzverData(modal) {
    modal.find('.modal-body #surname').val("");
    modal.find('.modal-body #name').val("");
    modal.find('.modal-body #secondname').val("");
    modal.find('.modal-body #birthday').val("");
    modal.find('.modal-body #inn').val("");
    modal.find('.modal-body #snils').val("");
    modal.find('.modal-body #sex').val("");
    modal.find('.modal-body #uzId').val("");
}
/**
 * Преобразование строки с датой формата дд.мм.гггг
 * в формат для input: гггг-мм-дд
 * @param {String} strDate строка с датой формата д.мм.гггг
 * @returns {String} строка с датой формата гггг-мм-дд
 */
function getDateForInput(strDate) {
    var days = strDate.trim().split(".");
    var day = days[0];
    var month = days[1];
    var year = days[2];
    return year + "-" + month + "-" + day;
}