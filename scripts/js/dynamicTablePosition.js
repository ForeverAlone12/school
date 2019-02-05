//var DynamicTable = (function (GLOB) {
//    var RID = 1;
//    return function (tBody) {
//        /* Если ф-цию вызвали не как конструктор фиксим этот момент: */
//        if (!(this instanceof arguments.callee)) {
//            return new arguments.callee.apply(arguments);
//        }
//        //Делегируем прослушку событий элементу tbody
//        tBody.onclick = function (e) {
//            var evt = e || GLOB.event,
//                    trg = evt.target || evt.srcElement;
//            if (trg.className && trg.className.indexOf("add") !== -1) {
//                _addRow(trg.parentNode.parentNode, tBody);
//            } else if (trg.className && trg.className.indexOf("del") !== -1) {
//                tBody.rows.length > 1 && _delRow(trg.parentNode.parentNode, tBody);
//            }
//        };
//        var _rowTpl = tBody.rows[0].cloneNode(true);
//
//        // Корректируем имена элементов формы
//        var _correctNames = function (row) {
//            var elements = row.getElementsByTagName("*");
//            for (var i = 0; i < elements.length; i++) {
//                if (elements.item(i).name) {
//                    console.log("Type: " + elements.item(i).type);
//                    console.log("ClassName: " + elements.item(i).className);
//                    if (elements.item(i).type &&
//                            elements.item(i).type === "radio" &&
//                            elements.item(i).className &&
//                            elements.item(i).className.indexOf("glob") !== -1) {
//                        elements.item(i).value = "";
//                    } else {
//                        if (elements.item(i).name === "id_position") {    
//                            elements.item(i).value = RID;
//                        }
//                        elements.item(i).name = elements.item(i).name + "[" + RID + "]";
//                        
//                    }
//
//                }
//            }
//            RID++;
//            return row;
//        };
//        // добавление строки с элементами
//        var _addRow = function (before, tBody) {
//            var newNode = _correctNames(_rowTpl.cloneNode(true));
//            tBody.insertBefore(newNode, before.nextSibling);
//        };
//        // удаление строки с элементами
//        var _delRow = function (row, tBody) {
//            tBody.removeChild(row);
//        };
//
//        for (var i = 0; tBody.rows.length; i++) {
//            _correctNames(tBody.rows[i]);
//        }
//
//
//    };
//})(this);
//// 
//new DynamicTable(document.getElementById("dynamicPosition"));

var maxID = 0;

function getTemplateRow() {
var x = document.getElementById("templateRow").cloneNode(true);
x.id = "";
x.style.display = "";
x.value="";
x.innerHTML = x.innerHTML.replace(/{id}/, ++maxID);
return x;
}

function addRow() {
    console.log("Добавление строки");
    var table = document.getElementById("dynamicPosition");
    var row = table.getElementsByTagName("tr");
    var r = row[row.length-1];
    r.parentNode.insertBefore(getTemplateRow(), r);
}