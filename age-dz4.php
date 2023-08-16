<?php
$myAge=22;

const TWENTY=20;
const FORTY=40;
const SIXTY=60;
const EIGHTY=80;

switch ($myAge){

    case ($myAge<=TWENTY):
        echo 'my age <=' . TWENTY;
        break;
    case ($myAge>TWENTY && $myAge<=FORTY):
        echo 'my age is between ' .TWENTY." and ". FORTY;
        break;
    case ($myAge>FORTY && $myAge<=SIXTY):
        echo 'my age is between ' .FORTY." and ". SIXTY;
        break;
    case ($myAge>SIXTY && $myAge <=EIGHTY):
        echo 'my age is between ' .SIXTY." and ". EIGHTY;
        break;
    default:
        echo 'my age >' . EIGHTY;
}


