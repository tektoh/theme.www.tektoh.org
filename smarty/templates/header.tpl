<!DOCTYPE html>
<html {language_attributes}>
<head>
<meta charset="{bloginfo show='charset'}" />
<meta name="viewport" content="width=device-width" />
<title>{wp_title sep='|' seplocation='right'}</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="{bloginfo show='pingback_url'}" />
<!--[if lt IE 9]>
<script src="{get_template_directory_uri}/js/html5.js" type="text/javascript"></script>
<![endif]-->
{wp_head}
</head>
<body {body_class}>
{if is_front_page() && !is_paged()}
  <div id="cover" class="visible-lg" style="background: url('{get_header_image}') no-repeat center center fixed">
    <div class="row">
      <h1 class="text-center">{bloginfo show='name' filter='display'}</h1>
      <p class="lead text-center">{bloginfo show='description'}</p>
      <div id="down_button" class="text-center">
        <a href="#page">
          <i class="icon-chevron-down icon-4x"></i>
        </a>
      </div>
    </div>
  </div>
{/if}
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <div class="navbar navbar-static-top navbar-inverse">
      <div class="container">
        <button type="button" id="btn-navbar" class="navbar-toggle">
          <i class="icon-btn-navbar"></i>
        </button>
        <a class="navbar-brand" href="{home_url path='/'|esc_url}" title="{bloginfo show='name' filter='display'}" rel="home">
          {bloginfo show='name'}
        </a>
        <div class="nav-collapse collapse navbar-responsive-collapse">
          {wp_nav_menu menu_class='nav navbar-nav'}
          <form role="search" class="navbar-form pull-right">
            <input type="text" name="s" class="search-query" placeholder="Search">
          </form>
        </div>
      </div><!-- /.container -->
    </div><!-- /.navbar -->
  </header>
  <div id="main" class="container">
  {if is_front_page() && !is_paged()}
    <div class="hidden-lg page-header">
      <h1>
        {bloginfo show='name' filter='display'}<br>
        <small>{bloginfo show='description'}</small>
      </h1>
    </div>
  {/if}
