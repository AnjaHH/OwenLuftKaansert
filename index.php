<?php

$embed = get_field("video"); 

?>
<?php get_header () ?>

    <div class="section">
    <div class="sidebar"></div>

    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>


        <div class="hero-video">
            <?php
                $video = get_field('video');
                if( $video ) {
                    echo '<video controls autoplay="autoplay" muted loop><source src="' . $video['url'] . '" type="' . $video['mime_type'] . '"></video>';
            }
            ?>

        </div>

        <div class="buy-ticket reveal">
            <a href="<?php the_field("kob-billet") ?>" target="_blank" class="buy-hover"> <div class="buy-ticket-button">
            <h4>KØB BILLET </h4>
                </div></a> 


       
               

        </div>

        <div class="countdown">

            <!-- <p id="demo"></p> -->

        </div>

        <div class="line-up-heading">
            <h3><?php the_field("headline1") ?></h3>
            <div id="year">
                <h6><?php the_field("year") ?></h6>
            </div>
            
        </div>

        <div class="line-up">

            <div id="line-up">
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
                        
                                
                    </div>

                <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
            </div>
            <div class="image-holder reveal">
                 <div id="image-holder" style="background-size: cover"></div>
            </div>
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

            <div id="bar">
                
                <div class="bar-marton ">
                    <p><?php the_field("bar-rules") ?></p>
                
                </div>
                <div class="bar-marton-kort reveal">
                    <img src="<?php the_field("bar-image") ?>" alt="">
                </div>

            </div>
            <div id="bars-info">
                    <h5>Besøg også vores mange andre barer!</h5>
            </div>
        </div>

<?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>
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