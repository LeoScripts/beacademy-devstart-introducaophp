<?php

// pegando a propriedade REQUEST_URI da nossa super vaivel global _SERVER
// echo $_SERVER['REQUEST_URI'];

// ao acessar visualizamos uma barra /
// essa barra indica que estamos na rota pricipal do nosso dominio 

// se colocarmo apos a uri do nosso site  teste e teclamos o enter
// nosso retorno seta http://localhost:8000/teste
// se colocarmos mais informações exemplo test/123/casa
// nosso retorno seta http://localhost:8000/test/123/casa e assim por diante

// armarzenado em url
$url = $_SERVER['REQUEST_URI'];
$home =  include './pages/home.php';

echo match ($url) {
  '/' => $home, //em ves de usarmos uma tag seria intereçante usarmos arquivos de pagina
  '/login' => '<h1>Login</h1>',
  '/cadastro' => '<h1>cadastro</h1>',
  default => '<h1>Pagina não encotrada</h1>'
};