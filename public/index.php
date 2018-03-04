<?php

use App\Blog\BlogModule;

require '../vendor/autoload.php';

$renderer = new \MPF\Renderer();
$renderer->addPath(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views');

$app = new \MPF\App([
    BlogModule::class
], [
    'renderer' => $renderer
]);
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
\Http\Response\send($response);
