<?php

function fizzbuzz($valeur)
{
    if($valeur%5==0 && $valeur%3==0){
        return 'fizzbuzz';
    }elseif($valeur%3==0){
        return 'buzz';
    }elseif($valeur%5==0){
        return 'fizz';
    }else{
        return 'Error';
    }
}

echo fizzbuzz(11);