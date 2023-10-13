<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>songkran_indept</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="songkran_indept.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.18.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="songkran_indept">
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
    <section class="u-clearfix u-section-1" id="carousel_876f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="720" data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
        <p class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">
          <span style="font-weight: 700;">ประวัติความเป็นมา</span>
          <span class="u-text-palette-4-light-1">วันสงกรานต์</span> หรือ <span class="u-text-palette-4-light-1">วันมหาสงกรานต์</span> เป็นวันที่ได้รับอิทธิพลมาจากเทศกาลโฮลีของประเทศอินเดีย แต่วันสงกรานต์ของไทยเปลี่ยนจากการสาดสี เป็นการสาดน้ำใส่กัน เพื่อให้สอดคล้องกับสภาพอากาศที่ร้อนจัดในช่วงเดือนเมษายน และในอีกแง่หนึ่งยังมีความเชื่อว่าเป็นการปัดเป่าสิ่งไม่ดีออกไป ทำให้นิยมเล่นสาดน้ำ และประแป้งกันในช่วงเทศกาลสงกรานต์ โดยจะไม่ถือโทษโกรธกัน
        </p>
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="450" data-image-height="327" data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
        <p class="u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1000">คำว่า “<span class="u-text-palette-4-light-1">สงกรานต์</span>” มาจากภาษาสันสกฤต ที่มีความหมายว่า “<span class="u-text-palette-2-light-1">การเคลื่อนย้าย</span>” โดยเชื่อว่าในวันสงกรานต์ เป็นช่วงเวลาการเคลื่อนย้ายของจักรราศี อีกนัยหนึ่งก็คือการ<span class="u-text-palette-2-light-1">เคลื่อนสู่ปีใหม่</span> ทำให้คนไทยยึดถือวันสงกรานต์เป็น “<span class="u-text-palette-2-light-1">วันขึ้นปีใหม่ไทย</span>” มาตั้งแต่สมัยโบราณ จนกระทั่ง พ.ศ. 2483 ก่อนจะปรับเปลี่ยนให้เป็นไปตามแบบแผนสากลนิยม ซึ่งก็คือวันที่&nbsp;<span class="u-text-palette-2-light-1">
            <br>1 มกราคม&nbsp;
          </span>ของทุกปี
        </p>
        <div class="u-image u-image-circle u-image-3" alt="" data-image-width="800" data-image-height="534" data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
        <p class="u-text u-text-3" data-animation-name="customAnimationIn" data-animation-duration="1000">
          <span style="font-weight: 700;">กิจกรรมทั่วไปในช่วงเทศกาลวันสงกรานต์</span> คนไทยนิยมเล่นน้ำ ประแป้ง รดน้ำดำหัวผู้ใหญ่ ทำบุญตักบาตร สรงน้ำพระวันสงกรานต์ ใครที่อยู่ห่างไกลครอบครัว ก็จะเดินทางกลับภูมิลำเนาเพื่อฉลองวันปีใหม่ไทย รวมถึงกล่าวคำอวยพร “สุขสันต์วันสงกรานต์” และ “สวัสดีวันสงกรานต์” ให้แก่กัน
        </p>
        <div class="u-image u-image-circle u-image-4" alt="" data-image-width="2000" data-image-height="1333" data-animation-name="customAnimationIn" data-animation-duration="1000"></div>
        <p class="u-text u-text-4" data-animation-name="customAnimationIn" data-animation-duration="1000">ทั้งนี้ การละเล่นสงกรานต์ไม่ได้มีแค่ในประเทศไทยเท่านั้น แต่ยังมีในประเทศเพื่อนบ้าน เช่น พม่า กัมพูชา ลาว รวมถึงบางพื้นที่ของเวียดนาม จีน ศรีลังกา และอินเดีย</p>
      </div>
    </section>



  <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
      </div></footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>
  
</body></html>