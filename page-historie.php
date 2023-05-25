<meta
  name="description"
  content="Owen Luft har en lang historik, med mange hyggelige kånserter bag sig, oplev de sidste mange års kunstnere her.">
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

    <div class="gallery">
            
            <div class="gallery-carousel ">

            <div class="image-container">
            
  <div class="image-wrapper">
  <?php $loop = new WP_Query(array('post_type' => 'history-carousel','posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
     <div class="carousel-image">
        <img src="<?php the_field("carousel-image") ?>" alt="">    
    </div>
   


            
            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        </div>
                        </div>

        </div>
        </div>

    
    </div>
</div>

<script>

const imageWrapper = document.querySelector('.image-wrapper')
const imageItems = document.querySelectorAll('.image-wrapper > *')
const imageLength = imageItems.length
const perView = 3
let totalScroll = 0
const delay = 2000

imageWrapper.style.setProperty('--per-view', perView)
for(let i = 0; i < perView; i++) {
  imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}

let autoScroll = setInterval(scrolling, delay)

function scrolling() {
  totalScroll++
  if(totalScroll == imageLength + 1) {
    clearInterval(autoScroll)
    totalScroll = 1
    imageWrapper.style.transition = '0s'
    imageWrapper.style.left = '0'
    autoScroll = setInterval(scrolling, delay)
  }
  const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 24
  imageWrapper.style.left = `-${totalScroll * widthEl}px`
  imageWrapper.style.transition = '.3s'
}



  
    </script>


<?php get_footer () ?>