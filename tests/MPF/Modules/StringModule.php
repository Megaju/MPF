<?php
namespace Tests\MPF\Modules;

use MPF\Router;

class StringModule
{
    public function __construct(Router $router)
    {
        $router->get('/demo', function(){
            return 'DEMO';
        }, 'demo');
    }
}