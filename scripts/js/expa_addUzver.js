$(function () {
    $("button#expa_addUzver").click(function () {
        getUzverData();
        sendUzverData();
    });
});

/**
 * Получение данных о работнике
 */
function getUzverData() {
    id = $("#uzverId").val();
    name = $("#name").val();
    surname = $("#surname").val();
    secondname = $("#secondname").val();
    birthday = $("#birthday").val();
    action = $("#action").val();
    inn = $("#inn").val();
    snils = $("#snils").val();
    sex = $("#sex").val();
    position = $("#positionSelect").val();
    console.log("Должность: " + position);

    date_start = [];
    $("#date_start").each(function () {
        if ($(this).val() != "") {
            date_start.push($(this).val());
        }
    });
    console.log("Дата начала работы: " + date_start);


    date_end = [];
    $("#date_final").each(function () {
        if ($(this).val() != "") {
            date_end.push($(this).val());
        }
    });
    console.log("Дата конца работы: " + date_end);
}

/**
 * Отправка данных о пользователе на сервер для добавления
 */
function sendUzverData() {
    $.ajax({
        url: "expa_uzverData.php",
        type: "POST",
        cache: false,
        data: {
            id: id,
            name: name,
            surname: surname,
            secondname: secondname,
            birthday: birthday,
            pos: position,
            d_s: date_start,
            d_e: date_end,
            action: action,
            snils: snils,
            inn: inn,
            sex: sex
        },
        dataType: "json",
        success: function (data, textStatus, jqXHR) {
            //alert("Успех: " + data + "\n" + textStatus + "\n" + jqXHR);
            console.log("Успех: " + data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            //alert("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
            console.log("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
        }
    });
}