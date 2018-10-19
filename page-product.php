<?php 

// Template Name: Product Page

get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="sctWrap">
			<header class="sctHero sctHero--prd">
				<h1 class="hdln hdln--prdHeroH1"><?php the_title(); ?></h1>
				<?php 
					$heroImg = get_field('hero_img');
					if( !empty($heroImg) ): ?>
					<img class="heroImg" src="<?php echo $heroImg['url']; ?>" alt="<?php echo $heroImg['alt']; ?>" />
				<?php endif; ?>
				<h2 class="hdln hdln--prdHeroH2"><?php the_field('hero_hdln'); ?></h2>
			</header>
		</div> <!-- END .sctWrap -->
		
		<div class="sctWrap sctWrap--mxw sctWrap--twoCol">
			
			<div class="sctMain sctMain--prd">
				<?php the_field('cntnt_main'); ?>
			</div>
			
			<div class="sctSide sctSide--prd">

				<?php 
					$images = get_field('prd_gall');
					if( $images ): ?>
					<ul class="prdGal">
						<?php foreach( $images as $image ): ?>
						<li>
							<a href="<?php echo $image['url']; ?>" class="fancybox">
								<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>								

			</div>
				
		</div> <!-- END .sctWrap--twoCol -->
		
	</article>
	<?php endwhile; endif; ?>
</section>
<section class="sctn sctn__ndxCntct">
	<h6><a href="<?php bloginfo('url'); ?>/?page_id=43" class="btn btn--thrd" title="Find A Sales Representative Near You">Find A Sales Representative Near You</a></h6>
</section>
<?php get_footer(); ?>