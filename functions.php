<?php
  #Functions

  /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
  */

  function simpleFunction(){
    echo 'Hello World';
  }

  // Function with Param - using the equal sign passes a default parameter if none is defined.
  function sayHello($name = 'World'){
    echo "Hello $name<br>";
  }

  function addNumbers($num1, $num2){
    return $num2 + $num2;
  }

  // echo addNumbers(20, 30);

  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  // using the andforsand in the function below will not keep the value scoped to the function
  function addTen(&$num){
    $num +=10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";
  

?>