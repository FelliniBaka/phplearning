<?php


namespace PhpLearning\Controllers;

use PhpLearning\Models\Articles\Article;
use PhpLearning\View\View;
use PhpLearning\Models\Users\User;


class ArticlesController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ .DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'templates');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null){
            $this->view->renderHtml('errors'.DIRECTORY_SEPARATOR.'error404.php',[],404);
            return;
        }

        $this->view->renderHtml('articles'.DIRECTORY_SEPARATOR.'view.php', [
                'article' => $article
            ]);
    }
}