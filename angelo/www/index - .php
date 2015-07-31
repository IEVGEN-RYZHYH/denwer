<? 
$host = "159.224.77.136";
$connect = ftp_connect($host);
 $user = "x1";
 $password = "stakanmaster333";
$ftp = ftp_login($connect, $user, $password);
 if (!$ftp){
	echo "Nihuya";
	exit;
	}
	else{
	echo "Congratulations! Connection ok! \n Zaebis' ! <br>";


	};

   $local_file = "Z:/home/angelo/www/1.jpg";
  $remote_file = "part0/x1/test/angelo/www/img/BackGround.jpg";
  $result = ftp_get($connect, $local_file, $remote_file, FTP_BINARY);
   if (!$result){
	echo "Nihuya";
	exit;
	}
	else{
	echo "ok! we get it!!!<br>";
	 

	};
$bye =	ftp_close($connect);
if(!$bye){
echo "Warning!Connection was not closed";
}
else {
echo "Good bye!!";
};
?>

<HTML> 

	<HEAD>
		<style type="text/css">
		   body {
			height: 2000px; /* Высота блока */
			width: 1920px; /* Ширина блока */
			overflow: auto;
			background: url(img/BackGround.jpg) no-repeat ; /* Цвет фона, 
															путь к фоновому изображению и 
															повторение фона по вертикали */
		   }
			height: 2000px; /* Высота блока */
			width: 1920px; /* Ширина блока */
			overflow: auto;
			background: url(img/string.png) no-repeat ; /* Цвет фона, 
															путь к фоновому изображению и 
															повторение фона по вертикали */
	  </style>
		
	</HEAD>
	
	<BODY><form action="get_upload.php" method="POST" enctype="multipart/form-data">
	<table align="center">
		<tr>
		<td align="right">Current server:</td>
		<td><input size="50" type="text" name="server" value=""></td>
		</tr>
		<tr>
		<td align="right">Username:</td>
		<td><input size="50" type="text" name="user"  value="">
		</td>
		</tr>
		<tr>
		<td align="right">Password:</td>
		<td><input size="50" type="text" name="password" value="" ></td>
		</tr>
		<tr>
		<td align="right">Path on the Server:</td>
		<td><input size="50" type="text" name="pathserver" ></td>
		</tr>
		<tr>
		<td align="right">Select File to Upload:</td>
		<td><input name="userfile" type="file" size="50"></td>
		</tr>
		</table>
		<table align="center">
		<tr>
		<td align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
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