<?php get_header(); ?>

<div class="container my-5 single-product-page-main" style="padding-left: 15px; padding-right: 15px;">
    
    <div class="custom-product-flex-container mb-5">
        
        <div class="custom-image-column">
            <div class="product-gallery-fixed" style="border: 1px solid #f2f2f2; border-radius: 16px; overflow: hidden; background: #fff; padding: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid w-100 main-product-img', 'style' => 'object-fit: contain; max-height: 600px; border-radius: 12px; transition: 0.5s;']); ?>
                <?php else: ?>
                    <img src="https://via.placeholder.com/600x800?text=No+Image" class="img-fluid w-100" style="object-fit: cover; max-height: 600px; border-radius: 12px;"> 
                    
                <?php endif; ?>
            </div>
        </div>
        
                    <div class="custom-details-column ps-lg-5">
            <div class="product-summary-content">
                
                <nav aria-label="breadcrumb" class="custom-breadcrumb mb-3">
                    <ul class="breadcrumb m-0 p-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" style="color: #888; text-decoration: none; margin-top:60px; font-size: 12px; letter-spacing: 1px; font-weight: 600;">HOME</a></li>
                        <li class="breadcrumb-item active" style="color:#3C4242 ; font-size: 12px; font-weight: 700; letter-spacing: 1px; font-family:poppins,sans-serif;"><?php the_title(); ?></li>
                    </ul>
                </nav>

                <h1 class="entry-title" style="font-weight: 900; font-family:poppins,sans-serif; text-transform: uppercase; font-size: 30px; color: #3C4242; margin-bottom: 15px; margin-top:80px; letter-spacing: -0.5px;"><?php the_title(); ?></h1>
                
                <?php $sku = get_field('product_sku'); ?>
                <?php if ($sku) : ?>
                    <span class="sku-label" style="display:inline-block; margin-bottom:20px; font-size:12px; font-weight:700; background: #f4f4f4; padding: 4px 12px; border-radius: 20px; color: #666;">SKU: <?php echo $sku; ?></span>
                <?php endif; ?>

                <div class="price-box-fixed p-4 mb-4" style="background: #fdfdfd; border: 1px solid #f1f1f1; border-radius: 16px; display: inline-block; min-width: 250px;">
                    <span class="price-title" style="color: #999; font-size: 11px; font-weight: 800; letter-spacing: 1px; display: block; margin-bottom: 5px;">CURRENT PRICE</span>
                    <h3 class="product-price-value" style="color: #3C4242; font-weight: 900; font-size: 22px; margin: 0; font-family:poppins,sans-serif;">
                        PKR <?php echo get_field('product_price') ? get_field('product_price') : '3,500'; ?>
                    </h3>
                </div>

                <div class="product-description-content mb-4" style="color: #807D7E; font-size: 14px; line-height: 1.5; text-align: justify;  padding-left: 20px; font-family:poppins,sans-serif;">
                    <?php the_content(); ?>
                </div>

                <div class="cart-action-wrapper mt-4 mb-5">
                    <button class="add-to-cart-custom-btn" onclick="addToCartLogic()">
                        <i class="fa-solid fa-cart-shopping" style="margin-right: 10px; margin-top:20px; font-family:sans-serif;"></i> ADD TO CART
                    </button>
                    <!-- <button class="wishlist-round-btn"><i class="fa-regular fa-heart"></i></button> -->
                </div>
            </div>
        </div>
        
        
    </div> 

    <div class="row mt-5 pt-5 border-top extra-details-row">
        <div class="col-md-5 mb-4">
            <div class="specs-card p-4 h-100" style="background: #fff; border: 1px solid #f2f2f2; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.03);">
                <h6 class="specs-title" style="font-weight: 800; font-size: 15px; letter-spacing: 1.5px; border-bottom: 2px solid #f8f8f8; padding-bottom: 15px; margin-bottom: 25px; color: #111;">PRODUCT SPECIFICATIONS</h6>
                <table class="table table-borderless specs-table">
                    <tbody>
                        <tr>
                            <td class="text-muted">Brand Name</td>
                            <td class="fw-bold"><?php echo get_field('brand_name') ?: 'Euphoria Luxe'; ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Available Sizes</td>
                            <td class="fw-bold"><?php echo get_field('product_sizes') ?: 'XS, S, M, L, XL'; ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Weight</td>
                            <td class="fw-bold"><?php echo get_field('product_weight') ? get_field('product_weight') . ' KG' : '0.5 KG'; ?></td>
                        </tr>
                        <tr>
    <td class="text-muted">Color</td>
    <td class="fw-bold" style="text-transform: capitalize;">
        <?php 
            $color = get_field('product_color');
            echo $color ? (is_array($color) ? $color['label'] : $color) : '-'; 
        ?>
    </td>
</tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-7 mb-4">
            <div class="order-form-card" style="border-radius: 16px; overflow: hidden;">
              
<?php 
echo do_shortcode('[contact-form-7 id="de01a11" title="Contact form 1" product-id="' . get_the_ID() . '" product-title="' . get_the_title() . '"]'); 
?>
            </div>
        </div>
    </div>
</div>

<style>
    .breadcrumb m-0 p-0{padding-top:60px;}
    .custom-product-flex-container { display: flex; flex-wrap: wrap; }
    .custom-image-column { flex: 0 0 45%; max-width: 45%; }
    .custom-details-column { flex: 1; }

    /* Modern Add to Cart Button */
    .add-to-cart-custom-btn {
        background: #8A33FD !important;
        color: #fff !important;
        border: none;
        padding: 16px 45px;
        border-radius: 8px;
        font-weight: 800;
        font-size: 14px;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 0.4s;
        box-shadow: 0 8px 20px rgba(138, 51, 253, 0.2);
    }
    .add-to-cart-custom-btn:hover {
        background: #6c2bc4 !important;
        transform: translateY(-3px);
        box-shadow: 0 12px 25px rgba(138, 51, 253, 0.3);
    }

    /* .wishlist-round-btn {
        background: #fff;
        border: 1px solid #eee;
        width: 52px;
        height: 52px;
        border-radius: 12px;
        margin-left: 15px;
        color: #888;
        transition: 0.3s;
    } */
    .custom-form-bg {
    margin-top: 40px !important; /* Specifications aur Form ke darmiyan gap ke liye */
}
    /* .wishlist-round-btn:hover { background: #fdfdfd; color: #8A33FD; border-color: #8A33FD; } */

    /* Table Styling */
    .specs-table td { padding: 12px 0; font-size: 15px; border-bottom: 1px solid #fafafa; }
    .specs-table tr:last-child td { border-bottom: none; }

    @media (max-width: 991px) {
        .custom-image-column, .custom-details-column { flex: 0 0 100%; max-width: 100%; }
        .custom-image-column { margin-bottom: 30px; }
    }
</style>



<script>
function addToCartLogic() {
    alert("Product added to your cart!");

}


</script>
<?php get_footer(); ?>