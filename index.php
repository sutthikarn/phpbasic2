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
            
        
        
        
        // put your code here
        ?>
    </body>
</html>
