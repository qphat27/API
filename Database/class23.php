<?php

include('../config.db.php'); //นำไฟล์ confige.bd.php มาใช้
$table = "CREATE TABLE IF NOT EXISTS members(
id int(6) AUTO_INCREMENT COMMENT 'เลขที่',
id_stu int(6) COMMENT 'รหัสนักเรียน',
name varchar(100) COMMENT 'ชื่อ-สกุล',
nname varchar(100) COMMENT 'ขื่อเล่น',
age varchar(100) COMMENT 'อายุ',
phoas varchar(255) COMMENT 'ที่อยู่',
status varchar(30) COMMENT 'สถาณะภาพ',
PRIMARY KEY (id)
)";
if($conn->query($table) === TRUE) {
  echo "สร้างตารางฐานข้อมูลสำเร็จ";
}else{
  echo "ไม่สามารถสร้างตารางฐานข้อมูลได้" .$conn->error;
}

$conn->close(); //ปิดการเชื่อมต่อฐานข้อมูล

?>
