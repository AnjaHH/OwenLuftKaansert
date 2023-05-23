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
            <p>CVR: 44005239</p>
            <p>Sønderskovvej 107</p>
            <p>6800 Varde</p>
        
        </div>
        <div class="footer-mid">
             <p>Owen Luft Kånsert - All Rights Reserved</p>
        </div>
        <div class="footer-right">
            <div class="footer-links">
                <a href="https://anjahein.dk/OwenLuftKaansert/kunstnere/"><i class="bi bi-arrow-right"></i> Kunstnere</a>
                <a href="https://anjahein.dk/OwenLuftKaansert/praktisk-info/"><i class="bi bi-arrow-right"></i> Praktisk info</a>
                <a href="https://anjahein.dk/OwenLuftKaansert/om-owenluft/"><i class="bi bi-arrow-right"></i> Om Owen Luft</a>
                
            </div>
            <div class="footer-links">
                <a href="https://anjahein.dk/OwenLuftKaansert/historie/"><i class="bi bi-arrow-right"></i> Historie</a>
                <a href="https://anjahein.dk/OwenLuftKaansert/privacy-policy/"><i class="bi bi-arrow-right"></i> Privatlivs politik</a>
                <a href="https://anjahein.dk/OwenLuftKaansert/presse/"><i class="bi bi-arrow-right"></i> Presse</a>
            </div>
            
        </div>
        
    </div>
    
</div>
<div class="payment" style="padding-left: 110px;">
    <p>Dette er et eksamens projekt</p>
</div>



</body>
</html>