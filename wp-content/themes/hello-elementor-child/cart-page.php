<?php
/*
Template Name: My Custom Cart Page
*/
get_header(); ?>

<div class="cart-page-wrapper py-5" style="background-color: #fcfcfc;">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb" style="background: transparent; padding: 0;">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>" style="color: #8A33FD; text-decoration: none;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>

        <h2 class="mb-4 fw-bold" style="color: #3C4242;">YOUR SHOPPING CART</h2>

        <div class="row gx-lg-5">
            <div class="col-lg-8">
                <div class="table-responsive cart-table-container shadow-sm" style="background: #fff; border-radius: 12px; border: 1px solid #eee;">
                    <table class="table align-middle mb-0">
                        <thead style="background-color: #3C4242; color: white;">
                            <tr>
                                <th class="ps-4 py-3">PRODUCT DETAILS</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>SUBTOTAL</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-4">
                                    <div class="d-flex align-items-center">
                                        <img src="http://localhost/wordpree-finalproject/wp-content/uploads/2026/03/ea2b4176859620e28301936e28a10b55.jpg_720x720q80.jpg" class="rounded me-3" style="width: 80px; height: 100px; object-fit: cover; border: 1px solid #eee;">
                                        <div>
                                            <h6 class="mb-0 fw-bold">Ethnic Floral Suit</h6>
                                            <small class="text-muted">Size: M | Color: Pink</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$45.00</td>
                                <td><input type="number" value="1" class="form-control text-center shadow-none" style="width: 60px; border-radius: 5px;"></td>
                                <td class="fw-bold">$45.00</td>
                                <td class="text-center"><a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td class="ps-4 py-4">
                                    <div class="d-flex align-items-center">
                                        <img src="http://localhost/wordpree-finalproject/wp-content/uploads/2026/03/cab3b276ae47a4dc2d94dd77d03d970a.jpg_720x720q80.jpg" class="rounded me-3" style="width: 80px; height: 100px; object-fit: cover; border: 1px solid #eee;">
                                        <div>
                                            <h6 class="mb-0 fw-bold">Boutique Party Wear</h6>
                                            <small class="text-muted">Size: S | Color: Blue</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$35.00</td>
                                <td><input type="number" value="1" class="form-control text-center shadow-none" style="width: 60px; border-radius: 5px;"></td>
                                <td class="fw-bold">$35.00</td>
                                <td class="text-center"><a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>

                            <tr>
                                <td class="ps-4 py-4">
                                    <div class="d-flex align-items-center">
                                        <img src="http://localhost/wordpree-finalproject/wp-content/uploads/2026/03/Baasploa-Children-Sport-Shoes-Mesh-Breathable-Casual-Sneakers-For-Boys-Girl-Lightweight-Running-Shoes-3.jpg" class="rounded me-3" style="width: 80px; height: 100px; object-fit: cover; border: 1px solid #eee;">
                                        <div>
                                            <h6 class="mb-0 fw-bold">Kids Sport Sneakers</h6>
                                            <small class="text-muted">Size: 32 | Color: Grey</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$25.00</td>
                                <td><input type="number" value="1" class="form-control text-center shadow-none" style="width: 60px; border-radius: 5px;"></td>
                                <td class="fw-bold">$25.00</td>
                                <td class="text-center"><a href="#" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-4">
                    <a href="<?php echo site_url(); ?>" class="btn btn-outline-dark px-4 py-2 fw-bold" style="border-radius: 8px;">Continue Shopping</a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="order-summary-card p-4 shadow-sm" style="background: #F6F6F6; border-radius: 15px; position: sticky; top: 20px;">
                    <h5 class="fw-bold mb-4" style="color: #3C4242;">ORDER SUMMARY</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Sub Total</span>
                        <span class="fw-bold">$105.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                        <span class="text-muted">Shipping</span>
                        <span class="text-success fw-bold">FREE</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="fw-bold h5">Grand Total</span>
                        <span class="fw-bold h5" style="color: #8A33FD;">$105.00</span>
                    </div>
                    <button class="btn btn-primary w-100 py-3 fw-bold shadow-none" style="background-color: #8A33FD; border: none; border-radius: 12px; font-size: 1.1rem;">PROCEED TO CHECKOUT</button>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted"><i class="fa-solid fa-shield-halved me-1"></i> Secure Checkout Guaranteed</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Final Styling Adjustments */
    .cart-page-wrapper .container { max-width: 1200px; margin: 0 auto; }
    .table-dark { border-color: #3C4242; }
    .btn-primary:hover { background-color: #6c2bc4 !important; transform: translateY(-1px); transition: 0.2s; }
    .btn-outline-dark:hover { background-color: #3C4242; color: #fff; }
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { opacity: 1; }
</style>

<?php get_footer(); ?>