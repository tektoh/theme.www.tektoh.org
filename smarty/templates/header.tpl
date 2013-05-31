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
{if is_home()}
  <div id="cover" class="visible-desktop" style="background: url('{get_header_image}') no-repeat center center fixed">
    <div class="row">
      <h1 class="text-center">{get_bloginfo show='name' filter='display'}</h1>
      <p class="lead text-center">{get_bloginfo show='description'}</p>
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
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{home_url path='/'|esc_url}" title="{get_bloginfo show='name' filter='display'}" rel="home">
            {bloginfo show='name'}
          </a>
          <div class="nav-collapse collapse">
            {wp_nav_menu menu_class='nav'}
            <form role="search" class="navbar-search pull-right">
              <input type="text" name="s" class="search-query" placeholder="Search">
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="main" class="container">
  {if is_home()}
    <div class="hidden-desktop page-header">
      <h1>
        {get_bloginfo show='name' filter='display'}<br>
        <small>{get_bloginfo show='description'}</small>
      </h1>
    </div>
  {/if}
