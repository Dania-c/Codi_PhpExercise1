<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 4</title>
</head>
<body>
    <?php
   
    // Array ( 
        // [musicals] => Array ( [0] => Oklahoma [1] => The Music Man [2] => South Pacific )
    //  [dramas] => Array ( [0] => Lawrence of Arabia [1] => To Kill a Mockingbird [2] => Casablanca ) 
    // [mysteries] => Array ( [0] => The Maltese Falcon [1] => Rear Window [2] => North by Northwest ) 
    // )
     
    $arr2 = array(
        "musicals" => array("Oklahoma" , "The Music Man" ,"South Pacific"),

         "dramas" => array("Lawrence of Arabia" , "To Kill a Mockingbird " ,"Casablanca"),

        "mysteries" => array(" The Maltese Falcon" , "Rear Window" , "North by Northwest"));
      $Keys = array_keys($arr2);// return an array containing the keys :musicals-drama ..
      for($i=0 ; $i<count($arr2); $i++){
          echo strtoupper($Keys[$i])."<br/>";
          foreach($arr2[$Keys[$i]] as $key => $value){
              echo "------> ".$key." = ".$value."<br/>";
          }
      }
    
    echo "<br>";
    echo "<br>";
    echo "Sorting the array in decreasing order ";
    echo "<br>";
    krsort($arr2);// krsort : sort in descending order the keys // ksort : in ascending order
    $Keys = array_keys($arr2);
      for($i=0 ; $i<count($arr2); $i++){
          echo strtoupper($Keys[$i])."<br/>";
          foreach($arr2[$Keys[$i]] as $key => $value){
              echo "------> ".$key." = ".$value."<br/>";
          }
      }

    ?>
</body>
</html>