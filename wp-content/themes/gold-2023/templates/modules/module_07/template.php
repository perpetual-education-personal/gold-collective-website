<module-seven class="base-template">
    <div class="module-text">
        <h2 class="attention-voice"><?=$heading?></h2>

        <p class="intro"><?= $intro ?></p>
    </div>

    <figure class="one">
        <picture>
            <img src="<?=$imageOne?>" alt="<?=$altTextOne?>" loading='lazy'>
        </picture>
        <?php if($captionOne) { ?>
            <figcaption>
                <p><?=$captionOne?></p>
            </figcaption>
        <?php } ?>
    </figure>

    <figure class="two">
        <picture>
            <img src="<?=$imageTwo?>" alt="<?=$altTextTwo?>" loading='lazy'>
        </picture>
        <?php if($captionTwo) { ?>
            <figcaption>
                <p><?=$captionTwo?></p>
            </figcaption>
        <?php } ?>
    </figure>

    <figure class="three">
        <picture>
            <img src="<?=$imageThree?>" alt="<?=$altTextThree?>" loading='lazy'>
        </picture>
        <?php if($captionThree) { ?>
            <figcaption>
                <p><?=$captionThree?></p>
            </figcaption>
        <?php } ?>
    </figure>

</module-seven>