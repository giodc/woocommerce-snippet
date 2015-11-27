 add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' ); // 2.1 +
    function woo_custom_cart_button_text() {
        global $product;
        if ( has_term( 'preorder', 'product_tag', $product->ID ) ) :
            return __( 'Pre order', 'woocommerce' );
			else:
			            return __( 'Add to Cart', 'woocommerce' );
        endif;
    }
