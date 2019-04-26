<?php
function abbreviate($input, $width) {
    if(empty($input)) return $input ;

    if (strlen($input) <= $width) {
        return $input;
    }

    $output = substr($input,0,$width);

    //normals words are seldom more than 30 chars
    $pos = 0 ;
    $found = false ;

    for($i = $width ; $i >= 0 ; $i--) {
        if(ctype_space($output[$i])) {
            $found = true ;
            break ;
        }
        $pos++ ;
    }

    if($found && ($pos > 0)) {
        $output = substr($output,0,($width-$pos));
        $output = rtrim($output) ;
    }

    /*$output .= '...' ;*/
    return $output;
}

function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}


function getShuffledProducts($count = 16) {
    $productsIds = getAllProducts();


    $shuffle = array();
    for ($i = 0; $i < sizeof($productsIds); $i++) {
        $shuffle[] = $productsIds[$i];
    }
    shuffle($shuffle);

    $newShuffle = array();

    for ($j = 0; $j < $count; $j++) {
        $newShuffle[] = $shuffle[$j];
    }

    return $newShuffle;
}

function getShuffledProductsByCatId($id, $count) {
    $products = getProductsByCatId($id);


    $shuffle = array();
    for ($i = 0; $i < sizeof($products); $i++) {
        $shuffle[] = $products[$i];
    }
    shuffle($shuffle);

    $newShuffle = array();

    for ($j = 0; $j < $count; $j++) {
        $newShuffle[] = $shuffle[$j];
    }

    return $newShuffle;

}

function generateRandomString() {
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random = '';
    for ($i = 0; $i < 20; $i++) {
        $random .= $char[rand(0, strlen($char) - 1)];
    }

    return $random;
}


