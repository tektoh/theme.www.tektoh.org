  </div><!-- /#main -->
  <div class="clearfix">
    <div class="goto-pagetop pull-right">
      <a href="#page"><i class="glyphicon glyphicon-chevron-up"></i></a>
    </div>
  </div>
  {if !is_page() && !is_attachment() && !is_singular('presentations')}
    <section id="footer-menu">
      <div class="container">
        {get_sidebar}
      </div>
    </section><!-- /#footer-menu -->
  {/if}
  <footer id="colophon" role="contentinfo">
    <section class="container">
      <p class="text-muted copyright">&copy; sig11.io</p>
    </section>
  </footer>
</div><!-- /#page -->
{wp_footer()}
</body>
</html>
