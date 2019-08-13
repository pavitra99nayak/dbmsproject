<?php
$page = "exhibition";
$title = "Exhibition";
require_once('header.php');
include('Admin/conn.php');
$query1 = "select * from exhibition where eid='1'";
$result1 = mysqli_query($link, $query1) or die("Error fetching data." . mysqli_error($link));
$row1 = mysqli_fetch_assoc($result1);
$ename1 = $row1['ename'];
$etype1 = $row1['etype'];
$elocation1 = $row1['location'];
$start_date1 = $row1['start_date'];
$end_date1 = $row1['end_date'];

$query3 = "select * from exhibition where eid='3'";
$result3 = mysqli_query($link, $query3) or die("Error fetching data." . mysqli_error($link));
$row3 = mysqli_fetch_assoc($result3);
$ename3 = $row3['ename'];
$etype3 = $row3['etype'];
$elocation3 = $row3['location'];
$start_date3 = $row3['start_date'];
$end_date3 = $row3['end_date'];

$query4 = "select * from exhibition where eid='4'";
$result4 = mysqli_query($link, $query4) or die("Error fetching data." . mysqli_error($link));
$row4 = mysqli_fetch_assoc($result4);
$ename4 = $row4['ename'];
$etype4 = $row4['etype'];
$elocation4 = $row4['location'];
$start_date4 = $row4['start_date'];
$end_date4 = $row4['end_date'];



$query5= "select * from exhibition where eid='5'";
$result5 = mysqli_query($link, $query5) or die("Error fetching data." . mysqli_error($link));
$row5 = mysqli_fetch_assoc($result5);
$ename5 = $row5['ename'];
$etype5 = $row5['etype'];
$elocation5 = $row5['location'];
$start_date5 = $row5['start_date'];
$end_date5 = $row5['end_date'];

$query6= "select * from exhibition where eid='6'";
$result6 = mysqli_query($link, $query6) or die("Error fetching data." . mysqli_error($link));
$row6 = mysqli_fetch_assoc($result6);
$ename6 = $row6['ename'];
$etype6 = $row6['etype'];
$elocation6 = $row6['location'];
$start_date6 = $row6['start_date'];
$end_date6 = $row6['end_date'];

$query7= "select * from exhibition where eid='7'";
$result7 = mysqli_query($link, $query7) or die("Error fetching data." . mysqli_error($link));
$row7 = mysqli_fetch_assoc($result7);
$ename7 = $row7['ename'];
$etype7 = $row7['etype'];
$elocation7 = $row7['location'];
$start_date7 = $row7['start_date'];
$end_date7 = $row7['end_date'];
?>