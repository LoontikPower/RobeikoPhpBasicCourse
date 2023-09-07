<?php

function getUrl(): string
{
//    $uri=$_SERVER['REQUEST_URI'];
    $uri=trim($_SERVER['REQUEST_URI'],'/');
    return explode('?',$uri)[0];

    //    d($uri);
//    dd(explode('?',$uri)[0]);
}