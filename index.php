<?php get_header(); ?>
<div id="content">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
        <div class="post">
            <?if (is_single()){?>
                <a href="javascript:history.go(-1)" class="back"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour</a><?
            }?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_content(); ?></p>
            <p class="postmetadata">Posté le <?php the_time('d/m/Y'); ?></p>
            <p class="category"><?php the_category(', '); ?></p>
        </div>
    <?php
        }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div>

    <div class="row">
  <form class="col s12">
    <div class="row">
        <h3>Receive our latest news !</h3>
      <div class="input-field col s12">
        <input id="email" type="email" class="validate">
        <label for="email" data-error="wrong" data-success="right">Email</label>
      </div>
    </div>
  </form>
</div>

	<section id="cd-timeline" class="cd-container">
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>The Day I Met The Action Sports Scene</h2>
				<p>he Hexo+ booth was located in Hall A1 together with the action sports industry. Around us in the BRANDNEW village, innovative products that had been selected and identified as the best 50 start ups and put in the spotlight. It gave us the chance to present Hexo+ to some of you backers, and also the industry and we saw stars in people’s eyes, from world top riders to video makers and journalists.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Feb 10</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>ISPO here we come!</h2>
				<p>On the heels of the Consumer Electronic Show in Las Vegas where the HEXO+ system and companion app won 3 awards from the tech scene after media demos in the desert, part of our team is getting ready to meet the action sports scene at ISPO - Munich, Germany, @Munich Messe 5-8th Feb</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 29</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>CES Presentation</h2>
				<img src="img/news1.jpg" style="padding-bottom:15px;">
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 24</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-location">
				<img src="img/cd-icon-location.svg" alt="Location">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Bluetooth: it is flying!</h2>
				<p>It is now time to update you about where we stand with regards to the communication link between the smartphone and the drone. Technically, the solution widely used today is telemetry dongles at different frequency bands depending on the country you are located (433MHz, 868MHz or 915Mhz). This however requires to have an additional piece of hardware connected on the smartphone. This is why we have investigated an other solution to have a direct connection with the drone without additionnal piece of hardware: Bluetooth.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 12</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>My first CES: that’s a wrap baby, that’s a wrap!</h2>
				<img src="img/news2.jpg" style="padding-bottom:15px;">
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 9</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-movie">
				<img src="img/cd-icon-movie.svg" alt="Movie">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Let the show begin</h2>
				<p>Here we are, D-Day has come and we’re ready to face the most tech savvy and hot products hunters present at the CES. All the consumer electronics products that will be hot in 2015 are at CES and we gotta stand out. I’ve been going to CES for 6 years and always get very excited to confront what we’ve been developing and get feedback from future customers, users, press, investors, all in one place, it’s a great place to learn about your audience and get instant feedback on their needs, what’s cool ,what’s not.</p>
				<span class="cd-date">Jan 5</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	</section> <!-- cd-timeline -->





<div class="row">
    <div class="col l12 m12">
        <div class="cuteslide">
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone1.jpg"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone2.jpg"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone3.jpg"></div>
        </div>
        <div class="navslide">
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone1.jpg" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone2.jpg" style="padding:0 10px;"></div>
            <div><img src="<?php bloginfo('template_url'); ?>/build/img/drone3.jpg" style="padding:0 10px;"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
