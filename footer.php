</div>
</div>
<footer id="footer" role="contentinfo">
<div class="inner-wrap">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
</div>
</footer>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#why-uat').bjqs({
        'height' : 400,
        'width' : 280,
        'responsive' : true
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>