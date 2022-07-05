<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controller;

class Login extends Controller
{
    public function __invoke()
    {
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            echo 1;
        }
        $this->view->render(__DIR__ . '/../../templates/login.php');
    }
}
