<?php

/* Function to enqueue stylesheet from parent theme */

function child_enqueue__parent_scripts() {

    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );

}
add_filter( 'wpcf7_form_tag_data_option', 'euphoria_dynamic_title', 10, 3 );

function euphoria_dynamic_title( $data, $options, $args ) {
    if ( in_array( 'shortcode_attr', $options ) ) {
        // Agar hum kisi single product ya post page par hain, toh uska title le lo
        if ( is_singular() ) {
            return get_the_title();
        }
    }
    return $data;
}
add_filter( 'wpcf7_form_tag', 'euphoria_dynamic_fields', 10, 2 );

function euphoria_dynamic_fields( $tag, $unused ) {

    if ( ! is_array( $tag ) ) {
        return $tag;
    }

    // Product Title
    if ( $tag['name'] == 'product-title' ) {
        $tag['values'] = array( get_the_title() );
    }

    // Product ID
    if ( $tag['name'] == 'product-id' ) {
        $tag['values'] = array( get_the_ID() );
    }

    return $tag;
}
// Global AJAX Script for Cart and Wishlist
function boutique_custom_ajax_script() {
    ?>
    <script>
    const BoutiqueAJAX = {
        // 1. Element ko remove karne ka function
        removeElement: function(elementId) {
            const element = document.getElementById(elementId);
            if (element) {
                element.style.opacity = '0.5';
                element.style.transition = '0.4s all';
                
                setTimeout(() => {
                    element.remove();
                    this.updateTotals();
                    console.log('Item removed via Global AJAX');
                }, 400);
            }
        },

        // 2. Grand Total update karne ka function
        updateTotals: function() {
            let grandTotal = 0;
            document.querySelectorAll('.row-subtotal').forEach(item => {
                let priceText = item.innerText.replace(/[^0-9.]/g, ''); // Sirf numbers nikalne ke liye
                grandTotal += parseFloat(priceText) || 0;
            });

            const totalDisplay = document.getElementById('grand-total');
            if (totalDisplay) {
                totalDisplay.innerText = grandTotal.toFixed(2);
            }
        }
    };

    // 3. Global Quantity Change Listener
    document.addEventListener('change', function(e) {
        if (e.target.classList.contains('qty-input')) {
            const row = e.target.closest('tr');
            const unitPriceElement = row.querySelector('.unit-price');
            
            if (unitPriceElement) {
                const price = parseFloat(unitPriceElement.innerText.replace(/[^0-9.]/g, ''));
                const qty = parseInt(e.target.value);
                
                if (qty >= 1) {
                    const subtotalElement = row.querySelector('.row-subtotal');
                    if (subtotalElement) {
                        subtotalElement.innerText = (price * qty).toFixed(2);
                        BoutiqueAJAX.updateTotals();
                    }
                }
            }
        }
    });
    </script>
    <?php
}
add_action('wp_footer', 'boutique_custom_ajax_script');
add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts' );