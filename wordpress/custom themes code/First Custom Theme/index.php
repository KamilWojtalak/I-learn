<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<h1>siema</h1>
<p>suesue</p>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

     <div class="post">
        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
        <div><?php the_excerpt() ?></div>
    </div>


 <?php endwhile; ?>
 <?php endif; ?>

<p>sieam</p>
<?php get_footer(); ?>