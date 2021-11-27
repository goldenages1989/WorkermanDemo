<?php
require __DIR__ . '/../vendor/autoload.php';

$vega = \App\Router\Vega::new();

$http_worker = new Workerman\Worker("http://0.0.0.0:2345");
$http_worker->onMessage = $vega->handler();
$http_worker->count = 8;
Workerman\Worker::runAll();

?>
