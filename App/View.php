<?php
declare(strict_types=1);

namespace App;

class View
{
    protected $data;

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {

            return $this->data[$name] ?? null;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function render(string  $template): string
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display(string $template)
    {
        echo $this->render($template);
    }
}