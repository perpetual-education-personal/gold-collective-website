
	

<?php

if( have_rows('actions') ):

    // Loop through rows.
    while( have_rows('actions') ) : the_row();

        // Load sub field value.
        $callToAction = get_sub_field('call-to-action');
	     $link = get_sub_field('link');
        // Do something...


        echo "<div class='generic-button'>";
        echo "<a href='$link[url]?>'>$callToAction</a>";
        echo "</div>";

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;




