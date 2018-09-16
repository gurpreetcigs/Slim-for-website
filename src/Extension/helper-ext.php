<?php

namespace App\Extension;

class HelperExt extends \Slim\Views\TwigExtension
{
    public function __construct()
    {
    }

    

    public function IncludeHelper()
    {
        return \App\Helper::assets();
    }
}