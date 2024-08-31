<h1>Condition</h1>

<?php
$age = 17;
    if ($age > 18) {
         echo "Legal age";
    }else if($age >= 0 && $age<= 10){
        echo "Something";
    }else{
        echo "Minor";
    }

  //short-hand if condition
  //(condition) ? true condition : else condition

  //echo ($age >=18) ? '18+' : '17-';

  switch ($role){
    case 'admin':
        #code... 
        echo ' you have full access';
        break;

    case 'student':
         #code... 
        echo ' you can only access';
        break;

    case 'teacher':
        #code... 
        echo ' you have full access';
        break;
  }
    ?>