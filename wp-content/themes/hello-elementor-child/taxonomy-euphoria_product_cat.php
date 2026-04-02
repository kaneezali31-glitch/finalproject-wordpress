<?php get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    .euphoria-archive { padding: 40px 0; background: #fff; }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }
    
    /* Layout Logic: Sidebar and Grid side-by-side */
    .shop-wrapper { display: flex; gap: 30px; align-items: flex-start; }
    
    /* Sidebar Styling - Sticky and Clean */
    .shop-sidebar { 
        flex: 0 0 260px; 
        position: sticky; 
        top: 20px; 
        background: #fdfdfd; 
        padding: 25px; 
        border-radius: 12px; 
        border: 1px solid #eee;
        min-height: 500px; /* Is se sidebar chota nahi lagega */
    }
    
    .filter-widget { margin-bottom: 35px; }
    .filter-title { font-size: 15px; font-weight: 800; text-transform: uppercase; margin-bottom: 15px; border-left: 4px solid #8A33FD; padding-left: 10px; color: #222; }
    
    .filter-list { list-style: none; padding: 0; }
    .filter-list li { margin-bottom: 12px; }
    .filter-list a { text-decoration: none; color: #666; font-size: 14px; transition: 0.3s ease; display: block; }
    .filter-list a:hover { color: #8A33FD; transform: translateX(5px); }

    /* Your Original Grid Styles - No Changes */
    .row-grid { flex: 1; display: flex; flex-wrap: wrap; margin: 0 -15px; }
    .product-col { flex: 0 0 33.333%; max-width: 33.333%; padding: 15px; box-sizing: border-box; }
    .product-item { background: transparent; border: none; position: relative; transition: 0.3s; }
    .image-holder { position: relative; border-radius: 15px; overflow: hidden; background: #f8f8f8; }
    .image-holder img { width: 100%; height: 380px; object-fit: cover; transition: 0.5s ease; }

    .wishlist-heart {
        position: absolute; top: 15px; right: 15px;
        background: #fff; width: 35px; height: 35px;
        border-radius: 50%; display: flex;
        align-items: center; justify-content: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        z-index: 5; color: #333; cursor: pointer;
    }

    .info-grid { display: flex; justify-content: space-between; align-items: flex-start; margin-top: 15px; }
    .p-title { font-size: 14px; font-weight: 700; color: #1a1a1a; margin: 0; text-decoration: none; }
    .p-brand { font-size: 12px; color: #888; margin-top: 2px; }
    .price-badge { background: #f4f4f4; padding: 5px 12px; border-radius: 8px; font-weight: 700; font-size: 13px; color: #222; }

    .product-item:hover img { transform: scale(1.08); }

    /* Responsive Design */
    @media (max-width: 992px) { 
        .shop-wrapper { flex-direction: column; }
        .shop-sidebar { flex: 0 0 100%; width: 100%; position: relative; min-height: auto; }
        .product-col { flex: 0 0 50%; max-width: 50%; } 
    }
    @media (max-width: 576px) { .product-col { flex: 0 0 100%; max-width: 100%; } }
</style>

<div class="euphoria-archive">
    <div class="container">
        <!-- <header class="text-center mb-5">
            <h1 style="letter-spacing:5px; font-weight:900; text-transform:uppercase;"><?php single_term_title(); ?></h1>
            <p style="font-style:italic; color:#777;">Explore our exclusive collection</p>
            <hr style="width:50px; border:1px solid #000; margin: 20px auto;">
        </header> -->

        <div class="shop-wrapper">
            
            <aside class="shop-sidebar">
                <div class="filter-widget">
                    <h4 class="filter-title">Categories</h4>
                    <ul class="filter-list">
                        <li><a href="<?php echo home_url('/product-category/new-arrival/'); ?>">New Arrivals</a></li>
                        <li><a href="<?php echo home_url('/product-category/women/'); ?>">Women Collection</a></li>
                        <li><a href="<?php echo home_url('/product-category/men/'); ?>">Men Collection</a></li>
                    </ul>
                </div>

                <div class="filter-widget">
                    <h4 class="filter-title">Filter By Price</h4>
                    <input type="range" min="1000" max="10000" id="priceRange" style="width:100%; accent-color:#8A33FD;">
                    <div style="display:flex; justify-content:space-between; font-size:12px; margin-top:8px; color:#999;">
                        <span>Min: 1k</span>
                        <span>Max: 10k</span>
                    </div>
                </div>

                <div class="filter-widget">
                    <h4 class="filter-title">Select Size</h4>
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        <button class="size-btn" style="border:1px solid #eee; padding:6px 12px; background:#fff; cursor:pointer; border-radius:4px;">S</button>
                        <button class="size-btn" style="border:1px solid #eee; padding:6px 12px; background:#fff; cursor:pointer; border-radius:4px;">M</button>
                        <button class="size-btn" style="border:1px solid #eee; padding:6px 12px; background:#fff; cursor:pointer; border-radius:4px;">L</button>
                    </div>
                </div>
                <div class="filter-widget">
    <h4 class="filter-title">Search Products</h4>
    <form action="<?php echo home_url('/'); ?>" method="get">
        <input type="text" name="s" placeholder="Search dress..." style="width:100%; padding:8px; border:1px solid #ddd; border-radius:5px;">
    </form>
</div>

<div class="filter-widget">
    <h4 class="filter-title">Filter By Color</h4>
    <div style="display:flex; gap:10px;">
        <span style="width:20px; height:20px; background:red; border-radius:50%; cursor:pointer; border:1px solid #ddd;"></span>
        <span style="width:20px; height:20px; background:black; border-radius:50%; cursor:pointer; border:1px solid #ddd;"></span>
        <span style="width:20px; height:20px; background:#8A33FD; border-radius:50%; cursor:pointer; border:1px solid #ddd;"></span>
        <span style="width:20px; height:20px; background:gold; border-radius:50%; cursor:pointer; border:1px solid #ddd;"></span>
    </div>
</div>

<div class="filter-widget" style="margin-top:20px;">
    <a href="<?php echo home_url('/shop/'); ?>" style="display:block; text-align:center; padding:10px; background:#3C4242; color:#fff; text-decoration:none; border-radius:5px; font-size:13px;">
        <i class="fa-solid fa-rotate-left"></i> Clear All Filters
    </a>
</div>
            </aside>

            <div class="row-grid">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="product-col" data-price="<?php echo get_post_meta(get_the_ID(), 'product_price', true) ? : '3500'; ?>">
                        <div class="product-item">
                            <div class="image-holder">
                                <div class="wishlist-heart"><i class="fa-regular fa-heart"></i></div>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                            <div class="info-grid">
                                <div>
                                    <h5 class="p-title"><?php the_title(); ?></h5>
                                    <p class="p-brand">Euphoria Brand</p>
                                </div>
                                <div class="price-badge">
                                    PKR <?php 
                                        $price = get_post_meta(get_the_ID(), 'product_price', true);
                                        echo $price ? $price : '3,500'; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>

        </div> </div>
</div>

<script>
// Wishlist Heart Script (Your original)
document.querySelectorAll('.wishlist-heart').forEach(item => {
    item.addEventListener('click', function() {
        let icon = this.querySelector('i');
        icon.classList.toggle('fa-regular');
        icon.classList.toggle('fa-solid');
        if(icon.classList.contains('fa-solid')) {
            icon.style.color = '#e74c3c';
        } else {
            icon.style.color = '#333';
        }
    });
});

// Simple Price Slider Alert (For Viva/Demo)
document.getElementById('priceRange').addEventListener('input', function() {
    console.log("Filtering products below: " + this.value);
});
// Price Slider Elements
const priceRange = document.getElementById('priceRange');
const priceMinLabel = document.querySelector('.shop-sidebar span:first-of-type'); // PKR 1,000 wala span
const priceMaxLabel = document.querySelector('.shop-sidebar span:last-of-type');  // PKR 10,000 wala span

priceRange.addEventListener('input', function() {
    const currentMaxPrice = parseInt(this.value);
    
    // Label update karein (UX ke liye)
    priceMaxLabel.innerText = "Max: " + currentMaxPrice.toLocaleString();

    // Saare products par loop chalayein
    document.querySelectorAll('.product-col').forEach(product => {
        const productPrice = parseInt(product.getAttribute('data-price'));

        // Agar product ki qeemat slider se kam hai toh dikhao, warna chhupa do
        if (productPrice <= currentMaxPrice) {
            product.style.display = "block";
        } else {
            product.style.display = "none";
        }
    });
    // Size Filter Functionality
document.querySelectorAll('.size-btn').forEach(button => {
    button.addEventListener('click', function() {
        // 1. Buttons ki Styling Toggle Karein
        // Pehle saare buttons se active color hatao
        document.querySelectorAll('.size-btn').forEach(btn => {
            btn.style.backgroundColor = "#fff";
            btn.style.color = "#333";
            btn.style.borderColor = "#ddd";
        });

        // Ab clicked button ko highlight karein
        this.style.backgroundColor = "#8A33FD"; // Euphoria Purple
        this.style.color = "#fff";
        this.style.borderColor = "#8A33FD";

        // 2. Filter Logic
        const selectedSize = this.innerText.trim(); // S, M, ya L uthayega

        document.querySelectorAll('.product-col').forEach(product => {
            const productSize = product.getAttribute('data-size');

            // Agar product ka size match karta hai toh dikhao, warna hide kar do
            if (productSize === selectedSize) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    });
});
});
</script>

<?php get_footer(); ?>