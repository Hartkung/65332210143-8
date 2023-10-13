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
    $title = mysqli_real_escape_string($conn,$_POST["title"]);
    $content = mysqli_real_escape_string($conn,$_POST["content"]);
    $UserID = mysqli_real_escape_string($conn,$_SESSION["UserID"]);
    $postID = mysqli_real_escape_string($conn,$_GET["postID"]);

    // สร้างคำสั่ง SQL สำหรับบันทึกข้อมูล
    $sql = "DELETE FROM comment WHERE postID='$postID'";

    print ($sql);

    $result = $conn->query($sql);
    $sql = "DELETE FROM post WHERE postID='$postID'";
    $result = $conn->query($sql);
    print ($result);

    //$sql = "INSERT INTO post (title, content,Auth_ID) VALUES ('$title', '$content','$UserID')";
    if ($result == true) {
        header("Location: ./forum_all.php");
    } else {
        echo "ไม่พบข้อมูลโพสต์ที่ต้องการแก้ไข";
        $conn->close();
        exit;
    }

}
?>
