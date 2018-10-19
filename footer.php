		<footer id="footer" role="contentinfo">
			<div class="ftr__logo">
				<img src="<?php bloginfo('url'); ?>/wp-content/themes/img/polar_logo_footer.svg" alt="Polar Tank Trailer">
			</div> <!-- END .ftr__logo -->
			<div class="ftr__links">
				<h1 class="hdln hdln--ftr" >Tank Trailers</h1>
				<div>
					<ul>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=23">Chemical</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=17">Petroleum</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=13">Food Grade: Liquid</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=11">Energy</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=15">Hot Products</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=19">Corrosive</a></li>
					</ul>
				</div>
				<div>
					<ul>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=21">Petro-chemimcal / Crude</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=27">Deep Drop</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=29">Canadian</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=107">Food Grade: Dry Bulk</a></li>
						<li class="ftr__linkItem"><a href="<?php bloginfo('url'); ?>/?page_id=25">Dry Bulk Pneumatic</a></li>
					</ul>
				</div>
			</div> <!-- END .ftr__links -->
			<div class="ftr__cntct">
				<h2 class="hdln hdln--ftr">Contact Us</h2>
				<div>
					<address class="ftr__cntctAddr">12810 Co. Rd. 17 Holdingford, MN 56340</address>	
					<p class="ftr__cntctTxt"><a href="18008266589">800-826-6589</a></p>
				</div>
				<div>
					<p class="ftr__cntctTxt--cpyrt">
						<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
					</p>
				</div>
			</div> <!-- END .ftr__cntct -->
		</footer>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>