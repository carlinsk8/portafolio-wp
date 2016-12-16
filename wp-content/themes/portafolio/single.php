<?php get_header('head2'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<header>
	<h2><?php the_title( ); ?></h2>
</header>
	<div class="container">
	<?php the_content( ); ?>
	</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<p class="error">No hay ninguna informacion para mostrar</p>
<?php endif; ?>
<br>
<div class="container">
</div>
<?php get_footer( ); ?>