<?php

namespace Ciklum\QrGenerator\Tests\Functional;

use Ciklum\QrGenerator\Generator;
use Ciklum\QrGenerator\Renderer\GoogleChartsRenderer;
use Ciklum\QrGenerator\RendererInterface;
use GuzzleHttp\Client;

class GenerateLogicTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratorOnGoogleRenderer()
    {
        $generator = new Generator(new GoogleChartsRenderer(new Client()));

        $this->assertStringEqualsFile(
            __DIR__ . '/fixture/trekk_soft_50x50.png',
            $generator->generate('Trekk Soft', 50, 50)
        );
        $this->assertStringEqualsFile(
            __DIR__ . '/fixture/another_value_200x100.png',
            $generator->generate('Another Value', 200, 100)
        );

    }
}
