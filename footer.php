	</div><!-- #content -->
	
  <?php 
  $footer = get_field("footer_text","option");
  ?>
  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrapper">
      <?php echo $footer; ?>
    </div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
