<?php
/** @var \App\Controller\HomeController $techs */
?>
<div class="row justify-content-center mx-1 gap-5 pt-3">
    <?php $index = 0;
    foreach ($techs as $tech): ?>
        <div class="col-md-2 col-4">
            <img class="img-tech icon-tech<?= $index ?>" src="assets/languages/<?= $tech['icon'] ?>"
                alt="icone do(a) <?= $tech['name'] ?>">
        </div>
        <?php
        $index++;
    endforeach; ?>
</div>