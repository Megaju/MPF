<?php

use MPF\Renderer\RendererInterface;
use MPF\Renderer\TwigRendererFactory;
use MPF\Router\RouterTwigExtension;

return [
    'views.path' => dirname(__DIR__) . '/views',
    'twig.extensions' => [
        \DI\get(RouterTwigExtension::class)
    ],
    \MPF\Router::class => \DI\object(),
    RendererInterface::class => \DI\factory(TwigRendererFactory::class)
];