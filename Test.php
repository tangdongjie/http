<?php

require_once './vendor/autoload.php';

use Tangdj\Http\TangdjHttp;

//异步
//$r = TangdjHttp::asJson()->get('127.0.0.1/esTest.php', ['a' => 'b'])->json();
//
//$r = TangdjHttp::asJson()->post('127.0.0.1/esTest.php', ['a' => 'b'])->json();

//并发
$r = TangdjHttp::unwrap([
    'a' => TangdjHttp::asJson()->getConcurrent('127.0.0.1/Test.php', ['get_params' => ['a'=>111,'b'=>22]]),
    'b' => TangdjHttp::asJson()->postConcurrent('127.0.0.1/Test.phpt', ['post_params' => ['c'=>333,'d'=>44]])
]);

$a = $r['a']->json();
$b = $r['b']->json();

var_dump($a);
var_dump($b);