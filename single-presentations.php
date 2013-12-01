<?php
/**
 * Template Name: プレゼンテーション
 * Description: プレゼンテーション用テンプレート。親ページに適用してください
 */
require_once('smarty/smarty.php');
$smarty = new WpSmarty();
$smarty->display('single-presentations.tpl');
