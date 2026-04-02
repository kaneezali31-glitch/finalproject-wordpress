<?php
/*
Template Name: My Custom Wishlist Page
*/
get_header(); ?>

<div class="wishlist-page-wrapper py-5" style="background-color: #fcfcfc;">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb" style="background: transparent; padding: 0;">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" style="color: #8A33FD; text-decoration: none;">Home</a></li>
                <li class="breadcrumb-item active">Wishlist</li>
            </ol>
        </nav>

        <h2 class="mb-4 fw-bold" style="color: #3C4242;">MY WISHLIST</h2>

        <div class="table-responsive shadow-sm" style="background: #fff; border-radius: 12px; border: 1px solid #eee;">
            <table class="table align-middle mb-0">
                <thead style="background-color: #3C4242; color: white;">
                    <tr>
                        <th class="ps-4 py-3">PRODUCT</th>
                        <th>UNIT PRICE</th>
                        <th>STOCK STATUS</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 py-4">
                            <div class="d-flex align-items-center">
                                <img src="http://localhost/wordpree-finalproject/wp-content/uploads/2026/03/ea2b4176859620e28301936e28a10b55.jpg_720x720q80.jpg" class="rounded me-3" style="width: 70px; height: 90px; object-fit: cover; border: 1px solid #eee;">
                                <div>
                                    <h6 class="mb-0 fw-bold">Ethnic Floral Suit</h6>
                                    <small class="text-muted">Category: Women's Wear</small>
                                </div>
                            </div>
                        </td>
                        <td class="fw-bold">$45.00</td>
                        <td><span class="badge bg-success" style="border-radius: 5px;">In Stock</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary me-2" style="background-color: #8A33FD; border: none; border-radius: 5px;">Add to Cart</button>
                            <a href="#" class="text-danger ms-2"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="ps-4 py-4">
                            <div class="d-flex align-items-center">
                                <img src="http://localhost/wordpree-finalproject/wp-content/uploads/2026/03/Baasploa-Children-Sport-Shoes-Mesh-Breathable-Casual-Sneakers-For-Boys-Girl-Lightweight-Running-Shoes-3.jpg" class="rounded me-3" style="width: 70px; height: 90px; object-fit: cover; border: 1px solid #eee;">
                                <div>
                                    <h6 class="mb-0 fw-bold">Kids Sport Sneakers</h6>
                                    <small class="text-muted">Category: Kids Footwear</small>
                                </div>
                            </div>
                        </td>
                        <td class="fw-bold">$25.00</td>
                        <td><span class="badge bg-success" style="border-radius: 5px;">In Stock</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-primary me-2" style="background-color: #8A33FD; border: none; border-radius: 5px;">Add to Cart</button>
                            <a href="#" class="text-danger ms-2"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 text-end">
            <a href="<?php echo site_url(); ?>/cart" class="btn btn-dark px-4 py-2" style="border-radius: 8px; background-color: #3C4242;">Go to Cart <i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</div>

<style>
    .wishlist-page-wrapper .container { max-width: 1100px; margin: 0 auto; }
    .btn-primary:hover { background-color: #6c2bc4 !important; transform: scale(1.05); transition: 0.2s; }
</style>

<?php get_footer(); ?>