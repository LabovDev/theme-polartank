<?php 

// Template Name: General Content (2 Columns)

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
		
		<div class="sctWrap sctWrap--mxw sctWrap--twoCol">
			<section class="sctMain">
				<?php the_field('cntnt_main'); ?>
			</section>
			<section class="sctSide">
				<?php the_field('cntnt_side'); ?>
			</section>	
		</div> <!-- END .sctWrap--twoCol -->
		
	</article>
	<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>