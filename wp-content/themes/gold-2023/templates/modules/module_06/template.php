<?php
$heading = get_sub_field('heading');
$intro = get_sub_field('intro');

$groupOne = get_sub_field('image_one');

// $titleOne = $groupOne['title'];
$imageOne = $groupOne['image']['url'] ?? null;
$altTextOne = $groupOne['alt_text'] ?? null;
$descriptionOne = $groupOne['description'] ?? null;

?>

<module-six class="base-template">

    <div class="module-text">
        <h2 class="attention-voice"><?= $heading ?></h2>
        <text-content><?= $intro ?></text-content>
    </div>

    <figure class="one">
        <picture>
            <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
        </picture>

        <?php if ($descriptionOne) { ?>
            <figcaption>
                <?= $descriptionOne ?>
            </figcaption>
        <?php } ?>

    </figure>

</module-six>