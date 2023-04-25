<?php

$embed = get_field("video"); 

?>
<?php get_header () ?>




    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <div class="hero-video">
            <?php
                $video = get_field('video');
                if( $video ) {
                    echo '<video controls><source src="' . $video['url'] . '" type="' . $video['mime_type'] . '"></video>';
            }
            ?>

        </div>

        <div class="buy-ticket reveal">
            <a href="#" class="buy-hover"> <div class="buy-ticket-button">
            <h4>KØB BILLET </h4>
                </div></a> 


       
               

        </div>

        <div class="countdown reveal">

        </div>

        <div class="line-up-heading">
            <h3><?php the_field("headline1") ?></h3>
            <div id="year">
                <h6><?php the_field("year") ?></h6>
            </div>
            
        </div>

        <div class="line-up">

        <?php $loop = new WP_Query(array('post_type' => 'artist', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

        
            <div>
                <div id="info-line-up">
                <ul>
                        <li>
                            <a href="javascript:void(0)" class="artist" data-image-url="<?php the_field("artist-image") ?>"><h5 class="artist-hover"><?php the_field("artist-name") ?></h5></a>
                        </li>

                </ul>
                </div>
                
                        <div id="image-holder">
                            <img src="<?php the_field("line-up-image") ?>" alt="">
                        </div>
            </div>

        <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

        </div>


        <div class="gallery">
            <div class="gallery-heading">
                <h3><?php the_field("headline2") ?></h3>
            </div>
            <div class="gallery-carousel reveal">
                

            </div>

        </div>

        <div class="explore ">
            <div class="explore-heading">
                <h3><?php the_field("headline3") ?></h3>
            </div>
            <div class="bars reveal">
            <?php $loop = new WP_Query(array('post_type' => 'bar', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                   
                    <div id="bars">
                        <h5><?php the_field("bar-title") ?></h5>
                        <p><?php the_field("bar-text") ?></p>

                    </div>
                        
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>
            <div id="bars-info">
                    <h5>Og mange flere!</h5>
            </div>
        </div>

<?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>

    <script>

  var artists = document.getElementsByClassName("artist");
            console.log(artists);
            for (var i = 0; i < artists.length; i++) {
                artists[i].addEventListener("mouseover", function() {
                    document.getElementById("image-holder").style.backgroundImage = "url('" + this.getAttribute("data-image-url") + "')";
                });
               
            }
  
    </script>



<?php get_footer () ?>