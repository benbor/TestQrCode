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

    /**
     * @param $text string Text wich should coded
     * @param $width int
     * @param $height int
     * @return
     */
    public function generate($text, $width, $height)  // text, width, height
    {
        return $this->renderer->render($text, $width, $height);
    }
}
