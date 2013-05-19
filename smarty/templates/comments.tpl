<div id="comments" class="comments-area">
	{if have_comments()}
        <h2 class="comments-title">
        「<span>{get_the_title}</span>」への{get_comments_number}件のフィードバック
        </h2>
        {wp_list_comments style="div" callback="theme_list_comments" end_callback="theme_list_comments_end_el"}
    	{if get_comment_pages_count() > 1 && get_option('page_comments')}
        	<nav id="comment-nav-below" class="navigation" role="navigation">
        	    <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
        	  	<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
        	  	<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
        	</nav>
    	{/if}
    	{if ! comments_open() && get_comments_number()}
    	    <p class="nocomments">コメントをキャンセル</p>
    	{/if}

        <div class="form-horizontal">
            {comment_form}
        </div>
    {/if}

</div><!-- #comments .comments-area -->
