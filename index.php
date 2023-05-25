<meta
  name="description"
  content="Oplev Owen Luft Kånsert på Nordenskov stadion hver år. Vi garantere en dag med ægte dansk råhygge!">
<?php get_header () ?>


<div class="section">
    <div class="sidebar"></div>
    <div class="box">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>


            <div>
                <div class="standart-page">
                    <div class="all-header"><h3><?php the_field("all-header") ?></h3></div>
                    <div class="standart-info">
                        <div class="all-info"><p><?php the_field("all-info") ?></p></div>
                        <div class="all-img"><img src="<?php the_field("all-img") ?>" alt=""></div>
                    </div>
                </div>
            </div>



    <?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
        <?php endif; ?>
    </div>

</div>


<?php get_footer () ?>