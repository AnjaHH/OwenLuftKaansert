<meta
  name="description"
  content="Årets kunstnere til dette års Owen Luft Kånsert,, 
  det er ægte dansk råhygge!">
<?php get_header () ?>


<div class="section">
    <div class="sidebar"></div>

    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        

        <?php $loop = new WP_Query(array('post_type' => 'artistpage', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="artists">
            <div id="artist-picture">
                <img src="<?php the_field("artist_image") ?>" alt="">

            </div>
            <div class="artist-info">
                <div id="artist-name">
                    <h3><?php the_field("artist_name") ?></h3>

                </div>
                <div id="artist-details">
                    <p><?php the_field("artist_info") ?></p>

                </div>
                <div class="reveal">
                    <iframe style="border-radius:12px" src="<?php the_field("spotify") ?>" width="100%" height="152" frameBorder="0" allowfullscreen="" 
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
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
</div>


<?php get_footer () ?>