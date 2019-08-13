<?php
$page = "arts";
$title = "Arts";
require_once('header.php');
include('Admin/conn.php');
$query1 = "select * from arts where pid='1'";
$result1 = mysqli_query($link, $query1) or die("Error fetching data." . mysqli_error($link));
$row1 = mysqli_fetch_assoc($result1);
$pname1 = $row1['pname'];
$ptype1=$row1['ptype'];
$aname1=$row1['aname'];
$cost1=$row1['cost'];

$query2 = "select * from arts where pid='2'";
$result2 = mysqli_query($link, $query2) or die("Error fetching data." . mysqli_error($link));
$row2 = mysqli_fetch_assoc($result2);
$pname2 = $row2['pname'];
$ptype2=$row2['ptype'];
$aname2=$row2['aname'];
$cost2=$row2['cost'];

$query3 = "select * from arts where pid='3'";
$result3 = mysqli_query($link, $query3) or die("Error fetching data." . mysqli_error($link));
$row3 = mysqli_fetch_assoc($result3);
$pname3 = $row3['pname'];
$ptype3=$row3['ptype'];
$aname3=$row3['aname'];
$cost3=$row3['cost'];

$query4 = "select * from arts where pid='4'";
$result4 = mysqli_query($link, $query4) or die("Error fetching data." . mysqli_error($link));
$row4 = mysqli_fetch_assoc($result4);
$pname4 = $row4['pname'];
$ptype4=$row4['ptype'];
$aname4=$row4['aname'];
$cost4=$row4['cost'];

$query5 = "select * from arts where pid='5'";
$result5 = mysqli_query($link, $query5) or die("Error fetching data." . mysqli_error($link));
$row5 = mysqli_fetch_assoc($result5);
$pname5 = $row5['pname'];
$ptype5=$row5['ptype'];
$aname5=$row5['aname'];
$cost5=$row5['cost'];

$query6 = "select * from arts where pid='6'";
$result6 = mysqli_query($link, $query6) or die("Error fetching data." . mysqli_error($link));
$row6 = mysqli_fetch_assoc($result6);
$pname6 = $row6['pname'];
$ptype6=$row6['ptype'];
$aname6=$row6['aname'];
$cost6=$row6['cost'];

$query7 = "select * from arts where pid='7'";
$result7 = mysqli_query($link, $query7) or die("Error fetching data." . mysqli_error($link));
$row7 = mysqli_fetch_assoc($result7);
$pname7 = $row7['pname'];
$ptype7=$row7['ptype'];
$aname7=$row7['aname'];
$cost7=$row7['cost'];

$query8 = "select * from arts where pid='8'";
$result8 = mysqli_query($link, $query8) or die("Error fetching data." . mysqli_error($link));
$row8 = mysqli_fetch_assoc($result8);
$pname8 = $row8['pname'];
$ptype8=$row8['ptype'];
$aname8=$row8['aname'];
$cost8=$row8['cost'];

$query9 = "select * from arts where pid='9'";
$result9 = mysqli_query($link, $query9) or die("Error fetching data." . mysqli_error($link));
$row9 = mysqli_fetch_assoc($result9);
$pname9 = $row9['pname'];
$ptype9=$row9['ptype'];
$aname9=$row9['aname'];
$cost9=$row9['cost'];

$query10 = "select * from arts where pid='10'";
$result10 = mysqli_query($link, $query10) or die("Error fetching data." . mysqli_error($link));
$row10 = mysqli_fetch_assoc($result10);
$pname10 = $row10['pname'];
$ptype10=$row10['ptype'];
$aname10=$row10['aname'];
$cost10=$row10['cost'];

$query11 = "select * from arts where pid='11'";
$result11 = mysqli_query($link, $query11) or die("Error fetching data." . mysqli_error($link));
$row11 = mysqli_fetch_assoc($result11);
$pname11 = $row11['pname'];
$ptype11=$row11['ptype'];
$aname11=$row11['aname'];
$cost11=$row11['cost'];

$query12 = "select * from arts where pid='12'";
$result12 = mysqli_query($link, $query12) or die("Error fetching data." . mysqli_error($link));
$row12 = mysqli_fetch_assoc($result12);
$pname12 = $row12['pname'];
$ptype12=$row12['ptype'];
$aname12=$row12['aname'];
$cost12=$row12['cost'];