<?php
/*
Exercise 4: "A cat that has class ..."
You work for the SPA (Society for the Protection of Animals). As part of the redesign of the
site, you must create a class Cat () that will have the following private properties:
- First name (string of 3 to 20 characters)
- Age (int)
- Color (string of 3 to 10 characters)
- Sex (string: male or female)
- Race (string of 3 to 20 characters)
Make getters/setters to validate the data types above and the constructor to instantiate
the class.
Add a getInfo() method to return all of the properties as an array.
In a new file, instantiate the class so that you can display 3 different cats and display the
result using the previously created getInfo() method.
*/

require_once '..\src\Controller\Cat.php';
use src\Controller\Cat;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exam 30/03/2018 - The crazy cat</title>
</head>
<body>

<h1>The crazy cat</h1>
<br/>

<?php 

$cat = new Cat("Pussy", 17, "white", "female", "mixte");
echo $cat->getInfo();


?>


</body>
</html>
