$(function () {
    $("button#expa_delUzver").click(function () {
        getUzverData();
        sendUzverData();
    });
});

function getUzverData() {
    id = $("#uzverId").val();
    action = $("#action").val();
    
    console.log("Дата конца работы: " + date_end);
}

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
            alert("Успех: " + data + "\n" + textStatus + "\n" + jqXHR);
            console.log("Успех: " + data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
             alert("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
            console.log("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
        }
    });
}