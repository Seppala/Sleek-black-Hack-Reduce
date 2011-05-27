	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
		<head>
<script type="text/javascript">
  var _kmq = _kmq || [];
  function _kms(u){
    setTimeout(function(){
      var s = document.createElement('script'); var f = document.getElementsByTagName('script')[0]; s.type = 'text/javascript'; s.async = true;
      s.src = u; f.parentNode.insertBefore(s, f);
    }, 1);
  }
  _kms('//i.kissmetrics.com/i.js');_kms('//doug1izaerwt3.cloudfront.net/2e8d61305507da8356046a3672e1eb2ab0e11fdd.1.js');
</script>
<link  href="http://fonts.googleapis.com/css?family=Geo:regular" rel="stylesheet" type="text/css" >
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
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

<!--		<div class="postmetadata">
			<span class="date">Posted on: <a href="<?php echo get_permalink(); ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_time('F jS, Y') ?></a></span>
		</div>
-->

		<div class="contents">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
<!--
		<div class="postmetadata">
			<span class="category">Filed under: <?php the_category(',', '' ); ?></span>
			<span class="tag"><?php the_tags('Tags: ', ', ', ''); ?></span>
		</div>
-->
	</div>

<!-- /entry -->
<div class="separator"></div>



<?php endwhile; ?>

<!--
		<div id="comments_template">
			<?php comments_template(); ?>
		</div>
-->
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