<?php get_header () ?>


<div class="section">
    <div class="sidebar"></div>
   
    <div class="box">

        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
        <div class="backgroundimg">
            <div class="overlay">
        <div class="line"></div>
        <div class="history-text">
            <div class="history-info"><p><?php the_field("history-info") ?></p></div>
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
          <div class="history_box reveal <?php echo ($class == 'odd') ? 'left' : 'right'; ?>" style="height: <?php echo 50*$loop->post_count - 1*($loop->post_count-1) ?>">
             <div class="content">
                <div class="year_number"><?php the_title("")?></div>
             <img class="plakat" src="<?php the_field("plakat")?>" alt="">
            </div>
        </div>
        
     </div>
     <?php $i++; ?>
     <?php endwhile; ?>



        <?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>
    </div>
    </div>
</div>


<?php get_footer () ?>