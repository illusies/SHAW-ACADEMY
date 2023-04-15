<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions</title>
  </head>
  <body>
    <h2>Functions</h2>

    <?php

    function arrayLooper($array){
      foreach ($array as $value) {
        echo "$value <br>";
      }
    }

    $fruits = array("Apple", "Orange", "Mango", "Banana");
    arrayLooper($fruits);
    ?>

  </body>
</html>
