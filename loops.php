<?php
  #LOOPS - 

  /*
    For
    While
    Do..While
    Foreach
  */

  // for($i = 0; $i<10; $i++){
  //   echo $i;
  //   echo '<br>';
  // }

  #While Loop
  # @params - condition

  // $i = 0;

  // while($i < 10){
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }

  # Do... while

  // $i = 0;

  // do{
  //   echo $i;
  //   echo '<br>';
  //   $i++;
  // }
  // while($i < 10)

  # Foreach Loop - For arrays
  // $people = array('Juan', 'Santiago', 'Domingo');

  // foreach($people as $person){
  //   echo $person;
  //   echo '<br>';
  // }

   $people = array('Juan' => 'juan@gmail.com', 'Santiago' => 'santiago@gmail.com', 'Domingo' => 'domingo@hotmail.com');

  foreach($people as $person => $email){
    echo $person.': '.$email;
    echo '<br>';
  }
  

  
?>