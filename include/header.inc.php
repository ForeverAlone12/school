<?php

require_once "config.php";

header("charset=utf-8");
$title = ($in_title) ? $in_title : "Вход в систему Школа 46";
$smarty->assign("title", $title);
$smarty->display('header.tpl');

