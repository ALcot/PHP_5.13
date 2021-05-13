<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>関数の作成</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数helloを定義する
    function hello() {
      echo 'Hello, world!';
    }
    
    // 関数helloを呼び出す
    hello();
    
    echo '<br>';
    // 関数printRectangleAreaを定義する
    function printRectangleArea($height, $width) {
      echo $height * $width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出す
    printRectangleArea(5, 10);
    
  ?>

</body>
</html>