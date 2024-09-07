<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
      var_dump('tic-tac');
  }elseif ($i % 4 === 0) {
      var_dump('tic');
  }elseif ($i % 5 === 0) {
      var_dump('tac');
  }else {
      var_dump($i);
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//Q問題1
var_dump( $personalInfos[1]['name'].'の電話番号は'. $personalInfos[1]['tel'] .'です。' );

//問題2
foreach ( $personalInfos as $x => $y ) {
    var_dump(( $x + 1 ).'番目の'. $y['name'] .'さんのメールアドレスは'. $y['mail'] .'で、電話番号は'. $y['tel'] .'です。');
}

//問題３
foreach ($ageList as $index => $age) {
    $personalInfos[$index]['age'] = $age;
  };
  
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
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120,'山田');

var_dump('学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。');

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($student)
    {
        echo $this->studentName.'は'.$student.'の授業に出席しました。学籍番号：'.$this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d');

//問題２
$today = new datetime();
$date = new datetime('1992-4-25');

$diff = $today->diff($date);

var_dump($diff->format('あの日から%a日経過しました。'));

?>