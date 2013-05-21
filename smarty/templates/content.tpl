<article id="post-{the_ID}" class="content-article">
  <header class="entry-header">
    {the_post_thumbnail}
    {if is_single()}
        <div class="page-header">
            <h1 class="entry-title">{the_title}</h1>
        </div>
    {else}
        <h1>
            <a href="{the_permalink}" title="{the_title}" rel="bookmark">{the_title}</a>
        </h1>
    {/if}
  </header>
  {if is_search()}
    <div class="entry-summary">{the_excerpt}</div>
  {else}
    <div class="entry-content">
      {the_content}
        続きを読む <span class="meta-nav">&rarr;</span>
      {/the_content}
      {wp_link_pages before='<div class="page-links">ページ:' after='</div>'}
    </div>
  {/if}
  <footer class="entry-meta">
    カテゴリー: {get_the_category_list separator=', '} |
    タグ: {get_the_tag_list sep=', '} |
    投稿日: <time class="entry-date" datetime="{get_the_date d='c'}">{get_the_date}</time> |
    {edit_post_link link='編集' before='<span class="edit-link">' after='</span>'}
  </footer>
</article>
