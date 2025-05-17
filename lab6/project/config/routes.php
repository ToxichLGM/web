<?php
  use \Core\Route;  
  return [
    new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
    new Route('/my-page2/', 'page', 'show1'), //пример
    new Route('/my-page3/', 'page', 'show2'), //пример
    new Route('/act1/', 'test', 'act1'), //задание 2.1
    new Route('/act2/', 'test', 'act2'), //задание 2.1
    new Route('/act3/', 'test', 'act3'), //задание 2.1
    new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'), //задание 2.2
    new Route('/user/:id/', 'user', 'show'),  //задание 2.4 
    new Route('/user/:id/:key/', 'user', 'info'), //задание 2.5
    new Route('/users/all/', 'user', 'all'), //задание 2.6
    new Route('/users/first/:n/', 'user', 'first'), //задание 2.7  
    new Route('/product/:n/', 'product', 'show'), //задание 3.2
    new Route('/products/all/', 'product', 'all'),  //задание 3.4
    new Route('/page/:id/', 'page', 'show'), //задание 4.3
    new Route('/page/', 'page', 'test'), //задание 6.3
    new Route('/page/:id', 'page', 'one'), //задание 7.4
    new Route('/pages/',   'page', 'all'), //задание 7.4
    new Route('/products/:id', 'products', 'one'), //задание 8
    new Route('/products/',   'products', 'all'), //задание 8
  ];
