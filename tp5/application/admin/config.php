<?php 
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

// 视图输出字符串内容替换
return [
    'view_replace_str' => [
        '__PUBLIC__' => SITE_URL.'/public/static/admin',    
        '__IMG__' => SITE_URL.'/public/static',
    ],
    
];