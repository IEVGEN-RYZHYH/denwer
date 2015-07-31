

<HTML> 

	<HEAD>
		<style type="text/css">
		   body {
		height: 2000px; /*	Высота блока */
		width: 1500px; /*	Ширина блока */
			overflow: auto;
			
			background: url(img/AngeloTes1t.jpg) no-repeat ; /* Цвет фона, 
															путь к фоновому изображению и 
															повторение фона по вертикали */
															background-position: center  top;
		   }
			height: 2000px; /* Высота блока */
			width: 1500px; /* Ширина блока */
			overflow: auto;
			background: url(img/string.png) no-repeat ; /* Цвет фона, 
															путь к фоновому изображению и 
															повторение фона по вертикали */
	  </style>
		
	</HEAD>
	
	<BODY><div align="center">
	<div align="center" style="height: 450px; 
		width: 1500px; "></div><br>
	<div align="center">
	<br><br><br><form action="index.php" accept-charset="windows-1251, UTF-8" method="POST" enctype="multipart/form-data">
	<table align="center">
		<tr>
		<td align="right">Адрес файлового сервера:</td>
		<td><input size="50" type="text" name="server" value=""></td>
		</tr>
		<tr>
		<td align="right">Пользователь:</td>
		<td><input size="50" type="text" name="user"  value="">
		</td>
		</tr>
		<tr>
		<td align="right">Пароль:</td>
		<td><input size="50" type="password" name="password" value="" ></td>
		</tr>
		<tr>
		<td align="right">Путь файла на сервере:</td>
		<td><input size="50" type="text" name="pathserver" ></td>
		</tr>
		<tr>
		<td align="right">Файл для загрузки:</td>
		<td><input name="userfile" type="file" size="50"></td>
		</tr>
		</table>
		<table align="center">
		<tr>
		<td align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
		</div>
	</div>
</form>
	
	</div>
	<!--
		<BACKGROUND> 
			<center> 
				<img src="img/BackGround.jpg" style="width:40%;height:;text-align:center;"> 
				
			</center>
		</BACKGROUND>
		<img src="img/string.png" style="width:40%;height:;text-align:top;"> 
		<center><img src="img/AngeloTest.jpg" style="width:40%;height:;text-align:center;"></center>-->
		
	</BODY>
</HTML>
<? 
//имя файла, который нужно загрузить
$filep = $_FILES['userfile']['tmp_name']; 
$ftp_server = $_POST['server'];
$ftp_user_name = $_POST['user'];
$ftp_user_pass = $_POST['password'];
$paths = $_POST['pathserver'];
//имя файла на сервере после того, как вы его загрузите
$name = $_FILES['userfile']['name'];
$check = $filep;
if($check){

	$con_id = ftp_connect($ftp_server) or die("<center><font style=\"12pt/10pt sans-serif;color:red;\">Cервер не отвечает!</font></center>");

	// входим при помощи логина и пароля
	$login_result = ftp_login($con_id, $ftp_user_name, $ftp_user_pass);
// проверяем подключение
		if ((!$con_id) || (!$login_result)) {
			   echo "<font style=\"12pt/10pt sans-serif;color:red;\">Внимание! Соединение сброшено!";
			   echo "Попытка соединения с <b>$ftp_server</b> пользователем: <b>$ftp_user_name</b>
			   была прервана.Проверьте правильность ввода данных!</font>";
			   exit;
		   } else {
			   echo "<center>Соединение с  <font style=\"12pt/10pt sans-serif;color:LimeGreen;\"><b><u>ftp://$ftp_server</u></b></font> ,   пользователем: <font style=\"12pt/10pt sans-serif;color:LimeGreen;\"><b><u>$ftp_user_name</u></b></font> установлено <br>";
		   };


if ($login_result ) {echo "<br>Прилогинился<br>";}
$buff = ftp_rawlist($con_id, '.');
var_dump($buff);


$upload = ftp_put($con_id, '/part0/x1/downloads/'.$paths.'/'.$name, $filep, FTP_BINARY);
// проверяем статус загрузки
if (!$upload) {
       echo "Error: FTP upload has failed!</center>";
   } else {
       echo "Успешно загружено: <font style=\"12pt/10pt sans-serif;color:MediumBlue;\"><b>$name</b></font> на $ftp_server</center>";
   };
   set_time_limit(300);


ftp_close($con_id);


}
else{
echo "<center>Заполните форму</center>";
};
?>
