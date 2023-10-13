<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="สมัครสมาชิก">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.18.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-sticky u-sticky-6357 u-header" id="sec-b86e" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="360" data-image-height="306">

      <?php
if (isset($_SESSION['message'])) {
    if ($_SESSION['message'] == "Error") {
        ?>
      <script>
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'กรอกชื่อผู้ใช้งานหรือรหัสผ่านให้ถูกต้อง!'
          });
      </script>
      <?php
        unset($_SESSION['message']);
    }
}
?>
        <img src="images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png" class="u-logo-image u-logo-image-1">
      </a><nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
        <div class="menu-collapse">
          <a class="u-button-style u-nav-link u-palette-4-base" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px); background-image: none;">
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
    <section class="u-align-center u-clearfix u-section-1" id="sec-568f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded u-clearfix u-custom-html u-custom-html-1">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <style> body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
} </style>
          <form action="./qurry.php"method="post">
              <div class="container">
                  <h1>เข้าสู่ระบบ</h1>
                  <p>ระบุข้อมูลด้านล่างเพื่อเข้าสู่ระบบ</p>
                  <hr>
                  <label for="username"><b>username</b>
                  </label>
                  <input type="text" placeholder="Enter Username" name="username" id="username" required="">
                  <label for="password"><b>Password</b>
                  </label>
                  <input type="password" placeholder="Enter Password" name="password" id="password" required="">
                  <hr>
                  <p>ยังไม่มี Account หรือไม่? <a href="register.php">สมัครสมาชิก</a>.
                  </p>
                  <button type="submit" class="registerbtn">เข้าสู่ระบบ</button>
              </div>
          </form>
        </div>
      </div>
    </section>



  <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
      </div></footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>
  
</body></html>