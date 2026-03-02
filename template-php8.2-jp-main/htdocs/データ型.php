<?php
//型の指定は基本小文字
echo '<pre>';   //var_dumpのコード同値の改行を実現できる

echo '<h2>&lt; 基本データ型一覧 &gt;</h2>';

echo
'int型（整数）<br>
float型（少数）/double<br>
string型（文字）<br>
bool型（真偽）/boolean<br>
null型(null)<br>
array型(複数の値リスト)<br><br>

preタグをシングルクオテーションで囲んでechoで出力
→var_dumpのコード同値の改行を実現できる。以下var_dump関数での出力<br><br>';

$intValue = 42;
var_dump($intValue); // 出力: int(42)
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

echo '<h2>&lt; キーワードの大文字・小文字 &gt;</h2>';

echo 'true, false, null等のキーワードは大文字で指定することが可能ですが
プロジェクトでルールを定めていなければ、PHPのコーディング規約として幅広く用いられる
PSR-12に則り、小文字に統一';