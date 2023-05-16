<?php wp_head() ?>

<div class="info">
    <div class="tekst">

        <div class="info_tekst"> 
        <p> <?php the_field("info-tekst")?> </p>
        </div>
    </div>
      
</div>


    <?php
         $loop = new WP_Query( array(
        'post_type' => 'history',
         'posts_per_page' => -1
     )
      );?>  

    <?php $i = 0; ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php $class = ($i % 2 == 0) ? "odd" : "even"; ?> 
        <div class="timeline <?php echo $class; ?>">
        <div class="container <?php echo ($class == 'odd') ? 'left' : 'right'; ?>" style="height: <?php echo 100*$loop->post_count - 1*($loop->post_count-1) ?>">
            <div class="content">
                <div class="year_number"><?php the_title("")?></div>
            <img class="plakat" src="<?php the_field("plakat")?>" alt="">
            </div>
        </div>
        
    </div>
    <?php $i++; ?>
    <?php endwhile; ?>




<?php get_footer () ?>