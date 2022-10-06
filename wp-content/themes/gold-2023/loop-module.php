<?php if (have_rows('page_modules')) { ?>

  <?php while (have_rows('page_modules')) : the_row(); /* note this alternate syntax */
    $module = get_row_layout();
  ?>


    <?php include(getFile('loop-variables.php')); ?>



    <section class='has-<?= $module ?>' id='<?= $module ?>'>
      <inner-column>

        <?php include(getFile("templates/modules/$module/template.php")); ?>

      </inner-column>
    </section>

  <?php endwhile; ?>

<?php } ?>