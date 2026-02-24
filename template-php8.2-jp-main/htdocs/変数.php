<?php
//型の指定は基本小文字

$intValue = 42;
echo '<pre>';   //コード同値の改行を実現できる
var_dump($intValue); // 出力: int(42)
echo '<br>';

$floatValue = 3.14;
var_dump($floatValue); // 出力: float(3.14)少数を表す

$stringValue = 'aaa';
var_dump($stringValue); // 出力: string(3) "aaa"テキストデータ

$boolValue = true; // 「true」 or 「false」
var_dump($boolValue); // 出力: bool(true)

$nullValue = null;
var_dump($nullValue); // 出力: NULL　null は「何もないこと」を表すためだけに存在する、PHPにおける唯一無二の特別な値

$arrayValue = ['a', 'b', 'c']; // array('a', 'b', 'c') でも同じ
var_dump($arrayValue);
// 出力:
//   array(3) {
//     [0]=>
//     string(1) "a"
//     [1]=>
//     string(1) "b"
//     [2]=>
//     string(1) "c"
//   }