<?php get_header () ?>


    <div class="container">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="buy-ticket">

        </div>

        <div class="countdown">

        </div>

        <div class="line-up">
            <div class="line-up-names">

            </div>
            <div class="line-up-gallery">

            </div>

        </div>

        <div class="gallery">
            <div class="gallery-heading">

            </div>
            <div class="gallery-carousel">

            </div>

        </div>

        <div class="explore">
            <div class="explore-heading">

            </div>
            <div class="bars">

            </div>

        </div>

<?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>



<?php get_footer () ?>