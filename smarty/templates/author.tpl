{get_header}
  <section id="site-contents" class="row">
    <section id="contents" class="col-lg-12" role="main">
      {if have_posts()}
        {the_post}
        <header class="page-header archive-header">
          <h1 class="archive-title">
            作成者別アーカイブ: {get_the_author}
          </h1>
        </header>
        {rewind_posts}
        {if get_the_author_meta('description')}
          <div class="media author-info">
            <a class="pull-left author-avatar" href="#">
              {get_avatar id_or_email=get_the_author_meta('user_email') size='64'}
            </a>
            <div class="media-body author-description">
              <h4>{get_the_author}</h4>
              <p>{get_the_author_meta field='description'}</p>
            </div>
          </div>
        {/if}
        {start_the_loop slug="content"}
        {include file='content-nav.tpl' id='content-nav'}
      {else}
        {get_template_part slug='content' name='none'}
      {/if}
    </section><!-- /#contents -->
  </section><!-- /#site-contents -->
{get_footer}
