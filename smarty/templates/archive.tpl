{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-12 col-sm-8 col-lg-9" role="main">
      {if have_posts()}
        <header class="page-header archive-header">
          <h1 class="archive-title">
            {if is_day()}
              日別アーカイブ: {get_the_date}
            {elseif is_month()}
              月別アーカイブ: {get_the_date d='Y年F'}
            {elseif is_year()}
              年別アーカイブ: {get_the_date d='Y年'}
            {else}
              アーカイブ
            {/if}
          </h1>
        </header>
        {start_the_loop slug="content"}
        {include file='content-nav.tpl' id='content-nav'}
      {else}
        {get_template_part slug='content' name='none'}
      {/if}
    </section><!-- /#contents -->
    <section id="sidebar" class="col-12 col-sm-4 col-lg-3">
      {get_sidebar}
    </section><!-- /#sidebar -->
  </section><!-- /#site-contents -->
{get_footer}
