<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
$username = "root";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
$password = "";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
$dbname = "thai_newyears";  // แก้ไขเป็นชื่อฐานข้อมูลของคุณ

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
// ค้นหาข้อมูลโพสต์ที่ต้องการแก้ไข
$sql_post = "SELECT COUNT(*) AS post_count FROM post";
$result_post = $conn->query($sql_post);
$row_post = $result_post->fetch_assoc();
$post_count = $row_post['post_count'];

if ($result_post->num_rows > 0) {
    $row = $result_post->fetch_assoc();
} else {
    echo "ไม่พบข้อมูลโพสต์ที่ต้องการแก้ไข";
    $conn->close();
    exit;
}

$conn->close();
?>
