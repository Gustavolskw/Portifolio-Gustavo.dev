<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller;

class Error404Controller implements Controller\Controller
{
    public function processaRequisicao(): void
    {
        http_response_code(404);
    }
}
