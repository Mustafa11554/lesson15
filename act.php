<?php
if (isset($_POST['name'], $_POST['surname'], $_POST['patronymic'], $_POST['date'], $_POST['kg'] ))
{
   echo 'Пользаватель с фамилией', $_POST['surname'], '</br>';
   echo 'С именем', $_POST['name'], '</br>';
   echo 'С отчеством', $_POST['patronymic'], '</br>';
   echo 'Полное имя которого', $_POST['surname  name patronymic'], '</br>';
   echo 'С датой рождение', $_POST['date'], '</br>';
   echo 'С ростом', $_POST['height'], '</br>';
   echo 'С весом', $_POST['kg'], '</br>';
}
 