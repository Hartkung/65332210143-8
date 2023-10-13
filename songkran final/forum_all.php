<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="โพสทั้งหมด">
    <meta name="description" content="">
    <title>forum_all</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="forum_all.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.18.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="forum_all">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">
<header class="u-clearfix u-header u-sticky u-sticky-6357 u-header" id="sec-b86e" data-animation-name=""
        data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><a href="Home.php"
                                                                                            class="u-image u-logo u-image-1"
                                                                                            data-image-width="360"
                                                                                            data-image-height="306"
                                                                                            title="Home">
        <img src="images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
             class="u-logo-image u-logo-image-1">
    </a>
    <nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1"
         data-responsive-from="XL">
        <div class="menu-collapse">
            <a class="u-button-style u-nav-link u-palette-4-base" href="#"
               style="padding: 8px 0px; font-size: calc(1em + 16px); background-image: none;">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                     id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;"
                     xml:space="preserve" class="u-svg-content"><g>
                        <rect y="36" width="302" height="30"></rect>
                        <rect y="236" width="302" height="30"></rect>
                        <rect y="136" width="302" height="30"></rect>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g></svg>
            </a>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">

                        <?php
                        if (isset($_SESSION['username'])) {

                            $username = $_SESSION['username']; //เรียกใช้username
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" style="color: #3be8e0" href="myprofile.php">Welcome! ' . $username . '</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">หน้าแรก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum_all.php">ฟอร์รั่มพูดคุย</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="destroy.php" >ออกจากระบบ</a></li>';
                        } else {
                            //ถ้าไม่มีusernameให้แสดงกล่อง หน้าแรก สมัครสมาชิก และ ล็อกอิน
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">หน้าแรก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php">สมัครสมาชิก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">เข้าสู่ระบบ</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum_all.php">ฟอร์รั่มพูดคุย</a></li>';
                            echo '';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
    </nav>
    <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2"
         src="images/images-removebg-preview1.png" alt="" data-image-width="190" data-image-height="103"><img
            class="custom-expanded u-image u-image-contain u-image-default u-preserve-proportions u-image-3"
            src="images/images-removebg-preview2.png" alt="" data-image-width="187" data-image-height="110"></header>
<section class="u-clearfix u-image u-shading u-section-1" id="sec-4a8e" data-image-width="1280" data-image-height="853">
    <h2 class="u-text u-text-default u-text-palette-3-light-2 u-text-1">โพสทั้งหมด</h2>

            <div class="col-lg-4">
                <div class="Statistics">
                    <h4>Statistics</h4>
                    <ul>
                    <?php
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

                    $sql_comments = "SELECT COUNT(*) AS comment_count FROM comment";
                    $result_comments = $conn->query($sql_comments);
                    $row_comments = $result_comments->fetch_assoc();
                    $comment_count = $row_comments['comment_count'];

                    $sql_users = "SELECT COUNT(*) AS user_count FROM users";
                    $result_users = $conn->query($sql_users);
                    $row_users = $result_users->fetch_assoc();
                    $user_count = $row_users['user_count'];

                    if ($result_post->num_rows > 0) {
                        $row = $result_post->fetch_assoc();
                        echo '<li>Total Comments: '.$comment_count.'</li>';
                        echo '<li>Total Posts: '.$post_count.'</li>';
                        echo '<li>Total Users: '.$user_count.'</li>';
                    } else {
                        echo "ไม่พบข้อมูลโพสต์ที่ต้องการแก้ไข";
                        $conn->close();
                        exit;
                    }
                    ?>

                    </ul>
                </div>
            </div>
    <div class="u-form u-form-1"></div>


    <?php
    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username']; //เรียกใช้username
        echo '<a href="Create_post.php"
       class="u-border-none u-btn u-button-style u-hover-palette-2-light-1 u-palette-2-light-2 u-btn-2"
       style="margin-top: 10px;"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px"
                                                           style="width: 1em; height: 1em;">
      <path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M38.5,28H28v11c0,1.104-0.896,2-2,2
      s-2-0.896-2-2V28H13.5c-1.104,0-2-0.896-2-2s0.896-2,2-2H24V14c0-1.104,0.896-2,2-2s2,0.896,2,2v10h10.5c1.104,0,2,0.896,2,2
      S39.604,28,38.5,28z"></path></svg></span>&nbsp;สร้างโพส</a>';
    }
    ?>



    <div class="custom-expanded u-layout-grid u-list u-list-1">
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
        $joinpostwithuser = "SELECT * FROM post INNER JOIN users ON post.Auth_ID = users.UserID ORDER BY time_post DESC";
        $sql = "SELECT title, time_post, users.User FROM post";
        $result = $conn->query($joinpostwithuser);

        if ($result->num_rows > 0) {
            // แสดงข้อมูล
            while ($row = $result->fetch_assoc()) {
                // ในไฟล์ forum_all.php
                echo '<div class="u-border-1 u-border-grey-75 u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-shape-rectangle u-list-item-1" style="margin-bottom: 10px" data-href="In_post.php?postID=' . $row["postID"] . '">
        <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                <p class="u-text u-text-default u-text-2" style="font-size: 20px;">Username : ' . $row["User"] . '</p>
                <p class="u-text u-text-default u-text-3" style="font-size: 20px;">หัวข้อ : ' . $row["title"] . '</p>
                <p class="u-text u-text-default u-text-4" style="font-size: 20px;">วันที่สร้างโพส : ' . $row["time_post"] . '</p>
                </div>
        </div>';

                //echo '<div class="u-border-1 u-border-grey-75 u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-shape-rectangle u-list-item-1" style="margin-bottom: 10px" data-href="In_post.php? ">';
                //echo '<div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">';
                //echo '<p class="u-text u-text-default u-text-2" style="font-size: 20px;">Username : ' . $row["User"] . '</p>';
                //echo '<p class="u-text u-text-default u-text-3" style="font-size: 20px;">หัวข้อ : ' . $row["title"] . '</p>';
                //echo '<p class="u-text u-text-default u-text-4" style="font-size: 20px;">วันที่สร้างโพส : ' . $row["time_post"] . '</p>';
                //echo '</div>';
                //echo '</div>';
            }
        } else {
            echo "Empty post";
        }

        // ปิดการเชื่อมต่อ
        $conn->close();
        ?>
    </div>

</section>


<footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99">
    <div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
</section>

</body>
</html>