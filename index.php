<html>

<form action="2.php" method="get">

Please input your name<input type="text" name="uName" value="Your name here"><br/>
Please input your pwd<input type="password" name="uPWD"><br/>

<textarea cols="100" rows="20" name="uMessage">
</textarea>

請選擇你的性別:<br/>
男<input type="radio" name="gender" value="male" checked>
女<input type="radio" name="gender" value="female">

請選擇你的興趣:</br>
電腦<input type="checkbox" name="habit[]" value="computer">
旅遊<input type="checkbox" name="habit[]" value="traval">
睡覺<input type="checkbox" name="habit[]" value="sleep">

<select city="city[]">
<option value="Taichung">台中</option>
<option value="Taipei">台北</option>
<option value="Kaohsiung">高雄</option>
</select>

<input type="submit" value="送出資料">
<input type="reset" value="清除資料">

</html> 