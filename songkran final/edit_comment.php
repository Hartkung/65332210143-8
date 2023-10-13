<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="สร้างโพส">
    <meta name="description" content="">
    <title>Create_post</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="Create_post.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="generator" content="Nicepage 5.18.6, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Create_post">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-sticky u-sticky-6357 u-header" id="sec-b86e" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="360" data-image-height="306" title="Home">
        <img src="images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png" class="u-logo-image u-logo-image-1">
    </a><nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
        <div class="menu-collapse">
            <a class="u-button-style u-nav-link u-palette-4-base" href="#" style="padding: 8px 0px; font-size: calc(1em + 16px); background-image: none;">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
                    </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">

                        <?php
                        if (isset($_SESSION['username'])){

                            $username = $_SESSION['username']; //เรียกใช้username
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" style="color: #3be8e0" href="myprofile.php">Welcome! '.$username.'</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">หน้าแรก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="forum_all.php">ฟอร์รั่มพูดคุย</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="destroy.php" >ออกจากระบบ</a></li>';
                        }else{
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
    </nav><img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/images-removebg-preview1.png" alt="" data-image-width="190" data-image-height="103"><img class="custom-expanded u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="images/images-removebg-preview2.png" alt="" data-image-width="187" data-image-height="110"></header>
<section class="u-clearfix u-image u-section-1" id="sec-d431" data-image-width="550" data-image-height="550">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-title u-text-1">แก้ไขโพส</h1>
        <div class="custom-expanded u-form u-form-1">

            <?php
            if (isset($_SESSION['username'])) {
                // รับค่า post_id จาก URL
                $user = $_SESSION['username'];
                $commentID = $_GET["commentID"];
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
                $joinpostwithuser = "SELECT * FROM comment WHERE commentID='$commentID'";
                $result = $conn->query($joinpostwithuser);

                if ($result->num_rows > 0) {
                    // แสดงข้อมูล
                    while ($row = $result->fetch_assoc()) {
                        echo '<form action="./edit_comment_data.php" method="POST">
                <div class="u-form-group u-form-name">'.$user.'</div> 
                <div class="u-form-group u-form-message u-label-top">
                    <label for="message-3b9a" class="u-label">เนื้อหา</label>
                    <textarea placeholder="เนื้อหา" rows="4" cols="50" id="message-3b9a" name="comment"  class="u-input u-input-rectangle" required="">' . $row["comment"] . '</textarea>

                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                    <input type="hidden" name="commentID" value= '.$commentID.' >
                    <input type="hidden" name="postID" value='.$row['postID'].'>
                    <input type="submit" value="edit" class="btn btn-primary" >
                    
                    <a href="./delete_comment_data.php?commentID='.$commentID.'&postID='.$row['postID'].'" class="btn btn-danger" >delete</a>

                </div>
            </form>';


                    }


                }
            }


            ?>




        </div>
    </div>
</section>

<footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
    </div></footer>
<section class="u-backlink u-clearfix u-grey-80">
</section>

</body></html>