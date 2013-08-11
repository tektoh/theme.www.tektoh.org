  </div><!-- /#main -->
  <div class="clearfix">
    <div class="goto-pagetop pull-right">
      <a href="#page"><i class="icon-chevron-up icon-3x"></i></a>
    </div>
  </div>
  {if !is_page() && !is_attachment()}
    <section id="footer-menu">
      <div class="container">
        {get_sidebar}
      </div>
    </section><!-- /#footer-menu -->
  {/if}
  <footer id="colophon" role="contentinfo">
    <section class="container">
      <p class="text-muted copyright">&copy; tektoh.org</p>
    </section>
  </footer>
</div><!-- /#page -->
{wp_footer()}
</body>
</html>
