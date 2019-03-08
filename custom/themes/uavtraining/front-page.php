<?php get_header(); ?>

<section id="about" class="scrollspy">
        <div class="container" >
        <div class="row section ">
            <div class="col s12 m10 offset-m1 about">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <div class="parallax-container valign-wrapper" style=" min-height: 450px;">
    <div class="section no-pad-bot">
            <div class="container">
                <blockquote>
                    <p>RPV Aviation helped our business obtain an SFOC with great efficiency and professionalism. They made sure we were knowledgeable of all rules and regulations and that we had all the tools to fly safely and legally. I would highly recommend them to anyone else looking to fly UAVs in Ontario.</p>
                </blockquote>
                <span class="right">- Matthew Jaglowitz, Director Exactus Energy</span>
            </div>
        </div>
        <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/bg_testimonial.jpg"></div>
    </div>
</section>

<?php get_footer(); ?>