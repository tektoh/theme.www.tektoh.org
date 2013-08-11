<div id="comments" class="comments-area">
	{if have_comments()}
    {wp_list_comments style="div" callback="theme_list_comments" end_callback="theme_list_comments_end_el"}
  	{if get_comment_pages_count() > 1 && get_option('page_comments')}
      <nav id="comment-nav-below" class="navigation" role="navigation">
        <ul class="pager">
          <li class="previous">{previous_comments_link}&larr; 過去のコメント{/previous_comments_link}</div>
       	  <li class="next">{next_comments_link}新しいコメント &rarr;{/next_comments_link}</div>
        </ul>
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
