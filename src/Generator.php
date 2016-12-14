<?php

namespace Ciklum\QrGenerator;

class Generator
{

    /**
     * @var RendererInterface
     */
    private $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function generate($text, $width, $height)  // text, width, height
    {
        return $this->renderer->render($text, $width, $height);
    }
}