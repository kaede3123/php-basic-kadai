<?php get_header(); ?>
<main>
<section>
<?php while(have_posts()):the_post(); ?>
	<center><h1>
		<?php the_title(); ?>
		</h1></center>
	<div class="blog-text"><?php the_content(); ?></div>
<?php endwhile; ?>
</section>
</main>
<?php get_footer(); ?>