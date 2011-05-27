
	<ul>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>



<!-- monthly -->
		<li id="monthly">
			<h2>Monthly</h2>
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=0'); ?>
				</ul>
		</li>
<!-- /monthly -->

<!-- meta -->
		<li id="meta">
			<h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS"><abbr title="Really Simple Syndication">RSS</abbr></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid <abbr title="Cascading Style Sheet">CSS</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform."><abbr title="WordPress">WP</abbr></a></li>
					<?php wp_meta(); ?>
				</ul>
		</li>
<!-- /meta -->

<?php endif; ?>

	</ul>