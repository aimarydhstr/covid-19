</div>
<footer id="footer">
<div class="widget-gan">
<ul>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<div id="copyright">
Copyright &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> | All Rights Reserved
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>