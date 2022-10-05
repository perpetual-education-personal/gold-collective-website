<module-six class="base-template">

    <div class="module-text">
        <h2 class="attention-voice"><?=$heading?></h2>
        <p class="intro"><?=$intro?></p>
    </div>

    <figure class="one">
        <picture>
            <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
        </picture>
            
        <?php if ($captionOne) { ?>
            <figcaption>
                <p><?= $captionOne ?></p>
            </figcaption>
        <?php } ?>

    </figure>

</module-six>