<?php

$heading = get_sub_field('heading');

$groupOne = get_sub_field('image_one');

// $titleOne = $groupOne['title'];
$imageOne = $groupOne['image']['url'] ?? null;
$altTextOne = $groupOne['alt_text'] ?? null;
$descriptionOne = $groupOne['description'] ?? null;
?>

<module-four class='base-template'>

    <figure class='one'>
        <inner-column-2>
            <h2><?= $heading ?></h2>
        </inner-column-2>

        <picture>
            <img src='<?= $imageOne ?>' alt='<?= $altTextOne ?>' loading='lazy'>
        </picture>

        <inner-column-2>
            <figcaption>
                <?= $descriptionOne ?>
            </figcaption>
        </inner-column-2>

    </figure>

</module-four>