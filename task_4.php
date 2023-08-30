<?php


$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    )
);
echo "<br/>";


$hueCategory = [];
$SubArray2 = [];
foreach ($colors as $array) {

    if ($array['category'] == 'hue')
        $hueCategory[$array['category']][] = $array;


    else if ($array['category'] == 'value')
        $valueCategory[$array['category']][] = $array;


}


echo "<pre>" . print_r($hueCategory, true) . "</pre> ";
echo "<pre>" . print_r($valueCategory, true) . "</pre> ";

echo "<br>";
echo "<pre>" . print_r($colors, true) . "</pre> ";


foreach ($colors as $colorData) {
    if ($colorData['color'] === 'black') {
        echo "<pre>Це колір: Black\n";
        echo "він з категорії {$colors[0]['category']} .Тип кольору {$colors[0]['type']}. В даному кольорі наступні коди :  такий hex-> {$colorData['code']['hex']}</pre> і rgba-> <br>";

    } elseif ($colorData['color'] === 'white') {
        echo "<pre>Це колір: White \n";
        echo "він з категорії {$colors[1]['category']} . В даному кольорі наступні коди :   такий hex-> {$colorData['code']['hex']}</pre> і rgba->";
    } elseif ($colorData['color'] === 'red') {
        echo "<pre>Це колір: Red";
        echo " він з категорії {$colors[2]['category']} .Тип кольору {$colors[2]['type']}. В даному кольорі наступні коди :   такий hex-> {$colorData['code']['hex']}</pre> і rgba->";
    } elseif ($colorData['color'] === 'blue') {
        echo "<pre>Це колір: Blue\n";
        echo "він з категорії {$colors[3]['category']} .Тип кольору {$colors[3]['type']}. В даному кольорі наступні коди :   такий hex-> {$colorData['code']['hex']}</pre> і rgba->";
    } elseif ($colorData['color'] === 'yellow') {
        echo "<pre>Це колір: Yellow\n";
        echo "він з категорії {$colors[4]['category']} .Тип кольору {$colors[4]['type']}. В даному кольорі наступні коди :   такий hex-> {$colorData['code']['hex']}</pre> і rgba->";
    } elseif ($colorData['color'] === 'green') {
        echo " <pre>Це колір: Green\n";
        echo "він з категорії {$colors[5]['category']} .Тип кольору {$colors[5]['type']}. В даному кольорі наступні коди :  такий hex-> {$colorData['code']['hex']}</pre> і rgba->";
    }


    $rgba = $colorData['code']['rgba'];

    echo "\n";

    foreach ($rgba as $key => $value) {
        echo " $value  ";
    }


    echo "\n";
}
