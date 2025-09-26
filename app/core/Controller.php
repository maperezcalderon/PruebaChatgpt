<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(404);
            echo 'Vista no encontrada';
            return;
        }

        extract($data);
        $contentView = $viewPath;
        require __DIR__ . '/../views/layouts/main.php';
    }
}
