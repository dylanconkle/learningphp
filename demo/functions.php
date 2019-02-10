<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>

<?php

function init(){

  say_something();
  calculate();

}

function calculate(){
  echo 4+8;
}

function say_something(){
  echo "Hello, World! Do you like the clase?" . "<br />";
}

init();

?>


</body>
</html>
