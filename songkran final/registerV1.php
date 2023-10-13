<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="สมัครสมาชิก">
    <meta name="description" content="">
    <title>register</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="register.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <meta name="generator" content="Nicepage 5.18.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/historyplace.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="register">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-b86e"><div class="u-clearfix u-sheet u-sheet-1">
          <?php
          session_start();
          if (isset($_SESSION['username']) && $_SESSION['username'] == "have") {
              echo '<script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "มีชื่อผู้ใช้นี้แล้ว!"
            });
          </script>';
              unset($_SESSION['haveuser']);
          }
          ?>


          <a href="HomeV1.php" class="u-image u-logo u-image-1" data-image-width="896" data-image-height="543" title="Home">
          <img src="images/historyplace.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="HomeV1.php" style="padding: 10px 20px;">หน้าแรก</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="register.php" style="padding: 10px 20px;">สมัครสมาชิก</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="loginv1.php" style="padding: 10px 20px;">เข้าสู่ระบบ</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="HomeV1.php">หน้าแรก</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="registerV1.php">สมัครสมาชิก</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="loginv1.php">เข้าสู่ระบบ</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-568f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-custom-html u-expanded-width u-custom-html-1">
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
          <form action="./register_data.php" method="post">
            <div class="container">
              <h1>สมัครสมาชิก</h1>
              <p>ระบุข้อมูลด้านล่างเพื่อสมัครสมาชิก</p>
              <hr>
              <label for="username"><b>Username</b>
              </label>
              <input type="text" placeholder="Enter username" name="username" id="username" required="">
              <label for="password"><b>Password</b>
              </label>
              <input type="password" placeholder="Enter Password" name="password" id="password" required="">
              <label for="password-repeat"><b>Repeat Password</b>
              </label>
              <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required="">
              <hr>
              <button type="submit" class="registerbtn">สมัครสมาชิก</button>
            </div>
            <div class="container signin">
              <p>มี Account อยู่แล้วหรือไม่? <a href="loginv1.php">เข้าสู่ระบบ</a>.
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
        <p class="u-block-b777-16 u-small-text u-text u-text-1 u-text-variant">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>