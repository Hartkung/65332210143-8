<?php

// ข้อมูลการเชื่อมต่อฐานข้อมูล
$servername = "localhost";  // ชื่อเซิร์ฟเวอร์ฐานข้อมูล
$username = "root";  // ชื่อผู้ใช้ของ MySQL
$password = "";  // รหัสผ่านของ MySQL
$database = "thai_newyears";  // ชื่อฐานข้อมูลที่คุณต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// สามารถเริ่มใช้ $conn ในการส่งคำสั่ง SQL หรือดำเนินการกับฐานข้อมูลได้
// เมื่อเสร็จสิ้นการใช้งาน $conn ควรปิดการเชื่อมต่อด้วย $conn->close()
// ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    // คำสั่ง SQL เพื่อค้นหาข้อมูลผู้ใช้จากฐานข้อมูล
    $sql = "SELECT * FROM users WHERE User = '$username' AND Pass = '$password'";
    $result = $conn->query($sql);

    // ตรวจสอบว่ามีข้อมูลผู้ใช้ที่ตรงกันหรือไม่
    if ($result->num_rows == 1) {
        // ถ้ามีข้อมูลผู้ใช้ที่ตรงกัน คือล็อกอินเรียบร้อย
        session_start();
        // เริ่มเซสชัน


        // กำหนดค่าในเซสชัน เช่น ชื่อผู้ใช้หรือ ID ของผู้ใช้
        $_SESSION["username"] = $username;
        $_SESSION["UserID"] = $result->fetch_assoc()["UserID"];

        // เปลี่ยนเส้นทางไปยังหน้าหลักหรือหน้าที่คุณต้องการ
        header("Location: Home.php");
        //header("refresh:5;url=Home.php");

        exit();
    } else {
        // ไม่พบข้อมูลผู้ใช้ที่ตรงกัน แสดงข้อความผิดพลาด

        // กำหนดค่าในเซสชัน $_SESSION['message']
        $_SESSION['message'] = "Error";

        // ทำการ redirect ไปยังหน้า login.php
        header("Location: login.php");
        exit();
    }
}

?>