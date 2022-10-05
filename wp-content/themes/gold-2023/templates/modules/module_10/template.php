<module-ten class='base-template'>
    <h2 class='attention-voice'><?= $heading ?></h2>

    <scroll-container>
        <figure class='one'>
            <picture>
                <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
            </picture>
            <?php if ($captionOne) { ?>
                <figcaption>
                    <p><?= $captionOne ?></p>
                </figcaption>

            <?php } ?>
        </figure>

        <figure class='two'>
            <picture>
                <img src='<?= $imageTwo ?>' alt='<?= $altTextTwo ?>' loading='lazy'>
            </picture>
            <?php if ($captionTwo) { ?>
                <figcaption>
                    <p><?= $captionTwo ?></p>
                </figcaption>

            <?php } ?>
        </figure>

        <figure class='three'>
            <picture>
                <img src='<?= $imageThree ?>' alt='<?= $altTextThree ?>' loading='lazy'>
            </picture>
            <?php if ($captionThree) { ?>
                <figcaption>
                    <p><?= $captionThree ?></p>
                </figcaption>

            <?php } ?>
        </figure>
    </scroll-container>
    <div>
        <p><?= $intro ?></p>

        <a href="<?= $link_url ?>"><?= $link_title ?></a>
    </div>

</module-ten>