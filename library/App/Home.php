<?php

namespace App;

use Dewdrop\View\View;

class Home
{
    public function respond()
    {
        $view = new View();
        $view->setScriptPath(__DIR__ . '/view-scripts');
        return $view->render('home.phtml');
    }
}
