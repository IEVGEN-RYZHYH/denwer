

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
<? include "scripts/php/ftp_connect.php";
		
		include "scripts/php/upload_on_ftp.php";
		
		include "scripts/php/ftp_disconnect.php";
?>
