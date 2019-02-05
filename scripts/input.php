<?php

require_once ("../include/header.inc.php");

// считывание введённого логина
$log = $in_login;
// считывание введённого пароля
$pass = $in_password;

// проверка есть ли доступ к системе
$access = $client->CheckUserLogin($log, $pass);

$page = "";
// если доступ есть
if ($access[0]["status"] == 1) {

    // получение списка доступных систем
    $listSystem = $client->getListSystem();
    // 
    $smarty->assign("listSystem", $listSystem);

    // получение данных о пользователе
    $uzver_info = $client->UzverCommonInfo($log);

    // имя пользователя
    $_SESSION["uzver_name"] = $uzver_info[0]["name"];
    // уровень доступа
    $_SESSION["level_access"] = $uzver_info[0]["level_access"];
    // статус
    $_SESSION["status"] = $uzver_info[0]["status"];

    $smarty->assign("name", $uzver_info[0]["name"]);
    $smarty->assign("surname", $uzver_info[0]["surname"]);
    $smarty->assign("secondname", $uzver_info[0]["secondname"]);

    $smarty->assign("uzverName", $_SESSION["uzver_name"]);
    $page = "EnterSystem.tpl";
} else {
    $smarty->assign("hidden", "");
    $page = "LogIn.tpl";
}

$smarty->display($page);

