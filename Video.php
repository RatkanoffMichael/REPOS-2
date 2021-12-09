<?php
require_once 'VideoConnect.php';
?>
<form action = "Video.php" method = "GET">
Выберите жанр:<SELECT name = "Janre">
<?php
$result = mysqli_query($link,"SELECT
  film_janre.Janre
FROM film_janre");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
foreach ($rows as $row)
{
	echo "<option>". ($row['Janre']."</option>");
}
?>
</select>
<input type = "submit" name = "submit" value = "Поиск"><br>

</form>
<?php
if ($_GET['submit'])
{
	$result = mysqli_query($link,"SELECT
  films.Name,
  director.First_Name,
  director.Last_Name,
  films.Country,
  films.Release_date,
  films.Duration,
  films.Language
FROM films
  INNER JOIN film_janre
    ON films.Janre_code = film_janre.Code_janre
  INNER JOIN director
    ON director.film_code = films.film_kode
    AND films.Director_Code = director.Director_Code
WHERE film_janre.Janre = '$_GET[Janre]'");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo '<caption>'."Фильмы по жанру " . $_GET['Janre'] .'</caption>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Фильм".'</th>';
echo '<th>'."Режиссер".'</th>';
echo '<th>'."Страна".'</th>';
echo '<th>'."Язык".'</th>';
echo '<th>'."Дата выхода".'</th>';
echo '<th>'."Продолжительность".'</th>';
echo '</tr>';
foreach ($rows as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['Name'].'</td>';
	echo '<td>'.$row['First_Name']." ".$row['Last_Name'].'</td>';
	echo '<td>'.$row['Country'].'</td>';
	echo '<td>'.$row['Language'].'</td>';
	echo '<td>'.$row['Release_date']."г.".'</td>';
	echo '<td>'.$row['Duration']." мин.".'</td>';
	echo '</tr>';
	
}

}
echo '</table>';
?>
<form action = "Video.php" method = "GET">
<br>
Выберите тип диска:
 <input type = "radio" id = 1 name = "knpk" value = "CD"> <label for = 1>CD</label>
 <input type = "radio" id = 2 name = "knpk" value = "DVD"> <label for = 2>DVD</label>
 <br>
 <input type = "submit" name = "submit2" value = "Искать">
</form>
<?php
if ($_GET['submit2'])
{
	$result1 = mysqli_query($link,"SELECT
  disks.`№_of_disk`,
  disks.Name,
  disks.Receipt_date,
  disks.Rental_price,
  disks.type
FROM disks
WHERE disks.type = '$_GET[knpk]'");
$rows1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
echo '<caption>'."Диски типа " . $_GET['knpk'] .'</caption>';
echo '<table border="1">';
echo '<tr>';
echo '<th>'."Фильм".'</th>';
echo '<th>'."Дата выхода".'</th>';
echo '<th>'."Цена за прокат".'</th>';
echo '<th>'."Тип".'</th>';
echo '</tr>';
foreach ($rows1 as $row)
{
	

	echo '<tr>';
	echo '<td>'.$row['Name'].'</td>'; 
	echo '<td>'.$row['Receipt_date'].'</td>';
	echo '<td>'.$row['Rental_price']." руб.".'</td>';
	echo '<td>'.$row['type'].'</td>';
	echo '</tr>';
	
}

}
echo '</table>';

?>
<form action = "Video_barter.php">
<br>
<input type = "submit" name = "submit3" value = "Взять диск в прокат">
</form>

<form action="Video_KlientAdd.php">
<br>
<br>
<input type = "submit" name = "submit4" value = "Добавить клиента"><br>
</form>