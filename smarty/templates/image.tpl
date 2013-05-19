{get_header}
    <section id="site-content" class="row">
        <section id="content" class="span12" role="main">
            {if have_posts()}{the_post}
                <article id="post-{the_ID()}" {post_class class='image-attachment'}>
                    <div class="entry-content">
                        <div class="entry-attachment">
                            <div class="attachment">
                                <img class="attachment-image" src="{wp_get_attachment_image_src attachment_id=$globals.post->ID size='large'}" alt="{the_title}">
                                <h1 class="attachment-image-title">{the_title}</h1>
                                {if ! empty($globals.post->post_excerpt)}
                                    <div class="entry-caption attachment-image-caption">
                                        {the_excerpt}
                                    </div>
                                {/if}
                            </div><!-- /.attachment -->
                        </div><!-- /.entry-attachment -->
                        
                        <div class="entry-description attachment-image-description">
                            {the_content}{/the_content}
                            {wp_link_pages before='<div class="page-links">ページ' after='</div>'}
                        </div><!-- /.entry-description -->
                        
                        <div class="entry-meta attachment-image-meta">
                            <span class="meta-prep meta-prep-entry-date">公開日時:</span>
                            <span class="entry-date">
                                <time class="entry-date" datetime="{get_the_date d='c'|esc_attr}">{get_the_date|esc_html}</time>
                            </span>
                            <a href="{wp_get_attachment_url|esc_url}" title="フルサイズ画像へのリンク">
                                {attachment_metadata key='width'}&times;{attachment_metadata key='height'}
                            </a>
                            (<a href="{get_permalink id=$globals.post->post_parent}" title="{get_the_title post=$globals.post->post_parent|strip_tags|esc_attr}へ戻る" rel="gallery">
                                {get_the_title post=$globals.post->post_parent}
                            </a>)
                            {edit_post_link link='編集' before='<span class="edit-link">' after='</span>'}
                        </div>
                        
                    </div><!-- /.entry-content -->
                    
                    <nav id="image-navigation" class="navigation" role="navigation">
                        <ul class="pager">
                            <li class="previous">
                                <span class="previous-image">{previous_image_link size=false text='&larr; 前へ'}</span>
                            </li>
                            <li class="next">
                                <span class="next-image">{next_image_link size=false text='次へ &rarr;'}</span>
                            </li>
                        </ul>
                    </nav>
                </article><!-- #post -->
                {comments_template}
            {/if}
        </section><!-- /#content -->
    </section><!-- /#site-content -->
{get_footer}