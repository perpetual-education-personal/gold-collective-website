<module-five class='base-template'>

    <scroll-container>
        <ul>
            <li>
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
            </li>

            <li>
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
            </li>

            <li>
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
            </li>
        </ul>
    </scroll-container>


</module-five>