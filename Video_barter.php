<?php
require_once 'VideoConnect.php';
?>
<form action = "Video_barter.php" method = "GET">
<table border="1">
<tr>
<th> Выберите диск </th>
<th> Выберите клиента </th>
</tr>
<tr>
<td> <SELECT name = "Name">
<?php
$result = mysqli_query($link,"SELECT
  disks.Name
FROM disks");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo "<option>". ($row['Name']."</option>");
}
?>
</select> </td>
<td> <SELECT name = "Firstname">
<?php
$result = mysqli_query($link,"SELECT
  klients.Firstname,
  klients.Lname
FROM klients");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo "<option>". ($row['Firstname']." ".$row['Lname']."</option>");
}
?>
</select> </td>
</tr>
</form>
<form>
<tr>
<td><input type = "submit" name = "submit3" value = "Добавить диск"></td></form>
<td>
<form action="Video_KlientAdd.php">
<input type = "submit" name = "submit33" value = "Добавить клиента">
</form>
</td>
</tr>
</table>
<input type = "submit" name = "submit" value = "Поиск"><br>


<form action="Video.php">
<br>

<input type = "submit" name = "submit5" value = "Перейти на главную"><br>
</form>
<?php
$result = mysqli_query($link,"SELECT
  klients.Firstname,
  klients.Lname,
  film_janre.Janre,
  disks.Name
FROM klients,
     disks");
?>
