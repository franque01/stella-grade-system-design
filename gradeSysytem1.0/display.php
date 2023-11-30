<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display the results</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    
</body>
</html>';


















if(isset($_POST["submit"])){

    $Name = $_POST['Name']; 

    $Maths = $_POST['maths'];

    $english = $_POST['english'];

    $science = $_POST['science'];

    $social = $_POST['social'];

    $subjets1 = $_POST['subjets1'];

    $subjets2 = $_POST['subjets2'];

    $subjets3 = $_POST['subjets3'];

    $subjets4 = $_POST['subjets4'];

    $total =  $Maths +  $english + $science +  $social;
    echo  "<p class='p1'>Hi!! $Name the total of your core subjects is:  $Maths+$english +  $science +  $social  = $total </p>";

    echo '<br>';
    echo "<p  class='p2'>lets add 2 lowest  subjects of your electives</p>";
    echo '<br>';




    $Array = array( $subjets1,  $subjets2,  $subjets3,  $subjets4);
     sort( $Array, SORT_NUMERIC );
    $smallest = array_shift( $Array );
    $smallest_2nd = array_shift( $Array );
   
    // echo $smallest ;
    // echo '<br>';
    // echo $smallest_2nd;


    echo '<br>';
    $otherSubjectsTotal = $Maths +  $english + $science +  $social + $smallest_2nd + $smallest;

    echo " <p class='p3'>Lowest elective  1 is: $smallest </p>";
    echo '<br>';
    echo "<p  class='p4'> Lowest elective  2 is: $smallest_2nd </p>";
    echo '<br>';
    echo "<p class='p5'>Therefore, your grade is:. <span>$otherSubjectsTotal</span></p>" ;
    
   if($otherSubjectsTotal<10){
    echo "<p>A BIG CONGRATULATIONS TO YOU $Name</p>";
   }elseif($otherSubjectsTotal<10){
  echo "<p>CONGRATULATIONS TO YOU $Name</p>"; 
   }elseif($otherSubjectsTotal>20){
    echo "<p>WELDONE $Name</p>"; 
     }else{
        echo "<p>ITS NOT BAD, STUDY HARD.... $Name</p>"; 
     }








}
    
































?>