<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "thai_newyears";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
    }
// ตรวจสอบความถูกต้องของข้อมูลที่รับมา
$commentname = mysqli_real_escape_string($conn, $_POST["comment"]); // แก้ชื่อตัวแปรเป็น "commentname"
$postID = mysqli_real_escape_string($conn,$_POST["postID"]); // รับค่า post_id จากฟอร์ม
// ตรวจสอบว่า $post_id ไม่เป็นค่าว่างหรือ NULL ก่อนดำเนินการ
if (!empty($postID)) {
$UserID = $_SESSION["UserID"];
// เชื่อมต่อกับฐานข้อมูล
// คำสั่ง SQL เพื่อเพิ่มคอมเมนต์ลงในฐานข้อมูล
$sql = "INSERT INTO comment (`postID`, `Auth_ID`, `comment`) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $postID, $UserID, $commentname);

// ตรวจสอบว่า execute สำเร็จหรือไม่และดำเนินการเพิ่มข้อมูล
if ($stmt->execute()) {
// หากสำเร็จ
header("Location: In_post.php?postID=$postID"); // ส่ง post_id กลับไปยัง In_post.php
exit();
} else {
echo "เกิดข้อผิดพลาดในการเพิ่มคอมเมนต์: " . $stmt->error;
}

// ปิดคำสั่ง prepare
} else {
// กรณี $post_id เป็นค่าว่างหรือ NULL
echo "ค่า 'postID' ไม่ถูกต้อง";
}
}
?>