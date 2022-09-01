<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Webboard best</h1></center>
    <hr>
    <div align="center">
    ต้องการดูกระทู้หมายเลข<?php echo $_GET["id"]; ?>
</div><br>
<table style="border: 2px solid black ; width:20%" align="center">
    <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
    <tr><td><textarea id="post" name"post"></textarea> </td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
</table>
<br>
<div align="center">
<a href="index.html">กลับสู่หน้าหลัก</a>
</div>
</body>
</html>