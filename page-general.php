<?php 

// Template Name: General Content

get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="sctWrap">
			<header class="sctHero">
				<h1 class="hdln hdln--pgHero"><?php the_title(); ?></h1>
				<p class="txt txt--pgHero"><?php the_field('cntnt_hero'); ?></p>
			</header>
		</div> <!-- END .sctWrap -->
		
		<div class="sctWrap sctWrap--mxw sctWrap--oneCol">
			<section class="sctMain">
				<?php the_field('cntnt_main'); ?>
			</section> <!-- END .sctMain -->
		</div> <!-- END .sctWrap--mxw -->
		
		<div class="sctWrap sctWrap--mxw" data-attr="<?php the_field('show_pillars'); ?>">
			<h2 class="hdln hdln--pllrMn">Welcome to Polar Country</h2>
			<div class="hdln hdln__rule"></div>
			<section class="sctPllrs">
				<div class="sctPllrs__pillar">
					<div><h3 class="hdln hdln--pllr"><?php the_field('plr_hdln_01'); ?></h3></div>
					<p class="txt txt--pllr"><?php the_field('plr_txt_01'); ?></p>
				</div>
				<div class="sctPllrs__pillar">
					<div><h4 class="hdln hdln--pllr"><?php the_field('plr_hdln_02'); ?></h4></div>
					<p class="txt txt--pllr"><?php the_field('plr_txt_02'); ?></p>
				</div>
				<div class="sctPllrs__pillar">
					<div><h5 class="hdln hdln--pllr"><?php the_field('plr_hdln_03'); ?></h5></div>
					<p class="txt txt--pllr"><?php the_field('plr_txt_03'); ?></p>
				</div>
				<div class="sctPllrs__pillar">
					<div><h6 class="hdln hdln--pllr"><?php the_field('plr_hdln_04'); ?></h6></div>
					<p class="txt txt--pllr"><?php the_field('plr_txt_04'); ?></p>
				</div>
			</section> <!-- END .sctPllrs -->
		</div> <!-- END Pillars -->
		
		<div class="sctWrap sctWrap--mxw" data-attr="<?php the_field('show_reps'); ?>">
			<section class="sctReps">
			<?php if( have_rows('sales_rep') ): ?>
			
				<div class="sctReps__repTile">
			
				<?php while( have_rows('sales_rep') ): the_row(); 
			
					// vars
					$repTitle = get_sub_field('rep_title');
					$repTerr = get_sub_field('rep_terr');
					$repName = get_sub_field('rep_name');
					$repPhO = get_sub_field('rep_ph_o');
					$repPhC = get_sub_field('rep_ph_c');
					$repEmail = get_sub_field('rep_email');
			
					?>
					
					<ul class="sctReps__repDets">
						<li class="sctReps__repDets--name">
							<?php echo $repName; ?>
						</li>
						<li class="sctReps__repDets--title">
							<?php echo $repTitle; ?>
						</li>
						<li class="sctReps__repDets--terr">
							<p>Territory:</p>
							<?php echo $repTerr; ?>
						</li>
						<li class="sctReps__repDets--email">
							<?php if( $repEmail ): ?>
								<a href="mailto:<?php echo $repEmail; ?>">
							<?php endif; ?>
							Email Address
							<?php if( $repEmail ): ?>
								</a>
							<?php endif; ?>
						</li>
						<li class="sctReps__repDets--phone">
							<p>Office:</p>
							<?php echo $repPhO; ?>
						</li>
						<li class="sctReps__repDets--phone">
							<p>Cell:</p>
							<?php echo $repPhC; ?>
						</li>
						
					</ul>
			
				<?php endwhile; ?>
			
				</div> <!-- END .sctReps__repTile -->
			
			<?php endif; ?>
			</section>
		</div> <!-- END Sales Representatives -->
		
		<div class="sctWrap sctWrap--mxw" data-attr="<?php the_field('show_studies'); ?>">
			<section class="sctCases">
				<?php if( have_rows('case_studies') ): ?>
				<?php while( have_rows('case_studies') ): the_row(); 
					// vars
					$csImg = get_sub_field('cs_img');
					$csHdln = get_sub_field('cs_hdln');
					$csIntro = get_sub_field('cs_intro');
					$csPdf = get_sub_field('cs_pdf');
				?>
				<div class="sctCases__csTile">
					<img class="sctCases__img" src="<?php echo $csImg['url']; ?>" alt="<?php echo $csImg['alt']; ?>">
					<h2><?php echo $csHdln; ?></h2>
					<p><?php echo $csIntro ?></p>
					<?php if( $csPdf ): ?>
					<a href="<?php echo $csPdf; ?>" class="btn btn--main">Download Case Study (PDF)</a>
					<?php endif; ?>
				</div> <!-- END .sctCaseStudies__csTile -->
				<?php endwhile; ?>
				<?php endif; ?>
			</section> <!-- END .sctCaseStudies -->
		</div> <!-- END Case Studies -->
		
		<div class="sctWrap sctWrap--mxw sctWrap--oneCol sctCarrers" data-attr="<?php the_field('show_careers'); ?>">
			
			<button class="accordion">Polar Tank: North America Operations</button>
			<div class="panel">
				<div class="flex-wrap"> 
					<div class="left">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/img/careers/polar-tank.gif" alt="Polar Tank" />
					</div> <!-- END .left -->
					<div class="right">
						<p>Polar Tank brings together the engineering, manufacturing, and after-sales support that tank fleets expect from an industry leader. With the industry’s most advanced design and production tools, Polar builds trailers for productivity, efficiency, reliability, and safety. We build a full line of DOT-coded and non-coded tank trailers.</p>
						<a href="https://recruiting2.ultipro.com/ENT1007/JobBoard/3f83c5cf-f7db-485b-a2c5-72ffedc6559f/?q=&o=postedDateDesc" target="_blank" class="btn btn--careers">Athens Trailer Operations</a>
						<a href="https://recruiting2.ultipro.com/ENT1007/JobBoard/fca2279e-ab55-4eb3-ad85-31503ffc74a9/?q=&o=postedDateDesc" target="_blank" class="btn btn--careers">Minnesota Trailer Operations</a>
					</div> <!-- END .right -->
				</div> <!-- END .flex-wrap -->
			</div> <!-- END .panel -->
			
			<button class="accordion">EnTrans International, LLC</button>
			<div class="panel">
			  <div class="flex-wrap">
				  <div class="left no-border">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/img/careers/entrans.gif" alt="EnTrans International" />
					</div> <!-- END .left -->
					<div class="right no-border">
						<p>EnTrans International is a leading manufacturer of tank trailers, oilfield capital equipment and related components used in the oil & gas industry. Driven by a spirit of innovation, EnTrans International is synonymous with the enduring strength of a market leader. The iconic brands within EnTrans International are known the world over for product quality, performance and support every step of the way.</p>
					<a href="https://recruiting2.ultipro.com/ENT1007/JobBoard/b90081a1-70b6-08b4-45c2-c24f73843a77/?q=&o=postedDateDesc" target="_blank" class="btn btn--careers">Career Opportunities</a>
					</div> <!-- END .right -->
				</div> <!-- END .flex-wrap -->
			</div> <!-- END .panel -->
			
			<script>
			  var acc = document.getElementsByClassName("accordion");
			  var i;
			  
			  for (i = 0; i < acc.length; i++) {
			    acc[i].onclick = function() {
			      this.classList.toggle("active");
			      var panel = this.nextElementSibling;
			      if (panel.style.maxHeight){
			        panel.style.maxHeight = null;
			      } else {
			        panel.style.maxHeight = panel.scrollHeight + "px";
			      } 
			    }
			  }
			  for (i = 0; i < acc.length; i++) {
			    acc[i].onclick = function() {
			      this.classList.toggle("active");
			      var panel2 = this.nextElementSibling;
			      if (panel2.style.maxHeight){
			        panel2.style.maxHeight = null;
			      } else {
			        panel2.style.maxHeight = panel2.scrollHeight + "px";
			      } 
			    }
			  }
			</script>
								
		</div> <!-- END Carrers -->
		
	</article>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>