<?php

//dd(getUrl());
//dd($_SERVER);

switch (getUrl()){
    case '':
        require PAGE_DIR . 'home.php';
        break;
    default:
        throw new Exception(getUrl() . ' - not found ',404);
}