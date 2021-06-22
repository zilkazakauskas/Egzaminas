<?php

$connection = mysqli_connect("localhost", "root", "", "egzaminas");

if (mysqli_connect_errno()) {
    echo mysqli_connect_errno();
    exit();
}

//sql uzklausos
$course1 = "SELECT COUNT(kurso_id) as komentarai FROM kurso_komentarai WHERE kurso_id = 1";
$course2 = "SELECT COUNT(kurso_id) as komentarai FROM kurso_komentarai WHERE kurso_id = 2";
$course3 = "SELECT COUNT(kurso_id) as komentarai FROM kurso_komentarai WHERE kurso_id = 3";
$course4 = "SELECT COUNT(kurso_id) as komentarai FROM kurso_komentarai WHERE kurso_id = 4";

//uzklausu vykdymas
$query1 = mysqli_query($connection, $course1);
$query2 = mysqli_query($connection, $course2);
$query3 = mysqli_query($connection, $course3);
$query4 = mysqli_query($connection, $course4);

//rezultatai
$result1 = mysqli_fetch_array($query1);
$result2 = mysqli_fetch_array($query2);
$result3 = mysqli_fetch_array($query3);
$result4 = mysqli_fetch_array($query4);
