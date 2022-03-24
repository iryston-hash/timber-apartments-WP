
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo ( 'description' );?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<?php wp_head(); ?>
    </head>

    <body>
        <header class="header" style="background-image: url(<?php the_field('headerbg') ?>);">
            <div class="header__inner">
                <img src="<?php bloginfo ( 'template_url' ); ?>/assets/images/logo.png" alt="Timber house logo">
                <div class="header__name">
                    <?php the_field('header__name') ?>
                </div>
                <a class="phone" href="tel:+75852772217"><?php the_field('header__phone') ?></a>
                <div class="header__title">
                <?php the_field('header__title') ?>
                </div>
                <div class="header__sale">
                    <img src="<?php the_field('header__sale') ?>" alt="Timber house sale badge">
                </div>
            </div>
        </header>