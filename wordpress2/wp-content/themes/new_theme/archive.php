<?php get_header(); ?>
<style type="text/css">
	body{
		background: #191919;
		color: white;
	}
	.myshadow{
		box-shadow:0 .5rem 1rem rgba(255, 36, 36, 0.55)!important
	}


	/*rgba(255, 36, 36, 0.55)*/
</style>
<div class="container pt-5 pb-5">

			
	<br><br> <!-- for testing only -->
	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>

		<div class="row">
			
			<div style="background: #111111" class="col-sm-12 myshadow p-5 mb-4 mt-4">
				
				<?php if(has_post_thumbnail()): ?>
				<div style="vertical-align: top;" class="col-sm-3 d-inline-block">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid">
				</div>
				<?php endif; ?>
				
				<div class="col-sm-8 d-inline-block">
					<h3> <?php the_title(); ?> </h3>
					<hr style="background: white;">
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-success">Read more </a>
				</div>
			</div>

		</div>

		

	<?php endwhile; endif; ?>
		

</div>


<div style="background:  #070707;">
	<?php get_footer(); ?>
</div>

