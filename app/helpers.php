<?php

function getUrl(): string
{
//    $uri=$_SERVER['REQUEST_URI'];
    $uri=trim($_SERVER['REQUEST_URI'],'/');
    return explode('?',$uri)[0];

    //    d($uri);
//    dd(explode('?',$uri)[0]);
}

function getContent(string $condition=null,bool $isSingle=false):array
{
    $rows=dbSelect(Tables::Content,condition: $condition,isSingle: $isSingle);

    dd($rows);
}
