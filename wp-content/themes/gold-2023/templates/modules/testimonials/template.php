<?php

$featured_posts = get_sub_field('testimonial');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $featured_post ):
            $review = get_field( 'review', $featured_post->ID ); 
    		$source = get_field( 'source', $featured_post->ID );

        ?>
        <li>
        	<?= $review ?>
        	<?= $source ?>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>




