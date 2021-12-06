<?php
$logo = intval(pearl_get_option('logo'));

$wrapper_classes = array('stm_mobile__header');

if (!empty($logo)) {
	$logo = pearl_get_image_url($logo);
}

// MENU ICON HTML
// <span class="material-icons stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">menu</span>
?>

<div class="stm-header__overlay"></div>

<div class="<?php echo esc_attr(implode(' ', $wrapper_classes)) ?>">
    <div class="container">
        <div class="uiux-mobile-header-container stm_flex stm_flex_center stm_flex_last stm_flex_nowrap">

            <div class="uiux-button-icon">
                <?php if ( is_front_page() && is_home() ) { ?>
                    <span class="material-icons stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">menu</span>
                <?php } elseif ( is_front_page() ) { ?>
                    <span class="material-icons stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">menu</span>
                <?php } elseif ( is_home() ) { ?>
                    <span class="material-icons stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">menu</span>
                <?php } else { ?>
                    <span class="material-icons stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">menu</span>
                <?php }?>
            </div>



            <!-- <div class="stm_mobile__switcher stm_flex_last js_trigger__click" data-element=".stm-header, .stm-header__overlay" data-toggle="false">
                <span class="mbc"></span>
                <span class="mbc"></span>
                <span class="mbc"></span>
            </div> -->

            <?php if (!empty($logo)): ?>

                <div class="stm_mobile__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php esc_attr_e('Home', 'pearl'); ?>">
                        <img src="<?php echo esc_url($logo); ?>"
                             alt="<?php esc_html_e('Site Logo', 'pearl'); ?>"/>
                    </a>
                </div>
                
            <?php endif; ?>

            

        </div>
    </div>
</div>