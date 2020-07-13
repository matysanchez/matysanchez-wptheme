<?php /* Template Name: Blank */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <base href="https://matysanchez.com/">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150327458-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-150327458-1');
    </script>
</head>
<body>
    <main id="content" class="category">
        <div class="container has-content" id="container">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <article>
                <?php the_content(); ?>
            </article>
        </div>
    </main>
</body>
</html>