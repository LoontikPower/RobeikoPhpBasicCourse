<?php
/*
 * Створити змінну last_name і записати туди ваше прізвище
Створити 3 константи (SMALL_SURNAME, MEDIUM_SURNAME, LARGE_SURNAME) з такими значеннями (5, 10, 15)
Отримати довжину прізвища зі змінною
 За допомогою керуючий конструкцій if, else, elseif порівняти довжину прізвища з константами і вивести відповідний
напис ( "Довжина вашого прізвища дорівнює {Довжина прізвища} і вона більша за {Константа при якій вона спрацювала}
і менше ніж {наступна константа в керуючій конструкції (якщо це не else)}" )*/

$last_name='Robeiko';

const SMALL_SURNAME=5;
const MEDIUM_SURNAME=10;
const LARGE_SURNAME=15;

var_dump($last_name);
echo "<br>";

if((strlen($last_name)>SMALL_SURNAME) && (strlen($last_name)<MEDIUM_SURNAME) && (strlen($last_name)<LARGE_SURNAME) ){
    echo $last_name.strlen($last_name)." Last name bigger than" . " SMALL_SURNAME=".SMALL_SURNAME;
    echo "<br>";
    echo "Small than MEDIUM_SURNAME= ".MEDIUM_SURNAME;
    echo "<br>";
    echo " and small than LARGE_SURNAME= ".LARGE_SURNAME;
}
else{
    echo "ERROR";
}
