<?php

use App\Blog\BlogModule;

require '../vendor/autoload.php';

$renderer = new \MPF\Renderer\TwigRenderer(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views');
//$loader = new Twig_Loader_Filesystem(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views');
//$twig = new Twig_Environment($loader, []);

$app = new \MPF\App([
    BlogModule::class
], [
    'renderer' => $renderer
]);
$response = $app->run(\GuzzleHttp\Psr7\ServerRequest::fromGlobals());
\Http\Response\send($response);
