{get_header}
  <section id="site-content" class="row">
    <section id="content" class="col-md-12" role="main">
      {if have_posts()}{the_post}
        {get_template_part slug='content'}
        <nav id="post-navigation" class="navigation" role="navigation">
          <ul class="pager">
            {mytheme_previous_post_link tag='li' class='previous'}&larr; 過去の投稿{/mytheme_previous_post_link}
            {mytheme_next_post_link tag='li' class='next'}新しい投稿 &rarr;{/mytheme_next_post_link}
          </ul>
        </nav>
        {comments_template}
      {/if}
    </section><!-- /#content -->
  </section><!-- /#site-content -->
{get_footer}
