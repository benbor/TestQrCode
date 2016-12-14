<?php

namespace Ciklum\QrGenerator;

interface RendererInterface
{
    function render($text, $width, $height);
}