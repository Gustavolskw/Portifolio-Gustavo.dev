# Portfólio do Gustavo

## Visão Geral

Este portfólio apresenta as habilidades de Gustavo Luis Schmidt em desenvolvimento de software. Construído usando PHP, JavaScript, CSS e Bootstrap, ele segue a arquitetura Model-View-Controller (MVC). Inclui uma apresentação das tecnologias utilizadas, projetos principais e links de contato.

## Funcionalidades

- **Arquitetura MVC**: Organizado na estrutura clássica Model-View-Controller.
- **Design Responsivo**: Layout totalmente responsivo para todos os dispositivos.
- **Tecnologias Utilizadas**: Exibe conhecimentos em PHP, Java, JavaScript e mais.
- **Projetos**: Destaque para projetos principais com links para repositórios no GitHub.
- **Links de Contato**: Links diretos para LinkedIn, GitHub e e-mail.

## Estrutura do Projeto

```
├── .idea
│ ├── .gitignore
│ ├── .name
│ ├── PortifolioGustavo.iml
│ ├── modules.xml
│ └── php.xml
├── .vscode
│ └── settings.json
├── composer.json
├── composer.lock
├── config
│ └── routes.php
├── public
│ ├── assets
│ │ ├── img
│ │ │ ├── Gustavo_1.jpeg
│ │ │ └── dev.png
│ │ └── languages
│ │ ├── (Linguagem/Framework) .png
│ ├── css
│ │ ├── bootstrap-icons.css
│ │ ├── bootstrap.min.css
│ │ ├── fonts
│ │ │ ├── bootstrap-icons.woff
│ │ │ └── bootstrap-icons.woff2
│ │ ├── langIcons.css
│ │ └── styles.css
│ ├── index.php
│ └── js
│ ├── bootstrap.bundle.min.js
│ └── script.js
├── src
│ └── Controller
│ ├── Controller.php
│ ├── Error404Controller.php
│ └── HomeController.php
├── vendor
│ ├── autoload.php
│ ├── composer
│ │ ├── ClassLoader.php
│ │ ├── InstalledVersions.php
│ │ ├── LICENSE
│ │ ├── autoload_classmap.php
│ │ ├── autoload_namespaces.php
│ │ ├── autoload_psr4.php
│ │ ├── autoload_real.php
│ │ ├── autoload_static.php
│ │ ├── installed.json
│ │ └── installed.php
│ └── twbs
│ ├── bootstrap-icons
│ └── ...
└── views
├── footer.php
├── header.php
├── home-page.php
├── repositorios.php
└── tecnologias.php
```

## Tecnologias

- **PHP**: Lógica de back-end e roteamento com MVC.
- **JavaScript**: Interatividade e conteúdo dinâmico.
- **CSS**: Estilização personalizada com Bootstrap.
- **Bootstrap**: Componentes de UI e sistema de grid.
- **Composer**: Gerenciamento de dependências em PHP.
- **GitHub & LinkedIn**: Links externos para contato.

## Principais Funcionalidades e Páginas

1. **Página Inicial (home-page.php)**:

   - Introdução e uma citação pessoal.
   - Ícones de tecnologias.
   - Links sociais com funcionalidade de copiar e-mail.

2. **Tecnologias (tecnologias.php)**:

   - Exibição do conjunto de tecnologias com ícones.

3. **Projetos (repositorios.php)**:
   - Lista dos principais projetos com descrições e links para o GitHub.

## Como Executar o Projeto Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/yourusername/portifolio.git
   cd portifolio
   ```

## Instale as dependências:

```bash
composer install
```

## Inicie um servidor de teste PHP

```
php -S localhost:8000 -t public
```
