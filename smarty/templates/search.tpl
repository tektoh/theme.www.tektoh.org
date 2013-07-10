{get_header}
    <section id="site-content" class="row">
        <section id="content" class="span9" role="main">
            {if have_posts()}
                <header class="page-header">
                    <h1 class="page-title">
                        検索結果: <span>{get_search_query}</span>
                    </h1>
                </header>
                {include file='content-nav.tpl' id='nav-above'}
                {start_the_loop}
                {include file='content-nav.tpl' id='content-nav'}
            {else}
                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title">見つかりません</h1>
                    </header>
                    <div class="entry-content">
                        <p>ご指定の検索条件に合う投稿がありませんでした。他のキーワードでもう一度検索してみてください。</p>
                    </div>
                </article><!-- /#post-0 -->
            {/if}
        </section><!-- /#content -->
        <section id="sidebar" class="span3">
            {get_sidebar}
        </section><!-- /#sidebar -->
    </section><!-- /#site-content -->
{get_footer}
