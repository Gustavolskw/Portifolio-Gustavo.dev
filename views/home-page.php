<?php
require_once __DIR__ . '/header.php';
/** @var \App\Controller\HomeController $links */
?>

<section class="mx-md-5 mx-1 h-100 main-content">
    <div class="d-flex justify-content-center">
        <div class=" flex-column">
            <p class="fs-4 text-center">
                <q style="text-shadow: 0px 0px 5px rgb(0, 187, 201);">
                    Eu creio que um dos princípios essenciais da sabedoria é o de se abster das ameaças verbais ou
                    insultos.
                </q>
            </p>
            <p class="fs-5 ps-4">Maquiavel</p>
        </div>
    </div>


    <div class="row separador w-100 mx-md-4" id="redes">
        <div class="col-md-7 h-100 mb-md-1 mb-5 ms-md-0 ms-2">
            <div class="justify-content-center d-flex align-content-center h-75 pt-5">
                <p class="fs-3 text-center fw-bold">Cursando Análise e Desenvolvimento de Sistemas, com foco em
                    desenvolvimento
                    Back-end,
                    banco de dados e Front-end. Possuo habilidades em resolução de problemas, aprendizado
                    rápido e adaptação a novas tecnologias. Busco oportunidades para aplicar meu
                    conhecimento em uma empresa de tecnologia em crescimento.</p>
            </div>
            <div class="d-flex gap-md-5 justify-content-center mt-5 flex-wrap gap-md-1 gap-4">
                <?php foreach ($links as $link): ?>
                    <?php if ($link['name'] == 'Email'): ?>
                        <button id="copyButton"
                            class="btn text-white d-flex align-items-center align-content-center justify-content-center border-white redes-btn">
                            <i class="bi fs-3 <?= $link['icon'] ?>"></i>
                            <h2 class="mt-1"><?= $link['name'] ?></h2>
                        </button>

                    <?php else: ?>
                        <a class="btn text-white d-flex align-items-center align-content-center justify-content-center border-white redes-btn"
                            href="<?= $link['url'] ?>">
                            <i class="bi fs-3 <?= $link['icon'] ?>"></i>
                            <h2 class="mt-1"><?= $link['name'] ?></h2>
                        </a>
                    <?php endif ?>
                <?php endforeach; ?>

            </div>
            <div id="emailAlert" class="alert bg-transparent alert-info text-info w-50 mt-2 mx-auto" role="alert">
                Email Copiado!
            </div>

        </div>
        <div class="col-md-5">
            <div class="img-container d-flex justify-content-center h-100">
                <img class="img-protifolio" src="/assets/img/Gustavo_1.jpeg" alt="">
            </div>
        </div>
    </div>

</section>


<section id="tecnologias" class="separador">
    <div class="mb-5">
        <h2 class="text-center mb-4 fs-2 fw-bold">
            Tecnologias
        </h2>
    </div>

    <?php
    require_once __DIR__ . '/tecnologias.php'
        ?>
</section>


<section id="projetos" class="separador mb-5">
    <div class="mb-5">
        <h2 class="text-center mb-5 fs-2 fw-bold">
            Projetos Principais
        </h2>
    </div>

    <?php
    require_once __DIR__ . '/repositorios.php'
        ?>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>