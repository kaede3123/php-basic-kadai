<?php get_header(); ?>
<section id="news" class="wrapper">
        <center><h1><?php echo single_cat_title(); ?>の記事一覧</h1></center>
		  <?php if(have_posts()): ?>
        <dl>
			<?php while(have_posts()):the_post(); ?>
          <dt><?php echo get_the_date(); ?></dt>
			<dd><label class="cactegory-bc"><div class="blog-category"><?php echo the_category(); ?></div></label>
				<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></dd>
			<?php endwhile; ?>
        </dl>
		 
	<div class="pagenation">
		<?php echo paginate_links(array(
'total' => $wp_query->max_num_pages,
	'current' => max(1,get_query_var('paged')),
	'prev_text' => '&laquo;前へ',
	'next_text' => '次へ &raquo;',
	'mid_size' => 2,
	'end_size' => 1,
)); ?>
	</div>
	<?php else: ?>
	<p>投稿が見つかりませんでした
	</p>
       <?php endif; ?>
</section>
<?php get_footer(); ?>