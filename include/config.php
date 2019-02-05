<?php

// обработчик ошибок PHP
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

// обработчик ошибок SOAP
use_soap_error_handler($handler = TRUE);


// настройки SOAP
$location = "http://soap.local/soap.php"; // URL SOAP-сервера
$uri = "http://soap.local/soap.php"; // целевое пространство имён SOAP-сервера
$login = "";      // логин
$pass = "";      // пароль
// Почтовый адрес по умочанию
$default_mail = "your@email.com";


// соединение с SOAP
$client = new SoapClient(NULL, array(
    'location' => $location,
    'uri' => $uri,
    'login' => $login,
    'password' => $pass,
    'encoding' => "utf8",
    'extensions' => 0,
    'trace' => 1));


// импортирт переменных GET/POST/Cookie в глобальную область видимости
if (!function_exists('import_request_variables')) {
    extract($_REQUEST, EXTR_PREFIX_ALL | EXTR_REFS, 'in');
} else {
    import_request_variables("GPC", "in_");
}

// настройки сессии
session_name("school46");
session_start();


// настройки Smarty
require_once "smarty-3.1.32/Smarty.class.php";
$smarty = new Smarty;
$smarty->template_dir = '../templates';
$smarty->compile_dir = '../templates_c';

$smarty->assign("school", "МБОУ г. Иркутска СОШ № 46");
