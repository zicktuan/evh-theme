<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVH</title>
    <link rel="icon" href="<?php echo get_template_directory_uri() . "/assets/images/favicon.ico"?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/reset.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/index.css"?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/js/taildwind.js"?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</head>

<body>

    <section class="menu container flex items-center md:max-w-none">
        <!-- <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/logo.png" alt="logo evh" class="w-[67px] md:w-[41px]" /> -->
        <?php if (!empty($optionTheme['awe_header_logo'])): ?>
        <img loading="lazy" src="<?php echo esc_url($optionTheme['awe_header_logo']) ?>" alt="logo evh" class="w-[67px] md:w-[41px]" />
        <span class="text-menu text-[50px] font-bold ml-[10px] cursor-pointer md:hidden">EVH</span>
        <?php endif ?>

        <?php
            wp_nav_menu(
                [
                    'theme_location' => 'awe-header-menu',
                    'walker'         => new CustomPrimaryMenuWalker(),
                    'container' => '',
                    'items_wrap'           => '<div class="space-x-[37px] text-menu font-semibold text-lg ml-[153px] md:hidden">%3$s</div>',
                ]
            );
        ?>

        <?php if(!empty($optionTheme['awe_header_url_down'])): ?>
        <div
            class="btn w-[184px] h-[55px] bg-menu text-white rounded-[72px] flex items-center justify-center ml-auto md:hidden">
            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/download.png" alt="icon download" />
            <span class="pl-2" style="cursor: pointer;">Download</span>
        </div>
        <?php endif ?>

        <!-- mobile menu -->
        <div
            class="w-[35px] h-[35px] bg-black p-2 space-y-1 flex justify-center flex-col ml-auto invisible md:visible menu-bugger">
            <div class="bg-white h-0.5 w-full"></div>
            <div class="bg-white h-0.5 w-full"></div>
            <div class="bg-white h-0.5 w-full"></div>
        </div>

        <?php
            wp_nav_menu(
                [
                    'theme_location' => 'awe-header-menu',
                    'walker'         => new CustomPrimaryMenuWalker(),
                    'container' => '',
                    'items_wrap'           => '<div class="hidden menu-mobile">%3$s</div>',
                ]
            );
        ?>
    </section>