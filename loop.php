<?php
global $myplugin;
$optionTheme  = $myplugin->themeSettings->getSettings();
?>
<section class="mt-[55px] pl-[150px] pt-[147px] text-white relative container banner md:px-[31px] md:pt-[33px]">
    <div class="max-w-[462px] md:max-w-none">
        <span class="text-[46px] leading-[64px] font-semibold md:text-[36px] md:leading-[50px]">
            <?php echo !empty($optionTheme['blog_header_title_bg']) ? $optionTheme['blog_header_title_bg'] : '' ?>
        </span>
        <p class="mt-[17px] text-xl leading-[30px] md:text-sm">
            <?php echo !empty($optionTheme['blog_header_content']) ? $optionTheme['blog_header_content'] : '' ?>
            <br />
            
            <?php echo !empty($optionTheme['blog_header_short_content']) ? $optionTheme['blog_header_short_content'] : '' ?>
        </p>
    </div>
    <div class="mt-[26px] md:hidden">
        <span class="text-xl font-semibold"> Tải Ứng Dụng Tại Đây </span>
        <div class="space-x-[13px] mt-[17px] flex cursor-pointer">
            <?php echo !empty($optionTheme['blog_down_apple_store']) ? '<img src="'. get_template_directory_uri() . "/assets/images/appstore.png".'" alt="" />' : '' ?>
            <?php echo !empty($optionTheme['blog_down_gg_play']) ? '<img src="'.get_template_directory_uri() . "/assets/images/gg-play.png".'" alt="" />' : '' ?>
        </div>
    </div>
    <div class="mt-[181px] space-y-[15px] hidden md:block">
        <div class="action text-[10px] px-0.5 py-1 border border-solid border-[#0E43A6] rounded-md w-fit">D O W N L O A D</div>
        <?php echo !empty($optionTheme['blog_down_apple_store']) ? '<img src="'. get_template_directory_uri() . "/assets/images/appstore.png".' " alt="" class="w-[119px]" />' : '' ?>
        <?php echo !empty($optionTheme['blog_down_gg_play']) ? '<img src="'.get_template_directory_uri() . "/assets/images/gg-play.png".'" alt="" class="w-[119px]" />' : '' ?>
    </div>
    <img src="<?php echo get_template_directory_uri() . "/assets/images/mockup-phone.png"?>" alt="mockup phone" class="absolute bottom-0 right-[105px] md:hidden" />
    <img src="<?php echo get_template_directory_uri() . "/assets/images/mockup-phone-mb.png"?>" alt="mockup phone" class="absolute bottom-0 right-0 hidden md:block" />
</section>

<section class="mt-[100px] container news-view md:mt-[50px]">
    <div class="grid grid-cols-3 gap-6 md:grid-cols-1">
        <?php get_template_part('blog', 'grid') ?>
    </div>
</section>


