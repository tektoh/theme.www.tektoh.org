{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-md-12" role="main">
      {if have_posts()}
        <header class="page-header archive-header">
          <h1 class="archive-title">
            タグ別アーカイブ: {single_tag_title}
          </h1>
          {if tag_description()}
            <div class="archive-meta">{tag_description}</div>
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
