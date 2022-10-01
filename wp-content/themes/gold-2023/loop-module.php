<?php
if (have_rows('page_modules')) {

  while (have_rows('page_modules')) : the_row();

    $module = get_row_layout();
?>


    <?php include(getFile('loop-variables.php')); ?>



    <section>
      <inner-column>

        <?php include(getFile("templates/modules/$module/template.php")); ?>
      </inner-column>
    </section>

<?php
  endwhile;
}
?>