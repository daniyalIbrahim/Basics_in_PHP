<?php
 class Goku {
  // Properties

    function suchenDBalls() {
         $foundallballs = false;
         $Dballs = array("Dragon Ball 1","Dragon Ball 2","Dragon Ball 3","Dragon Ball 4","Dragon Ball 5","Dragon Ball 6","Dragon Ball 7");
        $arrayLength = count($Dballs);
     if ( $foundallballs ==false) {
              echo "Searching for Dragon balls \n";

                         $i = 0;
                        while ($i < $arrayLength)
                         {
                            
                                  echo $Dballs[$i]." wurde von Goku gefunden \n" ;
                                  $i++;
                            }
                           $foundallballs =true;
                 
          }
           if ( $foundallballs ==true) {
                echo "Hurray!! all Dragon balls discovered \n";
                 echo "Goku, Make a wish now \n";
                 $wish = readline("Your wish: ");
                 echo 'Your wish is implemented: '.$wish;
           }
            
       }
      
        
    }
    $goku = new Goku();
    $goku->suchenDballs();
?>
