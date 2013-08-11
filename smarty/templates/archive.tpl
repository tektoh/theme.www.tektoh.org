{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-lg-12" role="main">
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
  </section><!-- /#site-contents -->
{get_footer}
