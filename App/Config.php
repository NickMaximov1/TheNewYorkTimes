<?php

namespace App;

class Config
{
    protected array $data;

    public function __construct()
    {
       foreach((include __DIR__ . '/../templates/config.php')['db'] as $key => $value){
           $this->data[$key] = $value;
       }
    }

    public function getData(): array
    {
        return $this->data;
    }

}