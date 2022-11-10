<?php
$my_array=[1,2,3,4,5,6,7,8,9,6];

function FindDuplicatedAndMissing($arr)
{
    $temp_arr=$arr;
    $temp_arr_length=sizeof($temp_arr);
    // echo $temp_arr_length ;
    $missing= 0;
    for ($i=0; $i <$temp_arr_length ; $i++)
    { 
        $duplicated=$temp_arr[$i];
        if(isset($temp_array[$i+1]))
        {
            if($temp_arr[$i+1] == $temp_arr[$i]) { $duplicated = $temp_arr[$i+1] ; }  
        }   
        //how to checkout value of temp_array[$i+1] to prevent error msg
        // if($temp_arr[$i+1] == $temp_arr[$i]+1 ) { $missing = $temp_arr[$i]+2 ; }
    }
    $missing = $temp_arr[$temp_arr_length-2] +1 ;

    echo $duplicated." is repeated ,  ".$missing." is missing . " ;

}


FindDuplicatedAndMissing($my_array);

?>