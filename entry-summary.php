<div class="entry-summary">
<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
<?php endif; ?>
<?php if (is_category() || is_home() || is_author()) : ?>
<?php else: ?>
<?php the_excerpt(); ?>
<?php endif ?>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>