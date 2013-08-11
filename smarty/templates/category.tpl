{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-12 col-sm-8 col-lg-9" role="main">
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
        {include file='content-nav.tpl' id='content-nav'}
      {else}
        {get_template_part slug='content' name='none'}
      {/if}
    </section><!-- /#contents -->
  </section><!-- /#site-contents -->
{get_footer}
