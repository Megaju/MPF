<?php
namespace Test\MPF;

use MPF\Renderer;
use MPF\Renderer\PHPRenderer;
use PHPUnit\Framework\TestCase;

class RendererTest extends TestCase
{
    private $renderer;

    public function setUp() {
        $this->renderer = new Renderer\PHPRenderer(__DIR__ . '/views');
    }

    public function testRenderTheRightPath() {
        $this->renderer->addPath('blog', __DIR__ . '/views');
        $content = $this->renderer->render('@blog/demo');
        $this->assertEquals('Hello World !', $content);
    }

    public function testRenderTheDefaultPath() {
        $content = $this->renderer->render('demo');
        $this->assertEquals('Hello World !', $content);
    }

    public function testRenderWithParams() {
        $content = $this->renderer->render('demoparams', ['name' => 'Julien']);
        $this->assertEquals('Hello Julien', $content);
    }

    public function testGlobalParameters() {
        $this->renderer->addGlobal('name', 'Julien');
        $content = $this->renderer->render('demoparams', ['name' => 'Julien']);
        $this->assertEquals('Hello Julien', $content);
    }
}