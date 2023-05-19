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
                    echo '<video controls autoplay="autoplay" muted loop><source src="' 
                    . $video['url'] . '" type="' . $video['mime_type'] . '"></video>';
            }
            ?>

        </div>

        <div class="buy-ticket reveal">
            <a href="<?php the_field("kob-billet") ?>" target="_blank" class="buy-hover"> <div class="buy-ticket-button">
            <h4>KØB BILLET </h4>
                </div></a> 


       
               

        </div>

        <div class="countdown">

             <h2 id="demo"></h2> 

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
                                    <a href="javascript:void(0)" class="artist" data-image-url="<?php the_field("artist-image") ?>">
                                    <h5 class="artist-hover"><?php the_field("artist-name") ?></h5></a>
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
            <div class="image-container">
  <div class="image-wrapper">
    <div>
      <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1607522370275-f14206abe5d3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    <div>
      <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c2hvZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
    
  </div>
</div>

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


            
// Set the date we're counting down to
var countDownDate = new Date("<?php the_field("date")?>").getTime();
console.log("<?php the_field("date") ?>");

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "t "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);



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