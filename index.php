<?php get_header () ?>


    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="buy-ticket">
                <div class="buy-ticket-button">
                    <h4>KØB BILLET</h4>
                </div>

        </div>

        <div class="countdown">

        </div>

        <div class="line-up-heading">
            <h3>LINE UP</h3>
            <h3>2023</h3>
        </div>
        <div class="line-up">
            <div class="line-up-names">
                <h5>BIRTHE KJÆR</h5>
                <h5>HJALMER</h5>
                <h5>CHRISTOPHER</h5>
                <h5>SAVEUS</h5>
                <h5>MINDS OF 99</h5>
                <h5>LUKAS GRAHAM</h5>
            </div>
            <div class="line-up-gallery">

            </div>

        </div>

        <div class="gallery">
            <div class="gallery-heading">
                <h3>KOM I STEMNING</h3>
            </div>
            <div class="gallery-carousel">

            </div>

        </div>

        <div class="explore">
            <div class="explore-heading">
                <h3>UDFORSK VORES MANGE BARER</h3>
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