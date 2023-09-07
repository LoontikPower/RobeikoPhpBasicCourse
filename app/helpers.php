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
    $result=[];
    if(!empty($rows)){
        foreach ($rows as $row)
        {
            $result[$row['name']]=json_decode($row['content'],true);
        }
    }
//    dd($rows,$result);
    return $result;
}

