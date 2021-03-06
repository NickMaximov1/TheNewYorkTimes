<?php
declare(strict_types=1);

namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function __invoke();
}