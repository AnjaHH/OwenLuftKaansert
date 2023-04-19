<?php wp_footer()?>

<div class="footer">
    <div class="sponsors">
        <?php $loop = new WP_Query(array('post_type' => 'sponsor', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <img class="sponsor-img" src="<?php the_field("sponsor-image") ?>" alt="">
                        
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

    </div>
    <div class="footer-info">
        <div class="footer-left">
            <p><?php the_field("cvr") ?></p>
            <p><?php the_field("adresse") ?></p>
            <p><?php the_field("zip+town") ?></p>
        
        </div>
        <div class="footer-right">
            <p>CVR: 00000000</p>
            <p>Sønderskovvej 107</p>
            <p>6800 Varde</p>
        </div>
    </div>
</div>

</body>
</html>