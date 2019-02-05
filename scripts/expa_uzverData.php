<?php

require_once ("../include/config.php");

// считывание данных
$action = $in_action;
$name = $in_name;
$surname = $in_surname;
$secondname = $in_secondname;
$birthday = $in_birthday;
$position = $in_pos;
$date_start = $in_d_s;
$date_end = $in_d_e;
$inn = $in_inn;
$snils = $in_snils;
$sex = $in_sex;
$id = $in_id;

$result = [];

switch ($action) {
    case "add":
        $result = $client->createUzvers($name, $surname, $secondname, $birthday, $position, $date_start, $date_end, $inn, $snils, $sex);
        break;
    case "edit":
        $result = $client->editUzvers($id, $name, $surname, $secondname, $birthday, $position, $date_start, $date_end, $inn, $snils, $sex);
        break;
    case "del":
        $result = $client->delUzver($id);
        break;
    default:$result = "Неправильно переданный параметр";
}
echo json_encode($result);
