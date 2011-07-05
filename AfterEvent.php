<?php /*
Template Name: ListPostsInCategoryThatHasSameNameAsPage_TOC_After
*/ ?>
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
			<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
			<script src="<?php bloginfo('template_url'); ?>/js/smoothscroll.js" type="text/javascript"></script>
			<?php wp_get_archives('type=monthly&format=link'); ?>
			<?php wp_head(); ?>
		</head>
<body>


<div id="wrapper">

<?php get_header(); ?>


<div id="largewrapper">

	<div id="entries">
	<div class="contents">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; else: endif; ?>
		
			
		<h2 id="fromtheblog" class="fromthe">From the blog about <?php wp_title(); ?></h2>	
		<?php query_posts ('category_name='.get_the_title().'&post_status=publish,future'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
					
					<ul class="TOC"> 
						<li id="idpost-<?php the_ID(); ?>">
							<a href="#post-<?php the_ID();?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</li>
					</ul> 
				<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		&nbsp;
		<div class="clear"></div>
		<?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><a href="<?php the_permalink(); ?>" name="post-<?php the_ID();?>"><?php the_title(); ?></a></h1>
		<p><?php the_content(); ?>
		<?php endwhile; else: endif; ?>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; else: endif; ?>	


<div class="separator"></div>

	
<div class="separator"></div>

		</div></div>

<div class="clear"></div>

<?php get_footer(); ?>
</div>

</body>
</html>