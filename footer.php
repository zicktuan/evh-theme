<!-- footer -->
<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<footer class="mt-[170px] relative footer">
        <div class="inner">
            <div class="contact">
                <span class="text-white text-[40px] font-semibold md:hidden">Liên Hệ Chúng tôi</span>
                <input v-model="text" type="text" class="input" placeholder="Enter your email" />
                <div class="ml-auto uppercase text-white text-[18px] flex items-center justify-center cursor-pointer btn">
                    Subscribe
                </div>
            </div>
            <div class="content flex md:hidden">
                <div class="left flex flex-col items-center [h-253px] pr-[72px] border-r border-solid border-[#C4C4C4]">
                    <?php if (!empty($optionTheme['awe_footer_logo'])): ?>
                    <img loading="lazy" src="<?php echo esc_url($optionTheme['awe_footer_logo']) ?>" alt="" class="logo" />
                    <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/company-name.png" alt="" class="block mt-[35px]" />
                    <?php endif ?>
                    
                    <div class="flex items-center justify-between space-x-[27px] mt-4">
                        <?php if (!empty($optionTheme['awe_social_ig'])): ?>
                            <a href="<?php echo $optionTheme['awe_social_ig'] ?>">
                                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Insta.png" alt="" />
                            </a>
                        <?php endif ?>
                        <?php if (!empty($optionTheme['awe_social_fb'])): ?>
                            <a href="<?php echo $optionTheme['awe_social_fb'] ?>">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Fb.png" alt="" />
                            </a>
                        <?php endif ?>
                        <?php if (!empty($optionTheme['awe_social_tw'])): ?>
                            <a href="<?php echo $optionTheme['awe_social_tw'] ?>">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Twiter.png" alt="" />
                            </a>
                        <?php endif ?>
                        <?php if (!empty($optionTheme['awe_social_lin'])): ?>
                            <a href="<?php echo $optionTheme['awe_social_lin'] ?>">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/In.png" alt="" />
                            </a>
                        <?php endif ?>
                        <?php if (!empty($optionTheme['awe_social_youtube'])): ?>
                            <a href="<?php echo $optionTheme['awe_social_youtube'] ?>">
                            <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Youtube.png" alt="" />
                            </a>
                        <?php endif ?>
                    </div>
                </div>
                <div class="pl-5 flex-1">
                    <span class="text-menu font-medium text-[30px]">Menu</span>
                    <div class="flex mt-2">
                        <ul class="text-xl leading-[40px]">
                            <li>Trang Chủ</li>
                            <li>Dịch Vụ</li>
                            <li>Đội Ngũ</li>
                            <li>Tin Tức</li>
                            <li>Tuyển Dụng <span class="text-base px-3 bg-[#39AFBA] rounded-[15px] text-white">Offer</span></li>
                        </ul>
                        <ul class="ml-[29px] text-xl leading-[40px]">
                            <li>Liên hệ</li>
                            <li>Điều khoản dịch vụ</li>
                            <li>Chính sách bảo mật</li>
                            <li>Quy định sử dụng</li>
                        </ul>
                    </div>
                </div>
                <div class="pl-[57px] w-[331px]">
                    <?php if(!empty($optionTheme['awe_footer_address'])):?>
                    <span class="text-menu font-medium text-[30px]">Address</span>
                    <p class="text-xl leading-[40px]">
                        <?php echo $optionTheme['awe_footer_address']?>
                    </p>
                    <?php endif ?>
                    <?php echo (!empty($optionTheme['awe_phone_online'])) ? '<p class="text-xl leading-[40px]">hotline: '.$optionTheme['awe_phone_online'].'</p>' : ''?>
                    <?php echo (!empty($optionTheme['awe_phone_email'])) ? '<p class="text-xl leading-[40px]">'.$optionTheme['awe_phone_email'].'</p>' : ''?>
                </div>
            </div>
            <div class="mt-[26px] flex justify-end space-x-[42px] md:hidden">
            <?php echo (!empty($optionTheme['awe_footer_down_apple_store'])) ? '<a href="'.$optionTheme['awe_footer_down_apple_store'].'"><img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/appstore.png" alt="" /></a>' : ''?>
            <?php echo (!empty($optionTheme['awe_footer_down_gg_play'])) ? '<a href="'.$optionTheme['awe_footer_down_gg_play'].'"><img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/gg-play.png" alt="" /></a>' : ''?>
            </div>
        </div>
        <div class="h-[77px] bg-white flex items-center justify-center md:hidden">
            <?php echo (!empty($optionTheme['awe_footer_copyright'])) ? $optionTheme['awe_footer_copyright'] : ''?>
        </div>

        <!-- footer mb -->
        <div class="pt-[100px] text-white pl-[31px] pr-[38px] hidden md:block">
            <span class="text-2xl leading-3 font-semibold">Menu</span>
            <div class="mt-1">
                <ul class="text-base leading-[32px]">
                    <li>Trang Chủ</li>
                    <li>Dịch Vụ</li>
                    <li>Đội Ngũ</li>
                    <li>Tin Tức</li>
                    <li>Tuyển Dụng <span class="text-sm px-3 bg-[#39AFBA] rounded-[15px] text-white">Offer</span></li>
                </ul>
                <ul class="base leading-[32px] mt-4">
                    <li>Liên hệ</li>
                    <li>Điều khoản dịch vụ</li>
                    <li>Chính sách bảo mật</li>
                    <li>Quy định sử dụng</li>
                </ul>
            </div>
            <div class="mt-4">
                <span class="text-2xl leading-3 font-semibold">Address</span>
                <div class="mt-1">
                    <p class="text-base leading-8">
                        Tầng 10, Tòa nhà Việt Á, Số 9 Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội
                        <br />
                        Hotline: 1900 955535
                        <br />
                        mail@primpay.com
                    </p>
                </div>
            </div>
            <div class="mt-10 flex justify-center items-center space-x-[50px]">
                <?php echo (!empty($optionTheme['awe_footer_down_apple_store'])) ? '<a href="'.$optionTheme['awe_footer_down_apple_store'].'"><img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/appstore.png" alt="" class="w-[120px]" /></a>' : ''?>
                <?php echo (!empty($optionTheme['awe_footer_down_gg_play'])) ? '<a href="'.$optionTheme['awe_footer_down_gg_play'].'"><img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/gg-play.png" alt="" class="w-[120px]" /></a>' : ''?>
            </div>
            <div class="mt-10 flex flex-col justify-center items-center">
                <?php if (!empty($optionTheme['awe_footer_logo'])): ?>
                <img loading="lazy" src="<?php echo esc_url($optionTheme['awe_footer_logo']) ?>" alt="" class="w-[65px]" />
                <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/company-name-mb.png" alt="" class="block mt-[18px]" />
                <?php endif ?>
                
                <div class="flex items-center justify-between space-x-[14px] mt-3">
                    <?php if (!empty($optionTheme['awe_social_ig'])): ?>
                        <a href="<?php echo $optionTheme['awe_social_ig'] ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Insta-mb.png" alt="" />
                        </a>
                    <?php endif ?>
                    <?php if (!empty($optionTheme['awe_social_fb'])): ?>
                        <a href="<?php echo $optionTheme['awe_social_fb'] ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Fb-mb.png" alt="" />
                        </a>
                    <?php endif ?>
                    <?php if (!empty($optionTheme['awe_social_tw'])): ?>
                        <a href="<?php echo $optionTheme['awe_social_tw'] ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Twiter-mb.png" alt="" />
                        </a>
                    <?php endif ?>
                    <?php if (!empty($optionTheme['awe_social_lin'])): ?>
                        <a href="<?php echo $optionTheme['awe_social_lin'] ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/In-mb.png" alt="" />
                        </a>
                    <?php endif ?>
                    <?php if (!empty($optionTheme['awe_social_youtube'])): ?>
                        <a href="<?php echo $optionTheme['awe_social_youtube'] ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri() . "/assets/images"?>/Youtube-mb.png" alt="" />
                        </a>
                    <?php endif ?>
                </div>
            </div>
            <div class="mt-[20px] text-[10px] leading-[20px] text-white text-center pb-2">
                <?php echo (!empty($optionTheme['awe_footer_copyright'])) ? $optionTheme['awe_footer_copyright'] : ''?>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri() . "/assets/js/index.js"?>"></script>
    <script src="<?php echo get_template_directory_uri() . "/assets/js/swiper.js"?>"></script>
</body>

</html>