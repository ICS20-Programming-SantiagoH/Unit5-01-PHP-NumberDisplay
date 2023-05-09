<?php

// get age from user
$max = $_POST['max'];
$min = $_POST['min'];

$counter = $min;

$message = "";

//Display if user did not enter anything
if (is_nan($min) || is_nan($max)) {
  $message ="Please Enter a Min and/or Max";
}

// Display if user put a invalid min
else if ($counter > $max) {
  $message ="Please enter a Min that is Less than the Max";
}

//While for statement for number display
else {

//while statement for the number that will be displayed
  while ($counter <= $max){
//Number with line break
    $message = $message . $counter . ", ";
//Add to counter
    $counter = $counter + 1;
  }
}

echo $message;
?>