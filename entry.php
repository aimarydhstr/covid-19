<?php if(is_category() || is_home() || is_author()): ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post">
<?php else: ?> 
<article id="post-<?php the_ID(); ?>" class="posts">
<?php endif; ?>
<header>

<?php if(is_home() || is_front_page() || is_category() || is_search() || is_author()): ?>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php endif ?>

<?php if ( is_singular() ) {
echo '<h1 class="entry-title">';
} else {
echo '<h2 class="entry-title">';
} ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
<?php if ( is_singular() ) {
echo '</h1>';
} else {
echo '</h2>';
} ?>
<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
<?php if(is_singular()): ?>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php endif ?>
</header>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
</article>