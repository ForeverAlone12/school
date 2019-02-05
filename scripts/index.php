<?php

require_once ("../include/header.inc.php");


// текущая дата
$date_today = date("d.m.Y");
$smarty->assign("date_today", $date_today);

// иначе вывестии окно авторизации   
$smarty->assign('hidden', "hidden");

$smarty->display('LogIn.tpl');

require_once ("../include/footer.inc.php");


