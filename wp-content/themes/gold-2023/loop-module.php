<?php
if (have_rows('page_modules')) {

  while (have_rows('page_modules')) : the_row();

    $module = get_row_layout();

    // echo $module;

    if ( $module == "module_07") { /* if only these were the same naming convention $question */
      include( getFile("templates/modules/module-seven/template.php") );
    }

  endwhile;
}
