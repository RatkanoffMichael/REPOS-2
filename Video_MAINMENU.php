<?php
require_once 'VideoConnect.php';
?>

<center><font size="10" color="Purple" face="Gang small"><h1>Видеопрокат фильмов</h1></center></font>
<pre>
</pre>
<form action = "Video.php">
<br>
<center><input type = "submit" name = "submit1" value = "Поиск фильмов по жанру"></center>
</form>

<form action = "Video_CDDVD.php">
<br>
<center><input type = "submit" name = "submit2" value = "Выбор типа диска"></center>
</form>

<form action = "Video_Director.php">
<br>
<center><input type = "submit" name = "submit3" value = "Поиск фильмов по режиссеру"></center>
</form>

<form action="Video_KlientAdd.php">
<br>
<center><input type = "submit" name = "submit4" value = "Добавить клиента"><br></center>
</form>

<form action="Video_KlientDel.php">
<br>
<center><input type = "submit" name = "submit5" value = "удалить клиента"><br></center>
</form>