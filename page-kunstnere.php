<?php get_header () ?>


    <div class="container">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="artist">
            <div id="artist-picture">

            </div>
            <div class="artist-info">
                <div id="artist-name">

                </div>
                <div id="artist-details">

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