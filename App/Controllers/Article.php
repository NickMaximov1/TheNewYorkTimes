<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controller;

class Article extends Controller
{
    public function __invoke()
    {

        $this->view->articles = \App\Models\Article::findById($_GET['id']);
        echo $this->view->render(__DIR__ . '/../../templates/article.php');
    }
}