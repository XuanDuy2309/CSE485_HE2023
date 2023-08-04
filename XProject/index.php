<?php
$controller = isset($_GET['c']) ? $_GET['c'] : 'employee';
$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$controller = ucfirst($controller);
$controller = $controller."Controller";
$pathController = "app/controllers/".$controller.".php";

if(!file_exists($pathController)) {
    die('Yêu cầu Controller không tồn tại, vui lòng kiểm tra lại liên kết');
}

include($pathController);
$myController = new $controller();
$myController->$action();