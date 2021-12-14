<?php
require_once 'VideoConnect.php';
?>
<form action = "Video_Disksadd.php" method = "GET">
<caption> Заполните данные о клиенте </caption>
<table border="1">
<tr>
<th> Название фильма </th>
<th> кол-во серий </th>
<th> страна </th>
<th> Дата выпуска </th>
<th> В главной роли</th>
<th> Режиссер </th>
<th> Язык </th>
<th> страна </th>
<th> Жанр </th>
<th> Продолжительность </th>
<th> Тип диска </th>
</tr>
<tr>
<td> <input type = "text" name = "FNameKlient"> </td>
<td> <input type = "text" name = "LNameKlient"> </td>
<td> <input type = "number" name = "Seria"> </td>
<td> <input type = "number" name = "Nomer"> </td>
<td> <input type = "text" name = "Adres"> </td>
</tr>
</table>
<br>
<input type = "submit" name = "submit1" value = "Добавить клиента"><br>
<br>
</form>
<?php
if ($_GET['submit1'])
{
	if (($_GET[FNameKlient] and $_GET[LNameKlient] and $_GET[Seria] and $_GET[Nomer] and $_GET[Adres]) != " "){
	$result = mysqli_query($link,"INSERT HIGH_PRIORITY INTO klients (№Klient, Firstname, Lname, pasport_lot, passport_No, Adress)
	VALUES (0,'$_GET[FNameKlient]','$_GET[LNameKlient]','$_GET[Seria]','$_GET[Nomer]','$_GET[Adres]');");
	}else {echo "<p> Введите данные в таблицу </p>";}
}
?>
<form action="Video.php">
<br>
<br>
<input type = "submit" name = "submit5" value = "Перейти на главную"><br>

</form>