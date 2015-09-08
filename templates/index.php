<?php get_header();?>
<section id="home" class="fullh" style="background-image: url(<?php the_field('home_background'); ?>);">
	<div id="filter"></div>
	<div id="home-logo" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo2.png);"></div>
	<!-- <h2>A Student Run Venture Capital Firm</h2> -->
</section>

<section id="about" style="background-image: url(<?php the_field('about_background'); ?>);">
	<a href="#about" id="down-arrow">
		<i class="fa fa-angle-double-down"></i>
		<div id="left"></div>
		<div id="right"></div>
	</a>
	<div id="timeline"></div>
	<div class="grid">
		<h2><?php the_field('about_title'); ?></h2>
		<div id="about-content" class="col-1-2">
			<h5><?php the_field('about_node_one_title'); ?></h5>
			<p><?php the_field('about_node_one_content'); ?></p>
		</div>
		<div class="col-1-2">
			<div class="jhu">
				<span style="background-image:url(<?php the_field('about_node_one_image'); ?>);"></span>
			</div>
		</div>
	</div>
	<div id="history" class="grid">
		<div class="col-1-2">
			<div class="jhu">
				<span style="background-image:url(<?php the_field('about_node_two_image'); ?>);"></span>
			</div>
		</div>
		<div id="history-content" class="col-1-2">
			<h5><?php the_field('about_node_two_title'); ?></h5>
			<p><?php the_field('about_node_two_content'); ?></p>
		</div>
	</div>
	<div id="quote">
		<div id="quote-pic" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/double.png);"></div>
		<p><?php the_field('about_quote'); ?></p>
		<h6>-<?php the_field('about_quote_author'); ?></h6>
		<div id="quote-pic-right" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/double.png);"></div>
	</div>
</section>

<section id="enterprises">
	<h2>Enterprises</h2>
	<div id="ent-menu">
		<ul>
			<?php 
			$posts = get_field('enterprises');
			if( $posts ): ?>
				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					<?php setup_postdata($post); ?>
					<li><a data-link="<?php the_field('link'); ?>" data-anchor="#<?php the_field('page_anchor'); ?>" href="" style="background-image:url(<?php the_field('logo'); ?>);"></a></li>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</ul>
	</div>
	<?php 
	$posts = get_field('enterprises');
	if( $posts ): ?>
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post); ?>
			<div id="<?php the_field('page_anchor'); ?>" class="enterprise" style="background-image:url(<?php the_field('image'); ?>);">
				<?php if( get_field('video_source_two') ): ?>
					<video class="home_video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" volume="0">
						<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php the_field('video_source_two'); ?>" type="video/webm">
						<?php if( get_field('video_source_one') ): ?>
							<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/<?php the_field('video_source_two'); ?>" type="video/mp4">
						<?php endif; ?>
					</video>
					<div id="filter"></div>
				<?php endif; ?>
				<div class="ent-content">
					<a href="<?php the_field('link'); ?>" target="_blank"><div class="ent-logo" style="background-image: url(<?php the_field('logo'); ?>);"></div></a>
					<div class="ent-body">
						<h4><?php the_field('tag_line'); ?></h4>
						<h6><?php the_content(); ?></h6>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
</section>

<section id="team" style="background-image: url(<?php the_field('team_background'); ?>);">
	<h2>Our Team</h2>
	<div class="grid">
		<?php 
	    $posts = get_field('team_members');
	    if( $posts ): ?>
	        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	            <?php setup_postdata($post); ?>
	            <div class="col-1-6 mem" data-image="<?php the_field('image'); ?>" data-name="<?php the_title(); ?>" data-position="<?php the_field('position'); ?>" data-bio="<?php the_content(); ?>">
					<div class="mem-photo" style="background-image: url(<?php the_field('image'); ?>);"></div>
					<h3><?php the_title(); ?></h3>
					<h4><?php the_field('position'); ?></h4>
				</div>
	        <?php endforeach; ?>
	        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	    <?php endif; ?>
	</div>
</section>

<section id="start-your-venture" style="background-image: url(<?php the_field('venture_background'); ?>)">
	<div class="grid">
		<h2>Begin Your Venture</h2>
		<div class="col-1-3 ven">
			<i class="fa fa-pencil-square-o"></i>
			<h5>Plan</h5>
			<p>What do hopkins undergraduates need? What value can be brought to campus? Answer these questions in the form of a business plan - identifying a market, a value proposition and a business strategy.</p>
		</div>
		<div class="col-1-3 ven">
			<i class="fa fa-line-chart"></i>
			<h5>Project</h5>
			<p>Do industry and market research to make financial projections for your business idea.  The members of HSE will advise you and together will create a comprehensive breakdown of all the financial matters concerning the new business.</p>
		</div>
		<div class="col-1-3 ven">
			<i class="fa fa-comments"></i>
			<h5>Pitch</h5>
			<p>With your projections and business  plan in hand, craft a presentation to convince the HSE team. With our approval, we will help you logistically and financially to bring your idea into reality. No business background required: only a passion for your idea.</p>
		</div>
	</div>
</section>

<section id="contact">
	<div class="grid">
		<h2>Contact</h2>
		<div class="col-1-2">
			<a id="address">
				<p>3500 N Charles Street</p>
				<p>Whitehead Hall</p>
				<p>Baltimore, MD 21218</p>
			</a>
		</div>
		<div class="col-1-2">
			<a href="mailto:hse@jhu.edu"><p>hse@jhu.edu</p></a>
			<a href="https://www.facebook.com/hopkinsstudententerprises"><p>Facebook</p></a>
			<a href="https://www.linkedin.com/company/hopkins-student-enterprises"><p>Linkedin</p></a>
		</div>
	</div>
	<div id="gilman" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/gilman.png);"></div>
	<h6>COPYRIGHT &copy; 2015 HOPKINS STUDENT ENTERPRISES.</h6>
</section>

<section id="bios">
	<div id="bios-wrapper">
		<div id="bios-pic"></div>
		<div id="bios-content">
			<h4></h4>
			<h5></h5>
			<div id="bios-bio"></div>
		</div>
	</div>
	<i id="bios-out" class="fa fa-times"></i>
</section>
<? get_footer(); ?>