<?php
  #Array 
  /*
  - Indexed
  - Associative
  - Multi-dimensional
  */

  // $people = array('Kevin', 'Jeremy', 'Sara');
  // $ids = array(23, 55, 12);
  // $cars = ['Honda', 'Toyota', 'Ford'];
  // $cars[3] = 'Chevy';
  // $cars[] = 'BMW'; // you can use the empty bracket to add it to the end of the array

  // echo count($cars); // give the count in the array
  // print_r($cars); // prints the whole array to the screen
  // var_dump($cars);
  
  // echo $people[1];

  // Associative arrays
  $people = array('Will' => 35, 'Jose' => 32, 'Jim' => 37);
  $ids =[22 => 'Will', 33 => 'Jose', 40 => 'Jim'];

  // echo $people['Will'];
  // echo $ids[22];

  $people['Jill'] = 42;
  // echo $people['Jill'];

  //Multi-Dimensional
  $cars = array(
    array('Honda', 201, 10),
    array('Toyota', 300, 556),
    array('Ford', 655, 31),
  );

  echo $cars[1][2];
?>