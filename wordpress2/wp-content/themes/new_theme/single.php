
<?php get_header(); ?>
<style type="text/css">
	body{
		background: #191919;
		color: white;
	}
</style>
<div class="container pt-5 pb-5">

	<div class="row">
		
		<div style="background: #111111" class="col-sm-8 shadow p-5">
			<h1><?php the_title(); ?></h1>
			<hr style="background: white;">

			<?php if(has_post_thumbnail()): ?>

			<img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid">

			<?php endif; ?>

			<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<?php the_content(); ?>

			<hr style="background: white;">
			<?php 
			if ( comments_open() ):
			comments_template();
			endif;


			?>



			<?php endwhile; endif; ?>
		</div>
		<div class="col-sm-4 p-5">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Area") ) : ?>
			<?php endif;?>
		</div>
	</div>
	


	

</div>


<div style="background:  #070707;">
	<?php get_footer(); ?>
</div>

