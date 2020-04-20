<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>体操教室出席登録</title>
</head>
<body>
<?php

$azure_mysql_connstr = $_SERVER["MYSQLCONNSTR_localdb"];

    $azure_mysql_connstr_match = preg_match(
      "/".
        "Database=(?<database>.+);".
        "Data Source=(?<datasource>.+);".
        "User Id=(?<userid>.+);".
        "Password=(?<password>.+)".
      "/u",
      $azure_mysql_connstr,
      $_);        

$link = mysql_connect($_["datasource"], $_["userid"], $_["password"], $_["database"]);
if (!$link) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db($_["database"], $link);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $link);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$date   = $_REQUEST['date'];
$name   = $_REQUEST['name'];
$area   = $_REQUEST['area'];
$upper  = $_REQUEST['upper'];
$bottom = $_REQUEST['bottom'];

$result = mysql_query("INSERT INTO Tamaki(Attendance,Name,Area,BPupper,BPbottom) VALUES('$date','$name','$area','$upper','$bottom')", $link);
if (!$result) {
  exit('データを登録できませんでした。');
}

$link = mysql_close($link);
if (!$link) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
  
  <br><br>
  <p align="center">
   <font size="7">登録完了しました</font></p>
  <br><br>
  
  <p align="center">
    <a href="completeerror.php">戻る</a></p>
</body>
</html>