<?php

// практический пример MVC

/// М - model - содержит бизнесс-логику приложения
/// V - view - выдаёт(отрисовывает) клиенту ответ
/// С - controller - связующее M+V звенья


require_once "vendor/autoload.php";

use app\controller\Controller;

$controller = new Controller();
$html = $controller->actionIndex();
echo $html;