<module-seven class="base-template">
    <div class="module-text">
        <h2 class="attention-voice"><?=$heading?></h2>

        <text-content><?=$intro?></text-content>
    </div>

    <figure class="one">
        <picture>
            <img src="<?=$imageOne?>" alt="<?=$altTextOne?>" loading='lazy'>
        </picture>
        <?php if($descriptionOne) { ?>
            <figcaption>
                <?=$descriptionOne?>
            </figcaption>
        <?php } ?>
    </figure>

    <figure class="two">
        <picture>
            <img src="<?=$imageTwo?>" alt="<?=$altTextTwo?>" loading='lazy'>
        </picture>
        <?php if($descriptionTwo) { ?>
            <figcaption>
                <?=$descriptionTwo?>
            </figcaption>
        <?php } ?>
    </figure>

    <figure class="three">
        <picture>
            <img src="<?=$imageThree?>" alt="<?=$altTextThree?>" loading='lazy'>
        </picture>
        <?php if($descriptionThree) { ?>
            <figcaption>
                <?=$descriptionThree?>
            </figcaption>
        <?php } ?>
    </figure>

</module-seven>