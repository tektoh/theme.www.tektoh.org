<?php

function smarty_function_adsense($params, $template)
{
  extract(array_merge(array(
    'name' => 'post',
  ), $params));

  switch ($name) {
  case 'post':
    return '<!-- Adsense:post -->';
  }
  return '';
}
