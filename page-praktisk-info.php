<?php get_header () ?>


    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        

        <?php $loop = new WP_Query(array('post_type' => 'info', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="info ">
                        <div id="info-name">
                            <h3><?php the_field("info-title") ?></h3> 
                        </div>
                        <div class="info-details">
                            <div id="info-details">
                                <p><?php the_field("info-text") ?></p>
                            </div>
                            <div id="info-image ">
                                <img class="info-img reveal " src="<?php the_field("info-image") ?>" alt="">
                                
                            </div>
                        </div>
                    </div>
                        
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
           
        

     

<?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>



<?php get_footer () ?>