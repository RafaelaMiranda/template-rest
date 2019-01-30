<?php get_header(); ?>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_title(); ?>
		<?php the_content(); ?>
	<?php endwhile; else: ?>
	<section class="container sobre">
		<div class="grid-8">
			<p>Essa página não existe</p>
		</div>
	</section>
	<?php endif; ?>
<?php get_footer(); ?>