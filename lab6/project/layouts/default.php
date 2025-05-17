<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/styles.css">
    <title><?= $title ?></title>
    <style>
    .container {
      background-color: rgba(200, 200, 200, 0.5); /* Полупрозрачный фон для основного контента */
      padding: 20px; /* Отступы внутри контейнера */
      border-radius: 10px; /* Закругленные углы */
    }
    
    .menu {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* Два столбца */
      gap: 20px; /* Промежуток между элементами */
      background-color: rgba(200, 200, 200, 0.2); /* Уменьшена непрозрачность фона меню */
      padding: 0;
      border-radius: 10px;
      list-style-type: none; /* Убирает точки у элементов списка */
    }
    
    .menu li {
      padding: 10px;
      background-color: transparent; /* Прозрачный фон для элементов меню */
      border: 2px solid rgba(0, 0, 0, 0.5); /* Контур вокруг кнопок */
      border-radius: 5px; /* Закругленные углы */
      text-align: center; /* Выравнивание текста по центру */
      cursor: pointer; /* Курсор указывает на кликабельность */
    }
    
    .menu li:hover {
      background-color: rgba(240, 240, 240, 0.5); /* Полупрозрачный фон при наведении */
    }
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Лабораторная работа №6</h1>
        <nav>
          <ul class="menu">
            <li><a href="/hello/">Hello</a></li>
            <li><a href="/act1/">Act 1</a></li>
            <li><a href="/act2/">Act 2</a></li>
            <li><a href="/act3/">Act 3</a></li>
            <li><a href="/nums/:n1/:n2/:n3/">Sum</a></li>
            <li><a href="/user/:id/">User ID</a></li>
            <li><a href="/user/:id/:key/">User ID (name, age, salary)</a></li>
            <li><a href="/users/all/">All Users</a></li>
            <li><a href="/users/first/:n/">All Users First</a></li>
            <li><a href="/product/:n/">Product ID</a></li>
            <li><a href="/products/all/">All Products</a></li>
            <li><a href="/page/:id/">Show Page ID</a></li>
            <li><a href="/page/1">Show Page ID from db</a></li>
            <li><a href="/pages/">All Pages</a></li>
            <li><a href="/products/1">Show Product ID</a></li>
            <li><a href="/products/">All Products</a></li>          
          </ul>
        </nav>
      </header>
            
      <?= $content ?>
      
      <footer style="text-align: center; margin-top: 30px; padding: 20px; border-top: 1px solid #ddd;">
      </footer>
    </div>
  </body>
</html>
