<?php
/*
Plugin Name: Euphoria Custom Products
Description: Registers Custom Post Type for Products and Categories for Euphoria Boutique.
Version: 1.0
Author: Kaneez Zehra
Author URI: https://github.com/kaneezali31-glitch
*/

// Security Check: Direct access block karne ke liye
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register Custom Post Type and Taxonomy
function euphoria_register_products_init() {
    
    // 1. Products Post Type labels
    $labels = array(
        'name'               => 'Euphoria Products',
        'singular_name'      => 'Euphoria Product',
        'add_new'            => 'Add New Product',
        'all_items'          => 'All Products',
        'edit_item'          => 'Edit Product',
        'new_item'           => 'New Product',
        'view_item'          => 'View Product',
        'search_items'       => 'Search Products',
        'not_found'          => 'No products found',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'products'), // URL slug
        'menu_icon'          => 'dashicons-products', // Dashboard icon
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => true, // Gutenberg editor support ke liye
    );

    register_post_type( 'euphoria_product', $args ); // Post Type Key updated

    // 2. Custom Taxonomy (Categories)
    register_taxonomy( 'euphoria_product_cat', 'euphoria_product', array(
        'label'        => 'Product Categories',
        'rewrite'      => array( 'slug' => 'product-category' ),
        'hierarchical' => true, // Category-like behavior
        'show_admin_column' => true,
        'show_in_rest' => true,
    ));
    


    function euphoria_latest_products_shortcode() {
    $args = array(
        'post_type'      => 'euphoria_product',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);
    
    // Yahan humne custom class 'force-four-cols' add ki hai
    $output = '<div class="container-fluid px-2 my-5">
                <div class="custom-product-grid">';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            
            $price = get_field('product_price'); 
            $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if (!$img) {
                $img = 'https://via.placeholder.com/400x600?text=No+Image';
            }

            $output .= '
            <div class="custom-product-item">
                <div class="boutique-card">
                    <div class="product-img-wrapper">
                        <img src="' . $img . '" class="main-img">
                        <div class="hover-overlay">
                            <a href="' . get_permalink() . '" class="view-btn">VIEW DETAILS</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <p class="brand-label">EXCLUSIVE</p>
                        <h5 class="product-title">' . get_the_title() . '</h5>
                        <p class="product-price">PKR ' . ($price ? $price : "3,500") . '</p>
                    </div>
                </div>
            </div>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<div class="text-center w-100"><p>No products found.</p></div>';
    }

    $output .= '</div></div>';
    
    $output .= '<style>
        /* Flexbox grid jo 4 items ko ek hi line mein rakhega */
        .custom-product-grid {
            display: flex;
            flex-wrap: wrap; /* Mobile par line break karega */
            margin: 0 -10px;
        }

        .custom-product-item {
            flex: 0 0 25%; /* Desktop par 4 items (100/4 = 25%) */
            max-width: 25%;
            padding: 0 10px;
            box-sizing: border-box;
        }

        /* Responsive: Mobile par 2 items ek line mein */
        @media (max-width: 768px) {
            .custom-product-item {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        .boutique-card {
            background: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            height: 300px; /* Height thori kam ki takay 4 items fit aa saken */
            background: #f9f9f9;
        }

        .main-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .hover-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            background: rgba(255,255,255,0.9);
            padding: 10px 0;
            transition: 0.4s;
        }

        .boutique-card:hover .hover-overlay { bottom: 0; }

        .view-btn { color: #111; text-decoration: none; font-weight: 700; font-size: 10px; letter-spacing: 1px; }

        .product-title {
            font-size: 13px;
            font-weight: 700;
            margin: 8px 0 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .product-price { font-size: 14px; color: #d35400; font-weight: 700; margin: 0; }
        .brand-label { font-size: 8px; color: #bbb; letter-spacing: 2px; margin: 0; }
    </style>';

    return $output;
}
add_shortcode('latest_euphoria_products', 'euphoria_latest_products_shortcode');
}

add_action( 'init', 'euphoria_register_products_init' );