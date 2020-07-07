<?php


namespace PhpLearning\Controllers;

use PhpLearning\View\View;


class SupportController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function about()
    {
        $this->view->renderHtml('about.php');
    }
}
