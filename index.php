<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array1=['a'=>23,'b'=>34,'c'=>56];
            
//            print_r($array1);
            echo '<hr>';
//          //echo $array1['b'];
            
            foreach ($array1 as $k => $v) {
               echo 'key :'.$k.'  / '.$v.'<br>'; 
            }
            
            $array2=['dmax','honda','kava'];
            print_r($array2);
                echo '<hr>';
                echo $array2[1];
            
            for($x=0;$x<count($array2);$x++){
                echo $array2[$x]. '<br>';
            }
        
        
        
        // put your code here
        ?>
    </body>
</html>
