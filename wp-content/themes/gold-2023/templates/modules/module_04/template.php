<?php
// Reminder: "get_" returns, "the_" echoes
$image = get_sub_field('image');
$alttext = get_sub_field('alttext');
$caption = get_sub_field('caption');

?>


<module-four class='base-template'>

    <figure class='one'>
        <picture>
            <img src='<?= $image ?>' alt='<?= $alttext ?>'>
        </picture>
        <figcaption>
            <p><?= $caption ?></p>
        </figcaption>
    </figure>

</module-four>