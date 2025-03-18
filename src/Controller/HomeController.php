<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController implements Controller
{

    private $techs = [
        [
            'name' => 'PHP',
            'icon' => 'php.png'
        ],
        [
            'name' => 'Java',
            'icon' => 'java.png'
        ],
        [
            'name' => 'Javascript',
            'icon' => 'js.png'
        ],
        [
            'name' => 'TypeScript',
            'icon' => 'ts.png'
        ],
        [
            'name' => 'Angular',
            'icon' => 'Angular.png'
        ],
        [
            'name' => 'Vue',
            'icon' => 'Vue.png'
        ],
        [
            'name' => 'Mysql',
            'icon' => 'mysql.png'
        ],
        [
            'name' => 'PostgreSQL',
            'icon' => 'postgre.png'
        ],
        [
            'name' => 'MongoDB',
            'icon' => 'mongoDB.png'
        ],
        [
            'name' => 'Docker',
            'icon' => 'docker.png'
        ],
        [
            'name' => 'Laravel',
            'icon' => 'Laravel.png'
        ],
        [
            'name' => 'Spring Boot',
            'icon' => 'springBoot.png'
        ],
    ];

    private $links = [
        [
            "name" => "Linkedin",
            "url" => "https://www.linkedin.com/in/gustavoluisschmidt/",
            "icon" => "bi-linkedin"
        ],
        [
            "name" => "GitHub",
            "url" => "https://github.com/Gustavolskw",
            "icon" => "bi-github"
        ],
        [
            "name" => "Email",
            "url" => "mailto:gustavolschmidt13@gmial.com",
            "icon" => "bi-envelope"
        ]
    ];


    public function processaRequisicao(): void
    {
        $links = $this->links;
        $techs = $this->techs;
        require_once __DIR__ . '/../../public/views/home-page.php';
    }
}

