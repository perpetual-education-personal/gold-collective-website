<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo wp_get_document_title(); ?></title>

    <meta name='description' content="This is the Gold Collective website.">
    <meta property="og:image" content=" <?php echo get_template_directory_uri() . '/images/meta.png' ?>">

    <?php 
        wp_head(); 
        // WP function to include any styles, scripts, or things before* page load
    ?>
</head>

<body <?php body_class(); ?>>

    <header class='site-header'>
        <inner-column>
            <?php include('templates/modules/site-menu/template.php') ?>
        </inner-column>
    </header>