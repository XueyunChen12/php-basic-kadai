<head>
    <meta charset="UTF-8">
    <title>課題007</title>
</head>

<body>
    <p>
<?php
// 連想配列に値を代入する
$items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
// 連想配列の値を出力する
foreach ($items as $key => $item){
echo "{$key}：{$item}<br>";
}
?>
    </p>
</body>

</html>