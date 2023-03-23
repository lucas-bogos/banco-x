<?php

function useHead(string $title = 'Banco X', string $description = 'Sistema Banco X para todos', ?string $custom = null) {
  echo '
  <head>
    <title>'. $title .'</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="'. $description .'">
    '. $custom .'
  </head> 
  ';
}
