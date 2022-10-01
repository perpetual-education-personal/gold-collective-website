<?php if (have_rows('page_modules')) { ?>

  <?php while (have_rows('page_modules')) : the_row(); /* note this alternate syntax */
    $module = get_row_layout();
    ?>

    <section>
      <inner-column>

        <?php include(getFile("templates/modules/$module/template.php")); ?>

      </inner-column>
    </section>

  <?php endwhile; ?>

<?php } ?>