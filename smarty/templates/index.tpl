{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-md-12" role="main">
      {if have_posts()}
        {start_the_loop slug="content"}
		    {include file='content-nav.tpl' id='content-nav'}
      {else}
        <header class="entry-header">
          <h1 class="entry-title">Nothing Found</h1>
        </header>
        <div class="entry-content">
          <p>
            {if current_user_can('edit_posts')}
              Ready to publish your first post? <a href="{admin_url path='post-new.php'}">Get started here</a>.
            {else}
              Apologies, but no results were found.
            {/if}
          </p>
        </div>
      {/if}
    </section><!-- /#contents -->
  </section><!-- /#site-contents -->
{get_footer}
