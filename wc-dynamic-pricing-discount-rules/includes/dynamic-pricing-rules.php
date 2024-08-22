<?php
// Add custom pricing rules
function wc_dpr_apply_pricing_rules( $cart ) {
    // Check if WooCommerce cart is empty
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    // Example rule: Apply 10% discount for 5 or more units of a product
    foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
        $product_id = $cart_item['product_id'];
        $quantity = $cart_item['quantity'];

        if ( $quantity >= 5 ) {
            $discount = $cart_item['data']->get_regular_price() * 0.10;
            $cart_item['data']->set_price( $cart_item['data']->get_regular_price() - $discount );
        }
    }
}

add_action( 'woocommerce_before_calculate_totals', 'wc_dpr_apply_pricing_rules', 10, 1 );
