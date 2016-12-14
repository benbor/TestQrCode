<?php

namespace Ciklum\QrGenerator\Tests\Unit;

use Ciklum\QrGenerator\Generator;
use Ciklum\QrGenerator\Renderer\GoogleChartsRenderer;
use Ciklum\QrGenerator\RendererInterface;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGenerateCallRenderer()
    {
        $renderer = $this->getMock(RendererInterface::class);
        $renderer->expects($this->once())
            ->method('render')
            ->with('TrekkSoft', 50, 60);

        $qrCode = new Generator($renderer);
        $qrCode->generate('TrekkSoft', 50, 60);  // text, width, height
    }

    public function testGenerateReturnData()
    {
        $imgData = "ThisIsBinaryDataOfImage";

        $renderer = $this->getMock(RendererInterface::class);
        $renderer->method('render')
            ->willReturn($imgData);

        $qrCode = new Generator($renderer);
        $qrCodeData = $qrCode->generate('TrekkSoft', 50, 60);  // text, width, height

        $this->assertEquals($imgData, $qrCodeData);
    }
}