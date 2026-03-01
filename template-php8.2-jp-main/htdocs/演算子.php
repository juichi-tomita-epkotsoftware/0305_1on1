<?php

print '<h2>&lt;bool形if文テスト&gt;</h2>';

$bool = true;

if (!$bool) {
   echo '<h3>結果: true</h3>';
} else {
   echo '<h3>結果: false</h3>';
}

print '<h2>&lt;bool形&&||テスト&gt;</h2>';

$bool1 = true;
$bool2 = false;

if ($bool1 && $bool2) {
   echo '$$結果: true';
   echo '<br>';
} else {
   echo '$$結果: false';
   echo '<br>';
}

if ($bool1 || $bool2) {
   echo '||結果: true';
   echo '<br>';
} else {
   echo '||結果: false';
   echo '<br>';
}

print '<h2>&lt;is_int関数（整数型なら1）&gt;</h2>';

$value = 23;
//is_int関数は引数の型が整数型の場合1、それ以外の場合は空白を返す。
$bool1 = is_int($value);
echo $bool1;

print '<h2>&lt;　比較演算子を用いた論理演算if文テスト　&gt;</h2>';

$bool2 = 0 <= $value;
// $bool2は0    $valueが0以上
//ポイント  比較演算の結果を変数に代入している
//$valueが0以上か　という比較演算　を$bool2へ代入
//→ よって、bool2という変数の中身は基本的に「True」「False」の2択

if ($bool1 && $bool2) {
    echo '論理演算（$bool1と$bool2がTrue）/結果: OK';
    echo '<br>';
} else {
    echo '論理演算しの組み合わせ/結果: エラー';
    echo '<br>';
}

print '<h2>&lt;　論理演算if文テスト（is_int関数かつ比較演算子）　&gt;</h2>';

$value = 2;

//　結果を変数に入れないVer
//  条件式が複雑にならない限りはこれ
// $valueがint型 かつ(And) $valueが0以上

if (is_int($value) && 0 <= $value) {
    echo '結果: OK';
    echo '<br>';
} else {
    echo '結果: エラー';
    echo '<br>';
}

print '<h2>&lt;　論理演算if文テスト（比較演算子または比較演算子）　&gt;</h2>';

$score1 = 80;
$score2 = 0;

// $score1が80以上 または(Or) $score2が80以上
if (80 <= $score1 || 80 <= $score2) {
    echo '$score1が80以上 または(Or) $score2が80以上<br>';
    echo '結果: 合格';
} else {
    echo '結果: 不合格';
    echo '<br>';
}

print '<h2>&lt;　$score1||$score2がマイナス、または100を超えた場合はエラーになるthrow処理　&gt;</h2>';

if ($score1 < 0 || $score1 > 100) {
    throw new Exception('スコアが不正です。');
} else {
    echo 'スコアは正常です';
}

print '<h2>&lt;　特殊文字　&gt;</h2>';

print'
&amp;&lt(less thanの略);    →   <を表示   <br>
&amp;&gt(greater thanの略);    →   >を表示  <br>
&amp;&amp(ampersandの略);   →   特殊文字を使うときのアンドを表示

<br>気を付けたい演算子<br>

論理演算子(or)：$a || $b
加算子/減算子：$a++
三項演算子：

';
