<?php

namespace Ciklum\QrGenerator;

interface RendererInterface
{
    /**
     * @param $text string That value is a text wich should coded
     * @param $width
     * @param $height
     * @return mixed
     */
    function render($text, $width, $height);
}
