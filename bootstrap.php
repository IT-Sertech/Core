<?php

use Core\Application;

require_once '../vendor/autoload.php';

ini_set('display_errors', 0);

date_default_timezone_set('Europe/Berlin');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Requested-With, XMLHttpRequest');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE');

$headers = require_once "../config/headers.php";
$headerCSP = "Content-Security-Policy:";
foreach ($headers as $key => $value){
    $headerCSP.=$key." ".$value;
}
header($headerCSP);

header("Strict-Transport-Security: max-age=600");
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: same-origin');
header('Permissions-Policy: geolocation=(self "https://www.example.com/"), microphone=()');
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");

define('ROOT_DIR', realpath(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
define('WEB_ROOT_DIR', realpath(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."www")."");

try {
    $application = new Application();
    $application->getApp()->run($application->getRequest());
} catch (Exception $e) {
    echo "<pre>";
    var_dump([
        'line'=>$e->getLine(),
        'file'=>$e->getFile(),
        'code'=>$e->getCode(),
        'message'=>$e->getMessage(),
        'trace'=>$e->getTrace()
    ]);
    echo "</pre>";
}
