<div id="comments" class="comments-area">
	{if have_comments()}
    {wp_list_comments style="div" callback="theme_list_comments" end_callback="theme_list_comments_end_el"}
  	{if get_comment_pages_count() > 1 && get_option('page_comments')}
      <nav id="comment-nav-below" class="navigation" role="navigation">
        <h1 class="assistive-text section-heading">Comment navigation'</h1>
      	<div class="nav-previous">{previous_comments_link}&larr; Older Comments{/previous_comments_link}</div>
       	<div class="nav-next">{next_comments_link}Newer Comments &rarr;{/next_comments_link}</div>
     	</nav>
   	{/if}
   	{if ! comments_open() && get_comments_number()}
 	    <p class="nocomments">コメントをキャンセル</p>
   	{/if}
  {/if}
   <div class="form-horizontal">
     {comment_form}
   </div>
</div><!-- #comments .comments-area -->
