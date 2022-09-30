<?php
if (have_rows('page_modules')) {

  while (have_rows('page_modules')) : the_row();

    $module = get_row_layout();

    // echo $module;


    include(getFile("templates/modules/$module/template.php"));


  endwhile;
}
