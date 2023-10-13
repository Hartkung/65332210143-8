<!DOCTYPE html>
<html>
<head>
    <title>โพสของผู้ใช้</title>
</head>
<body>
<h1>โพสของผู้ใช้</h1>

<?php
// เชื่อมต่อฐานข้อมูล MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thai_newyears";

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL เพื่อดึงโพสของผู้ใช้คนนั้น
$user_id = 1; // เปลี่ยนเลข 1 เป็นรหัสผู้ใช้ของคนที่ต้องการดูโพส
$joinpostwithuser = "SELECT post.title, users.User, post.content, post.time_post, post.time_edit FROM post INNER JOIN users ON post.Auth_ID = users.UserID WHERE post.postID = $post_id ORDER BY post.time_post DESC";

$result = $conn->query($joinpostwithuser);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // แสดงรายการโพส
    while ($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row[""] . "</p>";
        echo "<p>เนื้อหา: " . $row["content"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>ไม่พบโพสสำหรับผู้ใช้คนนี้</p>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>

</body>
</html>
