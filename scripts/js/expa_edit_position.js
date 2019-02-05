/**
 * Названия должностей
 * @type type
 */
var full = [];
var id = [];

$(function () {
    $("button#editPosition").click(function () {
        getPositionData();
        //sendPositionData();
    });
});


function getPositionData() {

    $("input#full").each(function () {
        if ($(this).val() != "") {
            full.push($(this).val());
        }
    });

    $("input#id_position").each(function () {
        if ($(this).val() != "") {
            id.push($(this).val());
        }
    });
    
//    console.log("Cчитанные должности: " + full);
//    console.log("Cчитанные должности: " + id);

}

function sendPositionData() {
    $.ajax({
        url: "expa_edit_position.php",
        type: "POST",
        cache: false,
        data: {
            position: full,
            id_position: id
        },
        dataType: "json",
        success: function (data, textStatus, jqXHR) {
            alert("Успех: " + data + "\n" + textStatus + "\n" + jqXHR);
            console.log("Успех: " + data + "\n" + textStatus + "\n" + jqXHR);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
            console.log("Ошибка: " + jqXHR + "\n" + textStatus + "\n" + errorThrown);
        }
    });
}