<?php
/**
 * Template Name: プレゼンテーション
 * Description: プレゼンテーション用テンプレート。親ページに適用してください
 */
require_once(dirname(dirname(__FILE__)).'/smarty/smarty.php');
$smarty = new WpSmarty();
$smarty->display('page-template-presentation.tpl');
