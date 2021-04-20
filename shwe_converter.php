<?php
// Kyat Pell Ywee to Kyat
function kyat_pell_ywee_to_kyat($kyat,$pell,$ywee){
    // Yeww to Pell
    $ans = $ywee / 8;
    // Yeww + Pell
    $ans = $ans + $pell;
    // Pell to Kyat
    $ans = $ans / 16;
    // Kyat + (Pell + Ywee)
    $ans = $ans + $kyat;
    return $ans;
}
// Kyat to Kyat Pell Ywee
function kyat_to_kyat_pell_ywee($kyat){
    $total_kyat = $kyat;
    // Get Kyat
    $get_kyat = floor($total_kyat);
    // Get Pell
    $total_pell = $total_kyat - $get_kyat;
    $total_pell = $total_pell * 16;
    $get_pell = floor($total_pell);
    // Get Ywee
    $get_ywee = $total_pell - $get_pell;
    $get_ywee = $get_ywee * 8;
    $ywee_fraction = $get_ywee - floor($get_ywee);

    //echo $ywee_fraction;

    if( .1<=$ywee_fraction && .3>=$ywee_fraction ){
        $get_ywee = floor($get_ywee);
    }
    elseif( .4<=$ywee_fraction && .7>=$ywee_fraction ){
        $get_ywee = floor($get_ywee)+.5;
    }
    elseif( .8<=$ywee_fraction || .9>=$ywee_fraction ){
        $get_ywee = floor($get_ywee)+1;
    }
    else{
        //die("Error 1  ");
    }
    // Increase Number if Ywee is larger than 8
    if($get_ywee>=8){
        $get_ywee = $get_ywee - 1;
        $get_pell = $get_pell + 1;
    }
    // Increase Number if Ywee is larger than 8
    if($get_pell>=16){
        $get_pell = $get_pell - 1;
        $get_kyat = $get_kyat + 1;
    }

    // Varible to Array
    $ans['kyat'] = $get_kyat;
    $ans['pell'] = $get_pell;
    $ans['ywee'] = $get_ywee;
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
function kyat_to_gram($kyat){
    return $kyat / 16.6;
}
function gram_to_kyat($gram){
    return $gram * 16.6;
}
?>
