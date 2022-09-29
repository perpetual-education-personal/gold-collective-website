<?php
    $intro = get_sub_field('intro'); // 'get' doesn't echo
    // this is a pretty clean way to prepare the variables
    // and keep the logic outside of the template (as much as possible)
?>

<section>
    <inner-column>

        <module-seven>
            <text-content>
                <h2><?php the_sub_field('heading'); // 'the' echos ?></h2>

                <p><?=$intro?></p>
            </text-content>

            <figure class="one">
                <picture>
                    <img src="https://peprojects.dev/images/portrait.jpg" alt="">
                </picture>
            </figure>

            <figure class="two">
                <picture>
                    <img src="https://peprojects.dev/images/portrait.jpg" alt="">
                </picture>

                <?php if ( get_sub_field('caption_1')) { ?>
                    <figcaption>
                        <?php the_sub_field('caption_1'); ?>
                    </figcaption>
                <?php } ?>
            </figure>

            <figure class="three">
                <picture>
                    <img src="https://peprojects.dev/images/portrait.jpg" alt="">
                </picture>

                <figcaption>Figure three caption</figcaption>
            </figure>
        </module-seven>

    </inner-column>
</section>
