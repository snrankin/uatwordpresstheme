<aside id="sidebar" role="complementary" class="sidebar">
	<ul>
      <?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('single-sidebar') ) :
      endif; ?>
   </ul>
</aside>