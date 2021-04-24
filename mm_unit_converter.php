<?php


// Kyat Pell yway to Kyat
function kyat_pell_yway_to_kyat($kyat,$pell,$yway){
    // Yeww to Pell
    $ans = $yway / 8;
    // Yeww + Pell
    $ans = $ans + $pell;
    // Pell to Kyat
    $ans = $ans / 16;
    // Kyat + (Pell + yway)
    $ans = $ans + $kyat;
    return $ans;
}


// Kyat to Kyat Pell yway
function kyat_to_kyat_pell_yway($kyat){
    $total_kyat = $kyat;

    // Get Kyat
    $get_kyat = floor($total_kyat);

    // Get Pell
    $total_pell = $total_kyat - $get_kyat;
    $total_pell = $total_pell * 16;
    $get_pell = floor($total_pell);
    // Get yway
    $get_yway = $total_pell - $get_pell;
    $get_yway = $get_yway * 8;

    //die($get_yway);


    $yway_fraction = $get_yway - floor($get_yway);

    //die($yway_fraction);
    //echo "<br />";


    if( .1<=$yway_fraction && .3>=$yway_fraction ){
        $get_yway = floor($get_yway);
    }
    elseif( .4<=$yway_fraction && .7>=$yway_fraction ){
        $get_yway = floor($get_yway)+.5;
    }
    elseif( .8<=$yway_fraction || .9>=$yway_fraction ){
        $get_yway = floor($get_yway)+1;
    }
    else{
        //die("Error 1  ");
    }
    // Increase Number if yway is larger than 8
    if($get_yway>=8){
        $get_yway = $get_yway - 1;
        $get_pell = $get_pell + 1;
    }
    // Increase Number if yway is larger than 8
    if($get_pell>=16){
        $get_pell = $get_pell - 1;
        $get_kyat = $get_kyat + 1;
    }

    // Varible to Array
    $ans['kyat'] = $get_kyat;
    $ans['pell'] = $get_pell;
    $ans['yway'] = round($get_yway);
    return $ans;
}


// 15 Pell to 16 Pell
function shwe_15_pell_to_16_pell($kyat){
    $ans = $kyat * 16;
    $ans = $ans / 17;
    return $ans;
}


// 16 Pell to 15 Pell
function shwe_16_pell_to_15_pell($kyat){
    $ans = $kyat * 17;
    $ans = $ans / 16;
    return $ans;
}


// kyat_to_gram
function kyat_to_gram($kyat){
    return $kyat / 16.6;
}


// kyat_to_gram
function gram_to_kyat($gram){
    return $gram * 16.6;
}
?>
