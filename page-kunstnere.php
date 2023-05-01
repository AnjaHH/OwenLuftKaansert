<?php get_header () ?>


    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="artist">
            <div id="artist-picture">
                <img src="<?php the_field("artist1") ?>" alt="">

            </div>
            <div class="artist-info">
                <div id="artist-name">
                    <h3><?php the_field("artist-name") ?></h3>

                </div>
                <div id="artist-details">
                    <p><?php the_field("artist-info") ?></p>

                </div>
            </div>
        </div>

     

<?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>



<?php get_footer () ?>