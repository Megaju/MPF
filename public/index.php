<?php

use App\Blog\BlogModule;

require '../vendor/autoload.php';

$app = new \MPF\App([
    BlogModule::class
]);
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
\Http\Response\send($response);
