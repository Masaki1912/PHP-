<?php
// Q1 変数と文字列
$name = '阿部 将輝';

var_dump('私の名前は「' . $name . '」です。');

// Q2 四則演算
$num = 5*4;

var_dump($num);
var_dump($num/2);

// Q3 日付操作
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'not windows';

if ($device === 'windows' || $device === 'mac') {
  var_dump('使用OSは'.$device.'です。');
} else {
  var_dump('どちらでもありません。');
}

// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age > 18) ? '成人です。' : '未成年です。';
var_dump($message);

// Q6 配列
$area = ['東京都','神奈川県','埼玉県','栃木県','千葉県','茨城県','群馬県'];

var_dump($area[3].'と'.$area[4].'は関東地方の都道府県です。');

// Q7 連想配列-1
$citys = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '群馬県' => '宇都宮市',
  '栃木県' => '前橋市',
  '茨城県' => '水戸市'
];

var_dump($citys[0]);
var_dump($citys[1]);
var_dump($citys[2]);
var_dump($citys[3]);
var_dump($citys[4]);
var_dump($citys[5]);
var_dump($citys[6]);

// Q8 連想配列-2
$town = '埼玉県';

if(array_key_exists($town,$citys)){
    $city = $citys[$town];
    var_dump($town.'の県庁所在地は'.$city.'です。');
}

//Q8 修正版
foreach ($citys as $town => $city) {
  if ($town === '埼玉県')
  {
      var_dump($town . 'の県庁所在地は' . $city . 'です。');
  }
}

// Q9 連想配列-3
$citys['愛知県'] = '名古屋市';
$citys['大阪府'] = '大阪府';

foreach ($citys as $town => $city) {
  if ($town === '東京都' || $town === '神奈川県' || $town === '千葉県' || $town === '埼玉県' || $town === '群馬県' || $town === '栃木県' || $town === '茨城県')
  {
    var_dump($town.'の県庁所在地は'.$city.'です。');
  } else
  {
    var_dump($town.'は関東地方ではありません。');
  }
}

// Q10 関数-1
function hello($name) {
  echo $name.'さん、こんにちは。';
}

hello('金谷');
hello('安藤');

// Q11 関数-2
$price = 1000;

function calcTaxInPrice($price)
{
  return $price * 1.1;
}

$taxInPrice = calcTaxInPrice($price);
var_dump($price.'円の商品の税込価格は'.$taxInPrice.'円です。');

// Q12 関数とif文
function distinguishNum($i)
{
    if ( $i % 2 === 1 )
    {
      return $i . 'は奇数です。';   
    } else {
      return $i . 'は偶数です。';
    }
}

$odd = distinguishNum(11);
var_dump($odd);

$even = distinguishNum(24);
var_dump($even);


// Q13 関数とswitch文
function evaluateGrade($i) {
  switch ($i) {
      case 'A':
      case 'B':
          var_dump('合格です。');
          break;
      
      case 'C':
          var_dump('合格ですが追加課題があります。');
          break;
      
      case 'D':
          var_dump('不合格です。');
          break;
      
      default:
          var_dump('判定不明です。講師に問い合わせてください。');
          break;
  }
}

evaluateGrade('A');
evaluateGrade('E');

?>