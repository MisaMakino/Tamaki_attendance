<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
/*<title>体操教室出席登録</title>*/
</head>
<body>
 
<p align="center">  
  <font size="7">体操教室出席登録 </font>
<br><br><br></p>  
  
<form action="regist.php" method="post">
  
  <p align="center"> 
  <font size="5">日付</font><br />
  <input type="datetime" name="date" style="width: 400px; length:200px; font-size:30px;"  value="" ><br />
  </p>
  
  <p align="center"> 
  <font size="5">お名前</font><br />
  <select name="name" style="width: 400px; length:400px; height:50px; font-size:20px;" >
   <option value="">ーーーーー選択してくださいーーーーー</option>
    <option value="牧野美紗">牧野美紗</option>
    <option value="松尾康平">松尾康平</option>
    <option value="稗方和夫">稗方和夫</option>
    <option value="城野裕太">城野裕太</option>
  </select><br><br />
  </p>
  
  <p align="center"> 
  <font size="5">地域</font><br />
  <select name="area" style="width: 400px; length:400px; height:50px; font-size:20px;" >
   <option value="">ーーーーー選択してくださいーーーーー</option>
    <option value="井倉">井倉</option>
    <option value="岩出">岩出</option>
    <option value="岡村">岡村</option>
    <option value="小社曽根">小社曽根</option>
    <option value="勝田">勝田</option>
    <option value="蚊野">蚊野</option>
    <option value="蚊野茶屋">蚊野茶屋</option>
    <option value="上田辺">上田辺</option>
    <option value="久保">久保</option>
    <option value="玉川">玉川</option>
    <option value="田丸">田丸</option>
    <option value="田宮寺">田宮寺</option>
    <option value="中楽">中楽</option>
    <option value="積良">積良</option>
    <option value="冨岡">冨岡</option>
    <option value="中角">中角</option>
    <option value="長更">長更</option>
    <option value="野篠">野篠</option>
    <option value="原">原</option>
    <option value="日向">日向</option>
    <option value="昼田">昼田</option>
    <option value="宮古">宮古</option>
    <option value="妙法寺">妙法寺</option>
    <option value="門前">門前</option>
    <option value="矢野">矢野</option>
    <option value="山岡">山岡</option>
    <option value="山神">山神</option>
  </select><br><br />
  </p>
  
  <p align="center">
  <font size="5">血圧上</font><br />
  <input type="text" name="upper" style="width: 400px; length:200px; height:50px; font-size:30px;" value="" ><br />
  </p>
  
  <p align="center">
  <font size="5">血圧下</font><br />
  <input type="text" name="bottom" style="width: 400px; length:200px; height:50px; font-size:30px;" value=""><br />
  <br />
  </p>
  
  <p align="center">
  <input type="submit"　 value="登録する"　class="button">
  </p>
  
</form>
</body>
</html>
