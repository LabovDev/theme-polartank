<?php 

// Template Name: Home Page

get_header(); ?>

<section class="sctn sctn--ndxHero" >
	<div class="sctWrap">
		
		<?php echo do_shortcode('[metaslider id="392"]'); ?>

		<h1 class="hdln hdln--ndxHero"><?php the_field('hero_hdln'); ?></h1>
		<p class="txt txt--ndxHero"><?php the_field('hero_txt'); ?></p>
	</div> <!-- END .sctWrap__mxw -->
</section> <!-- END .sctIndx__hero -->

<section class="sctn sctn__ndxProdMenu">
	<h1 class="hdln hdln--ProdMenu">Product Quick Links</h1>
	<?php if( have_rows('prdct_menu') ): ?>

	<ul class="ndxProdMenu">

	<?php while( have_rows('prdct_menu') ): the_row(); 

		// vars
		$item = get_sub_field('menu_item');
		$link = get_sub_field('menu_link');

		?>

		<li class="ndxProdMenu__item">

			<?php if( $link ): ?>
				<a class="btn btn--ProdMenu" href="<?php echo $link; ?>">
			<?php endif; ?>

				<?php echo $item; ?>

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		</li>

	<?php endwhile; ?>

	</ul>

	<?php endif; ?>
</section>

<section class="sctn sctn__tshow">
	<h1 class="hdln hdln--tshow">See us at: 2018 Tank Truck Week &bull; Nov. 5 - 7, 2018 &bull; Music City Center &bull; Nashville, TN</h1>
	<a class="btn btn--scnd" href="http://www.tanktruck.org/events/events-detail-view/2018-tank-truck-week" target="_blank">More Info</a>
</section> <!-- END .sctn__tshow -->

<section class="sctn sctn__ndxAbt">
	<div class="sctWrap sctWrap--mxw">
		<h2 class="hdln hdln--ndxAbt"><?php the_field('sct_about_hdln'); ?></h2>
		<p class="txt txt--ndxAbt"><?php the_field('sct_about_txt'); ?></p>
		<a href="<?php bloginfo('url'); ?>/?page_id=43" class="btn btn--scnd">Find A Sales Representative</a>	
	</div> <!-- END .sctWrap__mxw -->
</section> <!-- END .sctIndx__about -->

<section class="sctn sctn__ndxProd">
	<div class="sctWrap sctWrap--mxw">
		<div class="ndxProd__img">
			<?php 
			$image = get_field('sct_prd_img_main');
			if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="ndxProd__cntnt">
			<h3 class="hdln hdln--ndxPrd"><?php the_field('sct_prd_hdln'); ?></h3>
			<div>
				<p class="txt txt--ndxPrd"><?php the_field('sct_prd_txt'); ?></p>
				<a href="<?php the_field('sct_prd_link'); ?>" class="btn btn--main btn--mainProd">Learn More About Food Grade</a>				
			</div>
		</div>
	</div> <!-- END .sctWrap__mxw -->
</section>

<section class="sctn sctn__ndxRscrs">
	<div class="sctWrap sctWrap--mxw">
		<div class="sctBloc sctBloc--50 sctBloc--rscrs">
			<h4 class="hdln hdln--ndxRsrcs"><?php the_field('sct_rsrcs_hdln_01'); ?></h4>
			<p class="txt txt--ndxRsrcs"><?php the_field('sct_rsrcs_txt_01'); ?></p>
			<a href="<?php the_field('sct_rscrs_link_01'); ?>" class="btn btn--scnd"><?php the_field('sct_rscrs_link_desc_01'); ?></a>
		</div>
		<div class="sctBloc sctBloc--50 sctBloc--rscrs">
			<h5 class="hdln hdln--ndxRsrcs"><?php the_field('sct_rsrcs_hdln_02'); ?></h5>
			<p class="txt txt--ndxRsrcs"><?php the_field('sct_rsrcs_txt_02'); ?></p>
			<a href="<?php the_field('sct_rscrs_link_02'); ?>" class="btn btn--scnd"><?php the_field('sct_rscrs_link_desc_02'); ?></a>
		</div>
	</div> <!-- END .sctWrap__mxw -->
</section>

<?php get_footer(); ?>