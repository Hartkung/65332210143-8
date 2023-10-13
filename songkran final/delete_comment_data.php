<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $servername = "localhost";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
    $username = "root";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
    $password = "";  // แก้ไขเป็นข้อมูลการเชื่อมต่อกับฐานข้อมูลของคุณ
    $dbname = "thai_newyears";  // แก้ไขเป็นชื่อฐานข้อมูลของคุณ

    // เชื่อมต่อกับฐานข้อมูล
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
    }

    // รับข้อมูลจากฟอร์ม
    $postID = mysqli_real_escape_string($conn,$_GET["postID"]);
    $UserID = mysqli_real_escape_string($conn,$_SESSION["UserID"]);
    $commentID = mysqli_real_escape_string($conn,$_GET["commentID"]);
    // สร้างคำสั่ง SQL สำหรับบันทึกข้อมูล
    $sql = "delete from comment WHERE commentID='$commentID'";
    $result = $conn->query($sql);

    //$sql = "INSERT INTO post (title, content,Auth_ID) VALUES ('$title', '$content','$UserID')";
    if ($result == true) {
        header("Location: ./In_post.php?postID=$postID");
    } else {
        echo "ไม่พบข้อมูลโพสต์ที่ต้องการแก้ไข";
        $conn->close();
        exit;
    }

}
?>
