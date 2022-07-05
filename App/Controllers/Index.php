<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Models\Article;
use App\Controller;

class Index extends Controller
{
    public function __invoke()
    {

        $this->view->articles = Article::findAll();
        echo $this->view->render(__DIR__ . '/../../templates/index.php');
    }
}