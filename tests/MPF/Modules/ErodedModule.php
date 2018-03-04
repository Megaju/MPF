<?php
namespace Tests\MPF\Modules;

use MPF\Router;

class ErodedModule
{
    public function __construct(Router $router)
    {
        $router->get('/demo', function(){
           return new \stdClass();
        }, 'demo');
    }
}