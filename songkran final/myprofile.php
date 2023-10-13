<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="สร้างโพส">
    <meta name="description" content="">
    <title>myprofile</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="myprofile.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.19.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="myprofile">
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
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-d431" data-image-width="1280" data-image-height="853">
      <h2 class="u-text u-text-default u-text-palette-3-light-2 u-text-1">โปรไฟล์</h2>
        <?php
        if (isset($_SESSION['username'])) {

            $username = $_SESSION['username']; //เรียกใช้username
            echo '<div class="custom-expanded u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
                
              <h2 class="u-align-left u-text u-text-default u-text-2" style="color: #72efe9" >Welcome!! '.$username.' </h2>
            </div>
          </div>
        </div>
      </div>';
        }
        ?>


      <h2 class="u-text u-text-default u-text-palette-3-light-2 u-text-3">โพสทั้งหมด</h2>
      <div class="custom-expanded u-list u-list-2">
        <div class="u-repeater u-repeater-2">
            <div class="custom-expanded u-layout-grid u-list u-list-1">

                <?php
                if (isset($_SESSION['username'])) {
                    // รับค่า post_id จาก URL
                    $user = $_SESSION['username'];
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
                    $joinpostwithuser = "SELECT * FROM post p INNER JOIN users u ON p.Auth_ID = u.UserID WHERE u.User='$user'  ORDER BY time_post DESC";
                    $result = $conn->query($joinpostwithuser);

                    if ($result->num_rows > 0) {
                        // แสดงข้อมูล
                        while ($row = $result->fetch_assoc()) {
                            // ในไฟล์ forum_all.php
                            echo '<div class="u-align-left u-border-2 u-border-grey-75 u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <p class="u-text u-text-default u-text-4"> ชื่อ : ' . $user . ' </p><span class="u-icon u-icon-1" data-href="edit_post.php?postID=' . $row["postID"] . '"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54 54" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d78d"></use></svg><svg class="u-svg-content" viewBox="0 0 54 54" x="0px" y="0px" id="svg-d78d" style="enable-background:new 0 0 54 54;"><path d="M51.22,21h-5.052c-0.812,0-1.481-0.447-1.792-1.197s-0.153-1.54,0.42-2.114l3.572-3.571
	c0.525-0.525,0.814-1.224,0.814-1.966c0-0.743-0.289-1.441-0.814-1.967l-4.553-4.553c-1.05-1.05-2.881-1.052-3.933,0l-3.571,3.571
	c-0.475,0.475-0.997,0.574-1.352,0.574c-0.5,0-0.997-0.196-1.364-0.539C33.324,8.984,33,8.534,33,7.832V2.78
	C33,1.247,31.753,0,30.22,0H23.78C22.247,0,21,1.247,21,2.78v5.052c0,1.218-0.997,1.945-1.961,1.945c-0.354,0-0.876-0.1-1.351-0.574
	l-3.571-3.571c-1.052-1.052-2.883-1.05-3.933,0l-4.553,4.553c-0.525,0.525-0.814,1.224-0.814,1.967c0,0.742,0.289,1.44,0.814,1.966
	l3.572,3.571c0.573,0.574,0.73,1.364,0.42,2.114S8.644,21,7.832,21H2.78C1.247,21,0,22.247,0,23.78v6.438C0,31.752,1.247,33,2.78,33
	h5.052c0.812,0,1.481,0.447,1.792,1.197s0.153,1.54-0.42,2.114l-3.572,3.571c-0.525,0.525-0.814,1.224-0.814,1.966
	c0,0.743,0.289,1.441,0.814,1.967l4.553,4.553c1.051,1.051,2.881,1.053,3.933,0l3.571-3.571c0.475-0.475,0.997-0.574,1.352-0.574
	c0.963,0,1.96,0.728,1.96,1.945v5.051C21,52.752,22.247,54,23.78,54h6.439c1.533,0,2.78-1.248,2.78-2.781v-5.051
	c0-1.218,0.997-1.945,1.96-1.945c0.354,0,0.877,0.1,1.352,0.574l3.571,3.571c1.052,1.052,2.883,1.05,3.933,0l4.553-4.553
	c0.525-0.525,0.814-1.224,0.814-1.967c0-0.742-0.289-1.44-0.814-1.966l-3.572-3.571c-0.573-0.574-0.73-1.364-0.42-2.114
	S45.356,33,46.168,33h5.052c1.533,0,2.78-1.248,2.78-2.781V23.78C54,22.247,52.753,21,51.22,21z M34,27c0,3.859-3.141,7-7,7
	s-7-3.141-7-7s3.141-7,7-7S34,23.141,34,27z"></path></svg></span>
              <p class="u-text u-text-default u-text-5"> หัวข้อ : ' . $row["title"] . ' </p>
              <p class="u-text u-text-default u-text-6"> โพสเมื่อ : ' . $row["time_post"] . ' </p>
              <p class="u-text u-text-default u-text-7"> แก้ไขเมื่อ :' . $row["time_edit"] . ' </p>
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
                    $conn->close();
                }else{
                    echo 'empty';
                }
                // ปิดการเชื่อมต่อ

                ?>



    </section>



  <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
      </div></footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>
  
</body></html>