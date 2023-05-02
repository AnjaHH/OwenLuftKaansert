<?php wp_footer()?>

<div class="footer">
    <div class="sponsors">
        <?php $loop = new WP_Query(array('post_type' => 'sponsor', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <img class="sponsor-img" src="<?php the_field("sponsor-image") ?>" alt="">
                        
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

    </div>
</div>
<div class="footer-second">
    <div class="footer-info">
        <div class="footer-left">
            <p><?php the_field("cvr") ?></p>
            <p><?php the_field("adresse") ?></p>
            <p><?php the_field("zip+town") ?></p>
        
        </div>
        <div class="footer-mid">
             <p>Owen Luft Kaansert - All Rights Reserved</p>
        </div>
        <div class="footer-right">
            <div class="footer-links">
                <a href="#"><i class="bi bi-arrow-right"></i> Kunstnere</a>
                <a href="#"><i class="bi bi-arrow-right"></i> Praktisk info</a>
                <a href="#"><i class="bi bi-arrow-right"></i> Om Owen Luft</a>
                
            </div>
            <div class="footer-links">
                <a href="#"><i class="bi bi-arrow-right"></i> Historie</a>
                <a href="#"><i class="bi bi-arrow-right"></i> Privatlivs politik</a>
                <a href="#"><i class="bi bi-arrow-right"></i> Presse</a>
            </div>
            
        </div>
    </div>
</div>



</body>
</html>