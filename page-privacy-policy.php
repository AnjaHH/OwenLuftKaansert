<?php get_header () ?>


<div class="section">
    <div class="sidebar"></div>
    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>


            <div>
                
                <div class="politik-tekst"><p><?php the_field("politik-tekst") ?></p></div>
            </div>



    <?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>

</div>


<?php get_footer () ?>