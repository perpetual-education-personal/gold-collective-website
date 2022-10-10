<module-ten class='base-template'>
    <h2 class='attention-voice'><?= $heading ?></h2>

    <scroll-container>
        <figure class='one'>
            <picture>
                <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
            </picture>
            <?php if ($descriptionOne) { ?>
                <figcaption>
                    <p><?= $descriptionOne ?></p>
                </figcaption>

            <?php } ?>
        </figure>

        <figure class='two'>
            <picture>
                <img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
            </picture>
            <?php if ($descriptionTwo) { ?>
                <figcaption>
                    <p><?= $descriptionTwo ?></p>
                </figcaption>

            <?php } ?>
        </figure>

        <figure class='three'>
            <picture>
                <img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
            </picture>
            <?php if ($descriptionThree) { ?>
                <figcaption>
                    <p><?= $descriptionThree ?></p>
                </figcaption>

            <?php } ?>
        </figure>
    </scroll-container>
    <div>
        <text-content><?=$intro?></text-content>

        <a href="<?= $link_url ?>"><?= $link_title ?></a>
    </div>

</module-ten>