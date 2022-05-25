<?php
//  no 1 /////////////////
    
    $var = 'INDONESIA';
    $n = strlen($var);
    for($i=0; $i<=floor(($n-1)/2); $i++)
    {
        $temp = $var[$i];
        $var[$i] = $var[$n-1-$i];
        $var[$n-1-$i] = $temp;
    }
    echo $var;
/////////////////

// No 2 ///////////////////

    // $sum = 0;
    // for($i=1 ; $i<12; $i++)
    // {
    //     $a = 0;
    //     for($j=1; $j<=$i; $j++){
    //         if($i % $j == 0)
    //         {
    //             $a++;
    //         }
    //     }
    //     if($a == 2)
    //     {
    //         $sum+= $i;
    //         echo $i." ";
    //     }
    // }
    // echo "</br>";
    // echo $sum;

// No 3 /////////////////////
    // $data = array(1,2,3,2,3,4,5);
    // $temp[] = null;
    // $cek = "";
    // $i=0;

    // for($a=0; $a<count($data); $a++)
    // {
    //     $temp[$i] = $data[$a];
    //     $i++; 
    
    // }

   
    // print_r($temp);

?>