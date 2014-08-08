<?php

namespace Slim\Views;

class TwigView extends \Slim\Views\Twig
{
    public function render($template, $data = null)
    {
        $env = $this->getInstance();
        $parser = $env->loadTemplate($template . PATH_VIEW_FILE_TYPE);

        $data = array_merge($this->all(), (array) $data);

        return $parser->render($data);
    }
}