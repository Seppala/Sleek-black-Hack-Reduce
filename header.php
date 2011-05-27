<!-- navigation -->
	<div id="navigation">
		<ul id="nav">

<!--
			<li class="<?php if (!is_paged() && is_home()) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>/"  title="Home"><?php _e('Home','simplenotes'); ?></a></li>
-->
			<?php wp_list_pages('title_li&depth=2'); ?>
		</ul>

		<div class="clear"></div>
	</div>
<!-- /navigation -->

<!--miniwrapper-->
	<div id="miniwrapper">
<!-- header -->
		<div id="header">
				<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
		</div>
<!-- search -->
 	<div id="topsearchwrapper">

		<form method="get" id="topsearch" action="<?php bloginfo('url'); ?>/">

			<div>

				<input type="text" name="s" id="s" value="Search keywords" onfocus="if (this.value == 'Search keywords') { this.value='' }" onblur="if (this.value == '') { this.value='Search keywords' }" />

				<input type="submit" id="go" alt="Search" title="Search" />

		<div class="clear"></div>
			</div>

		</form>
	</div>
<!-- /search -->
		<div class="clear"></div>
<!-- /header -->

	</div>
<!--/miniwrapper-->

