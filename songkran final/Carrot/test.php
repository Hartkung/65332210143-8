<?php
// กำหนดข้อมูลการเชื่อมต่อฐานข้อมูล
$servername = "localhost"; // ชื่อเซิร์ฟเวอร์ฐานข้อมูล
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = ""; // รหัสผ่านฐานข้อมูล
$dbname = "thai_newyears"; // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// คำสั่ง SQL เพื่อดึงข้อมูล
$sql = "SELECT title, time_post FROM post";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // เก็บข้อมูลลงในตัวแปร $data
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// ปิดการเชื่อมต่อ
$conn->close();

// ส่งข้อมูลในรูปแบบ JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
