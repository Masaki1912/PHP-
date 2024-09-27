<?php
// Q1 変数と文字列
$name = '阿部 将輝';
$name = '田中 太郎';

echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$num = 5*4;

echo $num;
echo $num/2;


// Q3 日付操作
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');


// Q4 条件分岐-1 if文
$device = 'not windows';


if ($device === 'windows' || $device === 'mac') {
  echo '使用OSは'.$device.'です。';
} else {
  echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;


// Q6 配列
$area = ['東京都','神奈川県','埼玉県','栃木県','千葉県','茨城県','群馬県'];

echo $area[2] . 'と' . $area[3] . 'は関東地方の都道府県です。';


// Q7 連想配列-1
$cities = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '群馬県' => '宇都宮市',
  '栃木県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach($cities as $value)
{
 echo $value;
 echo "\n"; //改行の命令文 ※記載時にはダブルクオーテーションで囲む必要がある
}


// Q8 連想配列-2
$town = '埼玉県';

if(array_key_exists($town,$cities)){
    $city = $cities[$town];
    echo $town.'の県庁所在地は'.$city.'です。';
}

//Q8 連想配列-2 修正版
foreach ($cities as $prefecture => $city) {
  
  if ($prefecture === '埼玉県')
  {
      echo $prefecture . 'の県庁所在地は' . $city . 'です。';
      break;
  }
}


// Q9 連想配列-3
$cities['愛知県'] = '名古屋市';
$cities['大阪府'] = '大阪府';

foreach ($cities as $town => $city) {
  if (
    $town === '東京都' ||
    $town === '神奈川県' ||
    $town === '千葉県' ||
    $town === '埼玉県' ||
    $town === '群馬県' ||
    $town === '栃木県' ||
    $town === '茨城県'
    )
  {
    echo $town . 'の県庁所在地は' . $city . 'です。';
  } else
  {
    echo $town . 'は関東地方ではありません。';
  }
}


// Q10 関数-1
function hello($name) {
  return $name . 'さん、こんにちは。';
}

$message = hello('金谷');
echo($message);

$message2 = hello('安藤');
echo($message2);


// Q11 関数-2
$price = 1000;

function calcTaxInPrice($taxOutPrice)
{
  return $taxOutPrice * 1.1;
}

$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice.'円です。';


// Q12 関数とif文
function distinguishNum($number)
{
    if ( $number % 2 === 1 )
    {
        return $number . 'は奇数です。';   
    } else {
        return $number . 'は偶数です。';
    }
}

$odd = distinguishNum(11);
echo($odd);

$even = distinguishNum(24);
echo($even);


// Q13 関数とswitch文
function evaluateGrade($i) {
  switch ($i) {
      case 'A':
      case 'B':
          return '合格です。';
      
      case 'C':
          return '合格ですが追加課題があります。';
      
      case 'D':
          return '不合格です。';
      
      default:
          return '判定不明です。講師に問い合わせてください。';
  }
}

evaluateGrade('A');
evaluateGrade('E');

?>