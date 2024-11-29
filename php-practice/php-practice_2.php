<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'

for ($i=1; $i<=100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac";
        echo "\n";
    } elseif ($i % 5 == 0) {
        echo "tac";
        echo "\n";
    } elseif ($i % 4 == 0){
        echo "tic";
        echo "\n";
    } else {
        echo $i;
        echo "\n";
    }
}

// Q2 多次元連想配列
Q1
echo $personalInfos [1]['name'].'の電話番号は'.$personalInfos [1]['tel'].'です。';

Q2

foreach ($personalInfos as $index => $personalinfo) {
    echo ($index + 1).'番目の'.$personalinfo ['name'].'さんのメールアドレスは'
    .$personalinfo['mail'].'で、電話番号は'.$personalinfo['tel'].'です。'."\n";
}

Q3

$ageList = [25, 30, 18];
foreach ($ageList as $index => $age) {
    $personalInfos [$index]['age'] = $age;
}
var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        echo '学籍番号'.$id.'番の生徒は'.$name.'です。';
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
    $yamada = new Student('120', '山田');

// Q4 オブジェクト-2

// オブジェクト：変数と関数をまとめて1個の機能としてつかえる
// クラス：オブジェクトの設計図
// オブジェクト->メソッドもしくはプロパティ
// インスタンス
//メソッドやプロパティをまとめる

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName.'は'.$lesson.'の授業に出席しました。学籍番号：'.$this->studentId;
    }
}

    $yamada = new Student('120', '山田');
    $yamada->attend('PHP');


// Q5 定義済みクラス

Q1
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime ();
echo $date->modify ('-1 month')->format('Y-m-d');

//メソッドチェーン

Q2
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime ();
$date2= new DateTime('1992-04-25');

echo $date-> diff($date2)->format("あの日から%a日経過しました。");

//ワイルドカード　％aは総日数を表す

