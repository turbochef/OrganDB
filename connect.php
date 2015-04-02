<?php
$connection = mysql_connect('localhost', 'maddutch_lauren', 'ilovedaniel');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('maddutch_laur123');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}