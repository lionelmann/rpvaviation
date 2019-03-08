<?php get_header(); ?>

<section id="about" class="scrollspy">
        <div class="container" >
        <div class="row section ">
            <div class="col s12 m10 offset-m1 about">


                <p>RPV Aviation is operated by Transport Canada Certified flight instructors and pilots. We bring years of manned aviation best practice to UAV operations to ensure the isdustry will thrive and follow the same success.</p>
                <p>UAV's are real flying vehicles that share our airspace, they present enormous potential logistical and safety challenges. Transport Canada regulates UAV operations in Canada and requires all operators hold a Special Flight Operation Certificate (SFOC). In fact, failure to comply with these regulations could result in substantial penalties, seizure of equipment and shut-down of operations. </p><p>More importantly, operators who are not properly trained and certified pose a significant danger to other aircraft and could cause catastrophic incidents. Drone Flight School provides our clients with the essential background knowledge and expertise that ensure safe legal operations.</p>
                <p>Given their low cost compared to regular manned aerial solutions, UAV operations are increasing around the world.</p>
                <p>UAV's are being used in:</p>
                <ul id="double"> 
                <li>Law enforcement</li>
                <li>Traffic accident investigations</li>
                <li>Aerial surveying</li>
                <li>Fire safety</li>
                <li>Crowd control</li>
                <li>Radiation monitoring</li>
                <li>Military</li>
                <li>Photography, video and movie production</li>
                </ul>

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