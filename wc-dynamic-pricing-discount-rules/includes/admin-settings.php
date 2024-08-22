<?php
// Admin settings for dynamic pricing
function wc_dpr_admin_menu() {
    add_menu_page(
        __( 'Dynamic Pricing Rules', 'wc-dynamic-pricing-discount-rules' ),
        __( 'Pricing Rules', 'wc-dynamic-pricing-discount-rules' ),
        'manage_options',
        'wc-dynamic-pricing-rules',
        'wc_dpr_settings_page',
        'dashicons-money-alt',
        20
    );
}

add_action( 'admin_menu', 'wc_dpr_admin_menu' );

function wc_dpr_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php _e( 'Dynamic Pricing & Discount Rules', 'wc-dynamic-pricing-discount-rules' ); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'wc_dpr_settings_group' );
            do_settings_sections( 'wc-dynamic-pricing-rules' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
