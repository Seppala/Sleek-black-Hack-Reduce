<?php
/*
Template Name: Archives
*/
?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
		<head>
<link  href="http://fonts.googleapis.com/css?family=Geo:regular" rel="stylesheet" type="text/css" >

			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			<meta http-equiv="Content-Style-Type" content="text/css" />
			<meta http-equiv="Content-Script-Type" content="text/javascript" />
			<meta name="description" content="<?php bloginfo('description'); ?>" />
			<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
			<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
			<script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js" type="text/javascript"></script>
			<?php wp_get_archives('type=monthly&format=link'); ?>
			<?php wp_head(); ?>
		</head>

<body>

<!-- start -->

<div id="wrapper">

	<?php get_header(); ?>

<div id="largewrapper">

<!-- sidebar -->
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>
<!-- /sidebar -->



<!-- entries -->
	<div id="entries">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<!-- entry -->
	<div class="entry">
			<h3 id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php the_title(); ?> <?php edit_post_link('Edit',' | ',''); ?></h3>


		<div class="contents">
<h4>Archives by Month:</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<h4>Archives by Subject:</h4>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
<h4>Sitemap:</h4>
	<ul>
 		<?php wp_list_pages('title_li=&sort_column=post_title' ) ?>
	</ul>


		<p>Here is a complete archiving of the articles posted here at <?php _e(bloginfo('name')); ?>.</p>
		<ul id="archives-list">
			<?php 
				$totalposts = get_posts('numberposts=200&offset=0');
				foreach($totalposts as $post) :  
			?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>  
     			<?php endforeach; ?>
		</ul>		</div>

	</div>

<!-- /entry -->
<div class="separator"></div>



<?php endwhile; ?>


		<div id="comments_template">
			<?php comments_template(); ?>
		</div>
<?php else : ?>

	<div class="entry">
		<h3>Not Found</h3>
		<div class="contents">
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>
	</div>
<div class="separator"></div>

<?php endif; ?>

		</div>
<!-- /entries -->


<div class="clear"></div>
</div>


<div class="clear"></div>

<?php get_footer(); ?>
</div>

<!-- end -->
</body>
</html>