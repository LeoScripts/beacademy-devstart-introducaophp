<?php
//controlador => controller

// armarzenado em url
$url = $_SERVER['REQUEST_URI'];

include 'views/components/head.php';
include 'views/components/menu.php';
include 'acoes.php';

match ($url) {
  '/' => home(), 
  '/login' => login(),
  '/cadastro' => cadastro(),
  '/listar' => listar(),
  default => erro404(),
};


include 'viws/components/footer.php';