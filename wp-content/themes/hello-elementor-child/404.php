<?php get_header(); ?>

<div class="error-404-wrapper" style="padding: 0px  20px 0px 20px; text-align: center; background: #fff;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        
        <div class="error-icon" style="font-size: 120px; color: #f0f0f0; margin-bottom: 20px; position: relative;">
            <span style="font-weight: 900; color: #8A33FD; opacity: 0.4;">404</span>
            <i class="fa-solid fa-shirt" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); font-size: 60px; color: #8A33FD;"></i>
        </div>

        <h1 style="font-size: 42px; font-weight: 900; color: #1a1a1a; margin-bottom: 15px; text-transform: uppercase;">
            Oops! Page Not Found
        </h1>
        
        <p style="font-size: 18px; color: #777; line-height: 1.6; margin-bottom: 40px;">
            Humein lagta hai aap raasta bhatak gaye hain. Ye dress (page) shayad hamare stock mein nahi hai ya link purana ho gaya hai.
        </p>

        <div class="search-box-404" style="max-width: 500px; margin: 0 auto 50px;">
            <p style="font-weight: 700; margin-bottom: 15px; color: #333;">Kuch aur dhoondna chahte hain?</p>
            <form action="<?php echo home_url('/'); ?>" method="get" style="display: flex; border: 1px solid #ddd; border-radius: 30px; overflow: hidden;">
                <input type="text" name="s" placeholder="Search for dresses, shirts..." style="flex: 1; border: none; padding: 15px 25px; outline: none;">
                <button type="submit" style="background: #8A33FD; color: #fff; border: none; padding: 0 25px; cursor: pointer; hover:#8A32FD;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <div class="error-actions" style="display: flex; gap: 20px; justify-content: center;">
            <a href="<?php echo home_url(); ?>" style="padding: 15px 35px; background: #1a1a1a; color: #fff; text-decoration: none; border-radius: 5px; font-weight: 700; transition: 0.3s;">
                Back to Home
            </a>
        </div>

    </div>
</div>

<style>
    .error-actions a:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .error-actions a:last-child:hover {
        background: #8A33FD;
        color: #fff;
    }
</style>

<?php get_footer(); ?>