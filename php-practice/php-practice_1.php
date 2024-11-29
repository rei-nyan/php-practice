<?php
// Q1 変数と文字列

$name = "市川";
echo '私の名前は「'. $name. '」です。';


// Q2 四則演算

$num = 5;
$num1 = 4;
echo ( $num * $num1 ), "\n" ;
echo ( $num * $num1 / 2);


// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
$Datetime = date("Y年m月d日 H時i分s秒");
echo "現在の時刻は、$Datetime です。";

// Q4 条件分岐-1 if文

$device = 'mac';
if ($device == 'windows' ||$device == 'mac' ) {
    echo '使用osは、'. $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 25;
$message = ($age > 20) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列

$prefectures = [ '茨城県','群馬県','埼玉県','栃木県','千葉県','東京都','神奈川県'];
echo  $prefectures[3]. 'と'.$prefectures[4]. 'は関東地方の都道府県です。';


// Q7 連想配列-1

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
];
foreach ($prefectures as $place) {
    echo $place, "\n";
}


// Q8 連想配列-2

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市'
];
foreach ($prefectures as $prefecture => $place) {
 if ($prefecture === '埼玉県') {
  echo $prefecture.'の県庁所在地は、'.$place.'です。';
   }
}


// Q9 連想配列-3

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県'=>'横浜市',
    '千葉県'=>'千葉市',
    '埼玉県'=>'さいたま市',
    '栃木県'=>'宇都宮市',
    '群馬県'=>'前橋市',
    '茨城県'=>'水戸市',
    '愛知県',
    '大阪府'
    ];
foreach ($prefectures as $prefecture => $place) {
    if ($place === '愛知県' || $place === '大阪府') {
        echo $place.'は関東地方ではありません。',"\n";
    }
    else {
        echo $prefecture.'の県庁所在地は、'.$place.'です。',"\n";
    }
}


// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。' , "\n";
}

hello('髙橋');
hello('永瀬');

// Q11 関数-2

function calcTaxInPrice($price)
{
$tax_rate = 1.1;
$tax_in = ($price * $tax_rate);
return $price."円の商品の税込価格は".$tax_in."円です。";
}

$tax_in = calcTaxInPrice(1000);
echo $tax_in;


// Q12 関数とif文

function distinguishNum($num)
{
    if ($num % 2 === 0 ){
        echo $num."は偶数です。","\n";
        
    }
    else {
        echo $num."は奇数です。","\n";
    }
}
distinguishNum(11);
distinguishNum(24);

// else if のほうがいいのか

// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch ($grade) {
        case 'A':
        case 'B':
            echo "合格です。","\n";
            break;
            
        case 'C':
            echo"合格ですが追加課題があります。","\n";
            break;
        
        case'D':
            echo"不合格です。","\n";
            break;
            
        default:
            echo"判定不明です。講師に問い合わせてください。","\n";
            break;
    }
}
evaluateGrade('A');
evaluateGrade('F');
