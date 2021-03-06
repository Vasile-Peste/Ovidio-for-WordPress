<?php
$css_directory_uri = WordPressUtilities::get_css_url();
$js_directory_uri = WordPressUtilities::get_js_url();
$theme = wp_get_theme();
?>
<!DOCTYPE html>
<html lang="<?php bloginfo("language"); ?>" dir="ltr">
    <!-- Ovidio version <?php echo $theme["Version"]; ?>. -->
    <!-- Designed by Vasile Pește. -->
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $css_directory_uri; ?>/box-model.css">
        <link rel="stylesheet" href="<?php echo $css_directory_uri; ?>/global.css">
        <link rel="stylesheet" href="<?php echo $css_directory_uri; ?>/interface.css">
        <link rel="stylesheet" href="<?php echo $css_directory_uri; ?>/override.css">
		<script type="text/javascript" src="<?php echo $js_directory_uri; ?>/prism.min.js" async></script>
        <!-- <script type="text/javascript" src="<?php echo $js_directory_uri; ?>/ovidio.js"></script> -->
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
    </head>
    <body class="flex flex--full">
        <header class="flex flex--full header header--triangle">
            <div class="flex flex--full container">
                <!-- Header Menu -->
                <nav class="flex flex--full flex--vertical nav">
                    <!-- Left Layout -->
                    <div class="flex flex--semi">
                        <?php $menu = wp_get_nav_menu_object(get_nav_menu_locations()["header_left_column"]); ?>
                        <?php if ($menu): foreach (wp_get_nav_menu_items($menu -> term_id) as $item): ?>
                        <a href="<?php echo $item -> url; ?>" class="nav__item"><?php echo $item -> title; ?></a>
                        <?php endforeach; endif; ?>
                    </div>
                    <!-- / Left Layout -->
                    <!-- Right Layout -->
                    <div class="flex flex--semi flex--end flex--right">
						<?php get_search_form(true); ?>
                    </div>
                    <!-- / Right Layout -->
                </nav>
                <!-- / Header Menu -->
            </div>
            <aside class="flex flex--full flex--center flex--vertical author">
                <img src="https://www.malgol.com/wp-content/uploads/2019/08/vasile.jpg" alt="" class="image">
                <p class="paragraph">
                    «I'm Vasile Pește,<br>
                    I study how information is represented and manipulated,<br>
                    I share ideas with the world.»<br>
                    <a href="https://twitter.com/vasile_peste" rel="nofollow" class="twitter-follow-button">Follow @vasile_peste</a>
                </p>
            </aside>
            <pre class="flex flex--full stream">
                <code id="header-left-stream-text" class="stream__text stream__text--repeat-y">
                    /**
                     * sort Used to order an array of integers in ascending order (O(n)).
                     * @param {Array} arr
                     * @return {Promise}
                     */
                    
                    function sort (arr) {
                        return new Promise(resolve => {
                            const sorted = [];
                            
                            for (const item of arr) {
                                setTimeout(item => sorted.push(item), item, item);
                            }
                            
                            setTimeout(() => resolve(sorted), arr.reduce((a, b) => a + b, 0) + 1);
                        });
                    }
                </code>
                <code class="stream__text stream__text--repeat-y stream__text--reverse">
                    «Nullam elementum blandit molestie.
                    Aenean condimentum lectus ut felis.
                    Phasellus fringilla nisl tincidunt dolor.»
                    
                    «Nam quis ante sed neque rhoncus.
                    Proin porta, turpis quis iaculis.
                    Maecenas tristique vulputate magna, vel laoreet.»
                    
                    «Nullam lobortis turpis a tempor molestie.
                    Maecenas fringilla nisl at malesuada porta.»
                </code>
            </pre>
        </header>
        <main class="flex flex--full">
            <div class="flex flex--full flex--center">