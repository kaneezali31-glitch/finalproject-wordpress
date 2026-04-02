<?php get_header(); ?>

<div class="euphoria-search-page" style="padding: 60px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
        
        <header class="search-header" style="text-align: center; margin-bottom: 50px;">
            <p style="text-transform: uppercase; letter-spacing: 2px; color: #888; font-size: 13px; margin-bottom: 10px;">Search Results for</p>
            <h1 style="font-weight: 900; font-size: 36px; text-transform: capitalize; color: #1a1a1a;">
                "<?php echo get_search_query(); ?>"
            </h1>
            <div style="width: 50px; height: 3px; background: #8A33FD; margin: 20px auto;"></div>
        </header>

        <div class="search-grid" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <div class="search-col" style="flex: 0 0 25%; max-width: 25%; padding: 15px; box-sizing: border-box;">
                    <div class="product-card" style="transition: 0.3s;">
                        
                        <div class="img-box" style="position: relative; border-radius: 15px; overflow: hidden; background: #f9f9f9;">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium', ['style' => 'width:100%; height:350px; object-fit:cover; display:block; transition: 0.5s;']); ?>
                                <?php else : ?>
                                    <img src="https://via.placeholder.com/300x400?text=No+Image" style="width:100%; height:350px; object-fit:cover;">
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="info-box" style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: 15px;">
                            <div style="max-width: 70%;">
                                <h5 style="font-size: 14px; font-weight: 700; margin: 0; color: #1a1a1a;">
                                    <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;"><?php the_title(); ?></a>
                                </h5>
                                <p style="font-size: 12px; color: #888; margin-top: 4px;">Euphoria Boutique</p>
                            </div>
                            <div class="price-tag" style="background: #f4f4f4; padding: 5px 10px; border-radius: 8px; font-weight: 700; font-size: 13px;">
                                PKR <?php 
                                    $price = get_post_meta(get_the_ID(), 'product_price', true);
                                    echo $price ? $price : '3,500'; 
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <div class="no-results" style="width: 100%; text-align: center; padding: 100px 20px;">
                    <i class="fa-regular fa-face-frown" style="font-size: 60px; color: #ddd; margin-bottom: 20px;"></i>
                    <h2 style="font-weight: 700; color: #333;">No matches found!</h2>
                    <p style="color: #777; margin-bottom: 30px;">We couldn't find what you were looking for. Try a different keyword.</p>
                    <a href="<?php echo home_url('/shop/'); ?>" style="display: inline-block; padding: 12px 30px; background: #8A33FD; color: #fff; text-decoration: none; border-radius: 5px; font-weight: 600;">Back to Shop</a>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<style>
    .search-col:hover img { transform: scale(1.05); }
    /* Responsive */
    @media (max-width: 992px) { .search-col { flex: 0 0 50%; max-width: 50%; } }
    @media (max-width: 576px) { .search-col { flex: 0 0 100%; max-width: 100%; } }
</style>

<?php get_footer(); ?>