{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="span9" role="main">
      {if have_posts()}
        {start_the_loop slug="content"}
		{content_nav}
          <nav id="content-nav" class="navigation" role="navigation">
            <ul class="pager">
              <li class="previous">{next_posts_link}&larr; 過去の投稿{/next_posts_link}</li>
              <li class="next">{previous_posts_link}新しい投稿 &rarr;{/previous_posts_link}</li>
            </ul>
          </nav>
        {/content_nav}
      {else}
        {if current_user_can('edit_posts')}
          <header class="entry-header">
            <h1 class="entry-title">No posts to display</h1>
          </header>
          <div class="entry-content">
            <p>
              Ready to publish your first post? <a href="{admin_url path='post-new.php'}">Get started here</a>.
            </p>
          </div>
        {else}
          <header class="entry-header">
            <h1 class="entry-title">Nothing Found</h1>
          </header>
          <div class="entry-content">
            <p>
              Apologies, but no results were found.
            </p>
          </div>
        {/if}
      {/if}
    </section><!-- /#contents -->
    <section id="sidebar" class="span3">
      {get_sidebar}
    </section><!-- /#sidebar -->
  </section><!-- /#site-contents -->
{get_footer}
