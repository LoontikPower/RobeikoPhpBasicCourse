<?php
require __DIR__. "/Surname-dz4.php";


global $last_name;

echo "<br>";
if(strlen($last_name)<SMALL_SURNAME)
    {
        echo "Very small name";
        echo "<br>";
    }
else if((strlen($last_name)>SMALL_SURNAME) && (strlen($last_name)<MEDIUM_SURNAME) ){

    echo $last_name.strlen($last_name)." Last name bigger than" . " SMALL_SURNAME=".SMALL_SURNAME;
    echo "<br>";
    echo "and small than MEDIUM_SURNAME= ".MEDIUM_SURNAME;

}
else if ( (strlen($last_name)>MEDIUM_SURNAME)&&(strlen($last_name)<LARGE_SURNAME) ){

    echo "  small than LARGE_SURNAME= ".LARGE_SURNAME;
    echo "<br>";
}
else
{
    echo "  Bigger than LARGE_SURNAME= ".LARGE_SURNAME;
}


