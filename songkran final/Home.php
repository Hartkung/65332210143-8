<?php
session_start();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​HISTORYPLACE, พูดคุย-แลกเปลี่ยน">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
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
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-sticky u-sticky-6357 u-header" id="sec-b86e" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><a href="Home.php" class="u-image u-logo u-image-1" data-image-width="360" data-image-height="306" title="Home">
        <img src="images/png-transparent-songkran-festival-water-splashing-festival-thumbnail-removebg-preview.png" class="u-logo-image u-logo-image-1">
      </a><nav class="u-align-left u-font-size-14 u-menu u-menu-hamburger u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="XL">
        <div class="menu-collapse">
          <a class="u-button-style u-nav-link u-palette-4-base" href="#" style="padding: 8px 0px; font-size: calc(1em + 16px); background-image: none;">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-2 u-unstyled u-nav-1">
              <?php


              if (isset($_SESSION['username'])){
                  $username = $_SESSION['username']; //เรียกใช้username
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="myprofile.php" style="padding: 10px 20px;">Welcome! '."$username".'</a></li>';
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Home.php" style="padding: 10px 20px;">หน้าแรก</a></li>';
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="destroy.php"  style="padding: 10px 20px;">ออกจากระบบ</a></li>';

              }else{
                  //ถ้าไม่มีusernameให้แสดงกล่อง หน้าแรก สมัครสมาชิก และ ล็อกอิน
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="Home.php" style="padding: 10px 20px;">หน้าแรก</a></li>';
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="login.php" style="padding: 10px 20px;">เข้าสู่ระบบ</a></li>';
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="register.php" style="padding: 10px 20px;">สมัครสมาชิก</a></li>';
                  echo '<li class="u-nav-item"><a class="u-active-palette-1-base u-button-style u-hover-palette-1-light-1 u-nav-link u-text-active-white u-text-grey-90 u-text-hover-white" href="forum_all.php" style="padding: 10px 20px;">ฟอร์รัมพูดคุย</a></li>';
              }
              ?>
          </ul>
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
    <section class="u-clearfix u-image u-image-contain u-shading u-section-1" id="sec-db88" data-image-width="1000" data-image-height="500">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-3a71" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-3a71" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-3a71" class="u-grey-30" data-u-slide-to="1"></li>
            <li data-u-target="#carousel-3a71" class="u-grey-30" data-u-slide-to="2"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-shape-rectangle u-slide u-carousel-item-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-text u-text-default u-text-1">ยินดีต้อนรับสู่วันสงกรานต์!</h2>
                <p class="u-align-center u-text u-text-2">
                  <span style="font-size: 1.5rem;"> สงกรานต์คือเทศกาลประจำปีที่จัดขึ้นในระหว่างปีใหม่ไทยตามประเพณี ทั่วประเทศมีการเฉลิมฉลองกันอย่างมหัศจรรย์ เมื่อทั้งประเทศปิดกิจการเพื่อร่วมสนุกในการสู้รบน้ำอลังการ คุณจะเห็นภาพการเล่นสาดน้ำทั่วราชอาณาจักร มีดนตรี เต้นรำ&nbsp; และคนที่เปียกจากหัวถึงเท้า ปืนฉีดน้ำ ท่อยางฉีดน้ำ ถังน้ำ แทบทุกอย่างที่คุณจับได้สามารถใช้ในการกระหายน้ำใส่คน และสิ่งหนึ่งที่แน่นอนคือ: </span>
                  <span class="u-text-palette-4-light-1" style="font-size: 3rem;">คุณจะเปียกน้ำแน่นอน!</span>
                </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-shape-rectangle u-slide u-carousel-item-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-text u-text-custom-color-3 u-text-default u-text-3">สงกรานต์เริ่มเมื่อไหร่ ?</h2>
                <p class="u-align-center u-text u-text-4"> ในช่วงสงกรานต์ กรุงเทพฯ ต้องเผชิญกับการอพยพครั้งใหญ่ เนื่องจากผู้อยู่อาศัยอย่างน้อยครึ่งหนึ่งเดินทางกลับไปยังบ้านเกิดเพื่อพบปะครอบครัว ในสถานที่ของพวกเขาคือนักท่องเที่ยวที่บินเข้ามากรุงเทพโดยเฉพาะเพื่อเพลิดเพลินไปกับช่วงเวลาที่เต็มไปด้วย<span class="u-text-palette-4-light-1">สีสันและรื่นเริงที่สุดแห่งปีในช่วงสงกรานต์</span>
                  <br>
                  <span style="font-weight: 700;" class="u-text-palette-3-base">สงกรานต์ในไทยจะเริ่มเมื่อ วันเสาร์ 13 เมษายน - วันจันทร์&nbsp;15 เมษายน <span class="u-text-palette-2-light-2">ของทุกปี!</span>
                  </span>
                  <br>
                </p>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-3">
                <h2 class="u-text u-text-custom-color-3 u-text-default u-text-5">ทำไมต้องเล่นสงกรานต์ในไทย?</h2>
                <p class="u-align-center u-text u-text-6"> สงกรานต์เป็นเทศกาลที่มีชื่อเสียงที่สุดในประเทศไทย นับเป็นเหตุการณ์ที่สำคัญในปฏิทินพุทธศักราช งานเทศกาลน้ำนี้เป็น<span class="u-text-palette-1-light-2">สัญลักษณ์ของการเริ่มต้นของปีใหม่ไทย</span>ตามวัฒนธรรมดั้งเดิม คำว่า "<span class="u-text-palette-1-light-2">สงกรานต์</span>" มาจากศัพท์​สันสกฤตที่หมายถึง '<span class="u-text-palette-2-light-2">การผ่านไป</span>' หรือ '<span class="u-text-palette-2-light-2">การเข้าใกล้มา</span>'&nbsp;<br>
                </p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-3a71" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">+Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-3a71" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-90 u-section-2" id="sec-1605">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
  <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-image u-shading u-section-3" src="" id="carousel_6057" data-image-width="1980" data-image-height="1131">
      <div class="u-clearfix u-image u-image-circle u-shading u-sheet u-image-1" data-image-width="1229" data-image-height="1920">
          <h1 class="u-text u-text-default u-text-palette-4-light-2 u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">WELCOME SONG KRAN FESTIVAL</h1>
          <div class="u-border-3 u-border-palette-4-dark-1 u-line u-line-horizontal u-line-1"></div>
          <p class="u-large-text u-text u-text-custom-color-2 u-text-variant u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"> สงกรานต์: น้ำเป็นเครื่องมือ ความสนุกเป็นวิถีชีวิต</p>
          <div class="custom-expanded u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                  <div class="u-align-center u-container-style u-list-item u-palette-1-light-2 u-radius-22 u-repeater-item u-shape-round u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500" data-href="songkran_indept.php">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-align-center u-icon u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 52.966 52.966" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b2c1"></use></svg><svg class="u-svg-content" viewBox="0 0 52.966 52.966" x="0px" y="0px" id="svg-b2c1" style="enable-background:new 0 0 52.966 52.966;"><path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21
	c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279
	C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19
	S32.459,40,21.983,40z"></path></svg></span>
                          <h4 class="u-align-center u-custom-font u-text u-text-font u-text-3">ความเป็นมาสงกรานต์</h4>
                      </div>
                  </div>
                  <div class="u-align-center u-container-style u-list-item u-palette-1-light-2 u-radius-22 u-repeater-item u-shape-round u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1250" data-animation-delay="500" data-href="forum_all.php">
                      <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-center u-icon u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a44"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-8a44" style="enable-background:new 0 0 58 58;"><path d="M50.688,48.222C55.232,43.101,58,36.369,58,29c0-7.667-2.996-14.643-7.872-19.834c0,0,0-0.001,0-0.001
	c-0.004-0.006-0.01-0.008-0.013-0.013c-5.079-5.399-12.195-8.855-20.11-9.126l-0.001-0.001L29.439,0.01C29.293,0.005,29.147,0,29,0
	s-0.293,0.005-0.439,0.01l-0.563,0.015l-0.001,0.001c-7.915,0.271-15.031,3.727-20.11,9.126c-0.004,0.005-0.01,0.007-0.013,0.013
	c0,0,0,0.001-0.001,0.002C2.996,14.357,0,21.333,0,29c0,7.369,2.768,14.101,7.312,19.222c0.006,0.009,0.006,0.019,0.013,0.028
	c0.018,0.025,0.044,0.037,0.063,0.06c5.106,5.708,12.432,9.385,20.608,9.665l0.001,0.001l0.563,0.015C28.707,57.995,28.853,58,29,58
	s0.293-0.005,0.439-0.01l0.563-0.015l0.001-0.001c8.185-0.281,15.519-3.965,20.625-9.685c0.013-0.017,0.034-0.022,0.046-0.04
	C50.682,48.241,50.682,48.231,50.688,48.222z M2.025,30h12.003c0.113,4.239,0.941,8.358,2.415,12.217
	c-2.844,1.029-5.563,2.409-8.111,4.131C4.585,41.891,2.253,36.21,2.025,30z M8.878,11.023c2.488,1.618,5.137,2.914,7.9,3.882
	C15.086,19.012,14.15,23.44,14.028,28H2.025C2.264,21.493,4.812,15.568,8.878,11.023z M55.975,28H43.972
	c-0.122-4.56-1.058-8.988-2.75-13.095c2.763-0.968,5.412-2.264,7.9-3.882C53.188,15.568,55.736,21.493,55.975,28z M28,14.963
	c-2.891-0.082-5.729-0.513-8.471-1.283C21.556,9.522,24.418,5.769,28,2.644V14.963z M28,16.963V28H16.028
	c0.123-4.348,1.035-8.565,2.666-12.475C21.7,16.396,24.821,16.878,28,16.963z M30,16.963c3.179-0.085,6.3-0.566,9.307-1.438
	c1.631,3.91,2.543,8.127,2.666,12.475H30V16.963z M30,14.963V2.644c3.582,3.125,6.444,6.878,8.471,11.036
	C35.729,14.45,32.891,14.881,30,14.963z M40.409,13.072c-1.921-4.025-4.587-7.692-7.888-10.835
	c5.856,0.766,11.125,3.414,15.183,7.318C45.4,11.017,42.956,12.193,40.409,13.072z M17.591,13.072
	c-2.547-0.879-4.991-2.055-7.294-3.517c4.057-3.904,9.327-6.552,15.183-7.318C22.178,5.38,19.512,9.047,17.591,13.072z M16.028,30
	H28v10.038c-3.307,0.088-6.547,0.604-9.661,1.541C16.932,37.924,16.141,34.019,16.028,30z M28,42.038v13.318
	c-3.834-3.345-6.84-7.409-8.884-11.917C21.983,42.594,24.961,42.124,28,42.038z M30,55.356V42.038
	c3.039,0.085,6.017,0.556,8.884,1.4C36.84,47.947,33.834,52.011,30,55.356z M30,40.038V30h11.972
	c-0.113,4.019-0.904,7.924-2.312,11.58C36.547,40.642,33.307,40.126,30,40.038z M43.972,30h12.003
	c-0.228,6.21-2.559,11.891-6.307,16.348c-2.548-1.722-5.267-3.102-8.111-4.131C43.032,38.358,43.859,34.239,43.972,30z
	 M9.691,47.846c2.366-1.572,4.885-2.836,7.517-3.781c1.945,4.36,4.737,8.333,8.271,11.698C19.328,54.958,13.823,52.078,9.691,47.846
	z M32.521,55.763c3.534-3.364,6.326-7.337,8.271-11.698c2.632,0.945,5.15,2.209,7.517,3.781
	C44.177,52.078,38.672,54.958,32.521,55.763z"></path></svg></span>
                          <h4 class="u-align-center u-custom-font u-text u-text-font u-text-4">ฟอร์รั่มพูดคุย</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>



  <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
      </div></footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>

</body></html>