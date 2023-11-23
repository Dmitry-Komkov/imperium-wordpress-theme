<div id="akismet-plugin-container">
	<div class="akismet-masthead">
		<div class="akismet-masthead__inside-container">
<<<<<<< HEAD
			<a href="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>" class="akismet-right"><?php esc_html_e( 'Anti-Spam Settings', 'akismet' ); ?></a>
			<div class="akismet-masthead__logo-container">
				<img class="akismet-masthead__logo" src="<?php echo esc_url( plugins_url( '../_inc/img/logo-full-2x.png', __FILE__ ) ); ?>" alt="Akismet" />
			</div>
		</div>
	</div>
	<iframe src="<?php echo esc_url( sprintf( 'https://tools.akismet.com/1.0/user-stats.php?blog=%s&api_key=%s&locale=%s', urlencode( get_option( 'home' ) ), esc_attr( Akismet::get_api_key() ), esc_attr( get_locale() ) ) ); ?>" width="100%" height="2500px" frameborder="0"></iframe>
=======
			<?php Akismet::view( 'logo', array( 'include_logo_link' => true ) ); ?>
			<div class="akismet-masthead__back-link-container">
				<a class="akismet-masthead__back-link" href="<?php echo esc_url( Akismet_Admin::get_page_url() ); ?>"><?php esc_html_e( 'Back to settings', 'akismet' ); ?></a>
			</div>
		</div>
	</div>
	<?php /* name attribute on iframe is used as a cache-buster here to force Firefox to load the new style charts: https://bugzilla.mozilla.org/show_bug.cgi?id=356558 */ ?>
	<iframe id="stats-iframe" src="<?php echo esc_url( sprintf( 'https://tools.akismet.com/1.0/user-stats.php?blog=%s&token=%s&locale=%s&is_redecorated=1', urlencode( get_option( 'home' ) ), urlencode( Akismet::get_access_token() ), esc_attr( get_locale() ) ) ); ?>" name="<?php echo esc_attr( 'user-stats- ' . filemtime( __FILE__ ) ); ?>" width="100%" height="2500px" frameborder="0" title="<?php echo esc_attr__( 'Akismet detailed stats' ); ?>"></iframe>
>>>>>>> update
</div>