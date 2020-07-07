<?php
namespace PhpLearning\Controllers;

use PhpLearning\Models\Articles\Article;
use PhpLearning\View\View;

class MainController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__.'/../../../templates');
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

}