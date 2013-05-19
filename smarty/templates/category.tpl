{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="span9" role="main">
      {if have_posts()}
        <header class="page-header archive-header">
          <h1 class="archive-title">
            カテゴリー別アーカイブ: {single_cat_title}
          </h1>
          {if category_description()}
            <div class="archive-meta">{category_description}</div>
          {/if}
        </header>
        {start_the_loop slug="content"}
		{content_nav}
          <nav id="content-nav" class="navigation" role="navigation">
            <ul class="pager">
              <li class="previous">{next_posts_link}&larr; Older{/next_posts_link}</li>
              <li class="next">{previous_posts_link}Newer &rarr;{/previous_posts_link}</li>
            </ul>
          </nav>
        {/content_nav}
      {else}
        {get_template_part slug='content' name='none'}
      {/if}
    </section><!-- /#contents -->
    <section id="sidebar" class="span3">
      {get_sidebar}
    </section><!-- /#sidebar -->
  </section><!-- /#site-contents -->
{get_footer}
