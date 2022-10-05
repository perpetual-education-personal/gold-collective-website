<?php

function getFile($path) {
    return dirname(__FILE__) . '/' . $path;
}


// disable admin bar
add_filter('show_admin_bar', '__return_false');


// load css into the website's front-end (via wp_head)
function gc_enqueue_styles() {
    wp_enqueue_style('my-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gc_enqueue_styles');


// (function name says what it is ;)
function register_my_menu() {
    register_nav_menu('site-menu', __('Site menu'));
}
add_action('init', 'register_my_menu');


// load css into the website's front-end (via wp_footer)
// ?


// $todo -- remove jquery. copy / paste most code from -- https://support.advancedcustomfields.com/forums/topic/collapse-flexible-content-fields/#post-144624
function acf_toggle_flexible_content_fields() { ?>
    <script type="text/javascript">
        (function($) {
            acf.add_action('load', function($el) {
  
                let $field = $el.find('.acf-field-flexible-content'); // Get flexabile fields
                $field = Array.prototype.slice.call($field); // Convert to array

                // Create button
                let btnClose = document.createElement("a");
                let btnOpen = document.createElement("a");
                btnClose.classList.add('toggle-flex-fields');
                btnClose.style.position = 'absolute';
                btnClose.style.top = '10px';
                btnClose.style.right = '70px';
                btnClose.style.cursor = 'pointer';
                btnClose.style.zIndex= '10';
                btnClose.style.padding= '5px';
                btnClose.style.userSelect = 'none';
                btnClose.style.fontFamily = 'monospace';
                btnClose.style.border = '1px solid #2271b1';
                btnClose.innerText = 'Close';

                btnOpen.classList.add('toggle-flex-fields');
                btnOpen.style.position = 'absolute';
                btnOpen.style.top = '10px';
                btnOpen.style.right = '20px';
                btnOpen.style.cursor = 'pointer';
                btnOpen.style.zIndex= '10';
                btnOpen.style.padding= '5px';
                btnOpen.style.userSelect = 'none';
                btnOpen.style.fontFamily = 'monospace';
                btnOpen.style.border = '1px solid #2271b1';
                btnOpen.innerText = 'Open';
  
                $field.forEach(function(container) { // Loop through all fields on the page

                    // Prepend button on top of the container
                    container.prepend(btnClose);
                    container.prepend(btnOpen);

                    // Get toggleable fields
                    const item = container.querySelectorAll(".layout");

                    // Add click event to button
                    btnClose.addEventListener('click', function(event) {
                        event.preventDefault();
                        item.forEach(function(item) {
                            item.classList.add('-collapsed');
                        });
                    });

                    btnOpen.addEventListener('click', function(event) {
                        event.preventDefault();
                        item.forEach(function(item) {
                            item.classList.remove('-collapsed');
                        });
                    });

                });


            });
        })(jQuery);
    </script>
  <?php
}
  add_action('acf/input/admin_footer', 'acf_toggle_flexible_content_fields');