	<?php do_action('before_footer'); ?>

	<footer role="contentinfo">

		<?php if(!is_front_page()): ?>
			<div class="footer__signup">
				<div class="max__width">
					<div id="mc_embed_shell">
					<link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
						<form action="https://annettedobbs.us3.list-manage.com/subscribe/post?u=b1caaa2559e812e3f14ce412c&amp;id=39dff1805c&amp;f_id=00a65ee2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
							<div id="mc_embed_signup_scroll"><h2>Sign Up for Updates</h2>
								<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
								<div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div><div class="mc-field-group"><label for="mce-FNAME">First Name <span class="asterisk">*</span></label><input type="text" name="FNAME" class="required text" id="mce-FNAME" required="" value=""></div><div class="mc-field-group"><label for="mce-LNAME">Last Name <span class="asterisk">*</span></label><input type="text" name="LNAME" class="required text" id="mce-LNAME" required="" value=""></div>
							<div id="mce-responses" class="clear foot">
								<div class="response" id="mce-error-response" style="display: none;"></div>
								<div class="response" id="mce-success-response" style="display: none;"></div>
							</div>
							<div aria-hidden="true" style="position: absolute; left: -5000px;">
								/* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
								<input type="text" name="b_b1caaa2559e812e3f14ce412c_39dff1805c" tabindex="-1" value="">
							</div>
								<div class="optionalParent">
									<div class="clear foot">
										<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
										<p style="margin: 0px auto;"><a href="http://eepurl.com/iWBrEs" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p>
									</div>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
				</div>
			</div>
		<?php endif; ?>

		<div class="footer__menus">
			<div class="max__width">
				
				<?php
				while (have_rows('footer_menus', 'options')) : the_row();

					$footer_menu = get_sub_field('footer_menu');
				?>
					<article class="footer__menu">
						<?php if ($footer_menu) : ?>
							<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
							<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
						<?php endif; ?>
					</article>

				<?php endwhile; ?>
			</div>
		</div>

	</footer>

	<div class="spotlight-search">
		<div class="spotlight-search--content">
			<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

			<h2>Search Annette Dobbs Opticians</h2>
			<form action="<?php echo esc_url(home_url()); ?>">
				<input type="text" name="s" placeholder="ie. News" />
				<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
			</form>
		</div>
	</div>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	</body>

	</html>