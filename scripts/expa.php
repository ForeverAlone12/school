<?php

require_once ("../include/header.inc.php");

// список должностей
$position = $client->getPosition();
$smarty->assign("position", $position);

// текущая дата
$date_today = date("d.m.Y");
$smarty->assign("date_today", $date_today);

// список работников
$rez = $client->GetUzvers();
$smarty->assign("uzvers", $rez);

// навигационная панель
$smarty->display("expa_navigation.tpl");
// список работников
$smarty->display("expa_userList.tpl");
