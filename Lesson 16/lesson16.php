<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Data Types</title>
  </head>
  <body>
    <h1>PHP data types</h1>

    <?php
    $global = "I am a global variable";

    function printTxt(){
      echo $global;
    }
    printTxt()

    $cars = array("Toyota","Volvo","Porsche");
    echo $cars[1]."<br";

    $salaries = array("Peter"=>"$5000","Ben"=>"$7000","Joe"=>"$4000")
     ?>

  </body>
</html>
