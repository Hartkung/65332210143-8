<?php
session_start();
// รับข้อมูลจากฟอร์ม
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "thai_newyears";

    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
    }

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $password_repeat = mysqli_real_escape_string($conn, $_POST["password-repeat"]);

    // ตรวจสอบความถูกต้องของข้อมูล (เพิ่มเงื่อนไขตามต้องการ)
    if (!empty($username) && !empty($password) && !empty($password_repeat)) {
        if ($password == $password_repeat) {
            // เชื่อมต่อกับฐานข้อมูล MySQL (เปลี่ยนข้อมูลเชื่อมต่อตามฐานข้อมูลของคุณ)

            // ตรวจสอบว่า username ไม่ซ้ำ
            $check_username_sql = "SELECT * FROM users WHERE User = '$username'";
            $check_username_result = $conn->query($check_username_sql);

            if ($check_username_result->num_rows > 0) {
                $_SESSION['message_user'] = "Username นี้มีอยู่ในระบบแล้ว";
                header("Location: register.php");
                exit();
            }

            // เพิ่มข้อมูลลงในตารางสมาชิก (เปลี่ยนชื่อตารางตามฐานข้อมูลของคุณ)
            $sql = "INSERT INTO users (User, Pass) VALUES ('$username', '$password')";

            $stmt = $conn->prepare($sql);

            if ($stmt->execute()) {
                header("Location: Home.php");
                exit();
            } else {
                header("Location: register.php");
                $stmt->error;
                exit();
            }

            // ปิดการเชื่อมต่อฐานข้อมูล
            $stmt->close();
            $conn->close();
        } else {
            $_SESSION['message_pass'] = "รหัสผ่านไม่ตรงกัน";
            header("Location: register.php");
            exit();
        }
    } else {
        exit();
    }
}
?>
