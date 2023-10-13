<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="แนะนำ">
    <meta name="description" content="">
    <title>forum_recomment</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="forum_recomment.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
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
    <meta property="og:title" content="forum_recomment">
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
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" id="sec-45c3" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-palette-3-light-2 u-text-1">โพสแนะนำ</h2>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-border-2 u-border-palette-2-light-1 u-bottom-right-radius-20 u-container-style u-list-item u-repeater-item u-shape-round u-top-left-radius-20">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-bottom-right-radius-20 u-container-style u-custom-item u-expanded-width u-group u-palette-5-base u-shape-round u-top-left-radius-20 u-group-1" data-href="In_post.html">
                  <div class="u-container-layout u-container-layout-2">
                    <h2 class="u-subtitle u-text u-text-default u-text-2">ชื่อ :</h2>
                    <p class="u-small-text u-text u-text-default u-text-variant u-text-3">เนื้อหาหัวข้อโพส</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-2-light-1 u-bottom-right-radius-20 u-container-style u-list-item u-repeater-item u-shape-round u-top-left-radius-20">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-bottom-right-radius-20 u-container-style u-custom-item u-expanded-width u-group u-palette-5-base u-shape-round u-top-left-radius-20 u-group-2">
                  <div class="u-container-layout u-container-layout-4">
                    <h2 class="u-subtitle u-text u-text-default u-text-4"> ชื่อ :&nbsp;</h2>
                    <p class="u-small-text u-text u-text-default u-text-variant u-text-5"> เนื้อหาหัวข้อโพส</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-2-light-1 u-bottom-right-radius-20 u-container-style u-list-item u-repeater-item u-shape-round u-top-left-radius-20">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div class="u-bottom-right-radius-20 u-container-style u-custom-item u-expanded-width u-group u-palette-5-base u-shape-round u-top-left-radius-20 u-group-3">
                  <div class="u-container-layout u-container-layout-6">
                    <h2 class="u-subtitle u-text u-text-default u-text-6"> ชื่อ :&nbsp;</h2>
                    <p class="u-small-text u-text u-text-default u-text-variant u-text-7"> เนื้อหาหัวข้อโพส</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-border-2 u-border-palette-2-light-1 u-bottom-right-radius-20 u-container-style u-list-item u-repeater-item u-shape-round u-top-left-radius-20">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div class="u-bottom-right-radius-20 u-container-style u-custom-item u-expanded-width u-group u-palette-5-base u-shape-round u-top-left-radius-20 u-group-4">
                  <div class="u-container-layout u-container-layout-8">
                    <h2 class="u-subtitle u-text u-text-default u-text-8"> ชื่อ :&nbsp;</h2>
                    <p class="u-small-text u-text u-text-default u-text-variant u-text-9"> เนื้อหาหัวข้อโพส</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-form u-form-1">
          <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;" source="email">
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-ef64" class="u-label">Name</label>
              <input type="text" placeholder="ค้นหา" id="name-ef64" name="search" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style">ค้นหา</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="4956c786-1260-da75-ad8b-3dfc6ad702d6">
          </form>
        </div>
        <a href="https://nicepage.com/k/youtube-website-templates" class="u-border-none u-btn u-button-style u-hover-palette-2-light-1 u-palette-2-light-2 u-btn-2"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 57.949 57.949" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M29.975,27.985h11.972c-0.123-4.348-1.033-8.567-2.664-12.477c-3.01,0.874-6.131,1.355-9.308,1.44V27.985z"></path><path d="M40.384,13.057c2.928-1.01,5.731-2.392,8.328-4.169l0.653-0.5C44.588,3.658,38.18,0.58,31.071,0.069L30.553,0.49
		C34.767,3.979,38.099,8.268,40.384,13.057z"></path><path d="M29.975,2.628v12.32c2.891-0.082,5.731-0.513,8.473-1.283C36.421,9.505,33.557,5.753,29.975,2.628z"></path><path d="M41.531,42.202c3.13,1.132,6.12,2.668,8.885,4.639l0.868,0.65c3.976-4.785,6.439-10.866,6.665-17.505H43.947
		C43.834,34.224,43.006,38.343,41.531,42.202z"></path><path d="M9.237,8.888c2.597,1.777,5.401,3.158,8.328,4.169c2.285-4.788,5.617-9.077,9.832-12.567l-0.518-0.421
		c-7.125,0.512-13.547,3.603-18.328,8.35L9.237,8.888z"></path><path d="M27.975,2.628c-3.583,3.125-6.446,6.878-8.473,11.036c2.742,0.77,5.582,1.202,8.473,1.283V2.628z"></path><path d="M14.003,29.985H0c0.227,6.639,2.689,12.719,6.665,17.505l0.85-0.635c2.775-1.977,5.771-3.518,8.906-4.652
		C14.943,38.341,14.116,34.222,14.003,29.985z"></path><path d="M16.752,14.89c-3.037-1.064-5.945-2.505-8.644-4.351L7.17,9.897C2.901,14.768,0.236,21.072,0,27.985h14.003
		C14.124,23.425,15.061,18.997,16.752,14.89z"></path><path d="M16.003,27.985h11.972V16.948c-3.179-0.085-6.301-0.566-9.309-1.438C17.035,19.419,16.125,23.637,16.003,27.985z"></path><path d="M27.297,57.391c-4.419-3.695-7.841-8.259-10.111-13.341c-2.992,1.074-5.851,2.538-8.492,4.42l-0.689,0.515
		c4.774,5.003,11.31,8.304,18.605,8.896L27.297,57.391z"></path><path d="M27.975,40.023V29.985H16.003c0.113,4.019,0.905,7.924,2.313,11.58C21.429,40.627,24.669,40.111,27.975,40.023z"></path><path d="M49.236,48.456c-2.631-1.875-5.482-3.335-8.469-4.406c-2.272,5.094-5.698,9.662-10.113,13.344l0.685,0.487
		c7.295-0.592,13.832-3.892,18.606-8.895L49.236,48.456z"></path><path d="M49.885,10.507c-2.72,1.862-5.643,3.311-8.689,4.38c1.692,4.108,2.629,8.537,2.751,13.098h14.003
		c-0.237-6.935-2.917-13.256-7.209-18.133L49.885,10.507z"></path><path d="M27.975,55.342V42.023c-3.039,0.085-6.016,0.556-8.882,1.4C21.136,47.932,24.141,51.998,27.975,55.342z"></path><path d="M41.947,29.985H29.975v10.038c3.307,0.088,6.548,0.604,9.662,1.542C41.041,37.91,41.833,34.005,41.947,29.985z"></path><path d="M38.86,43.423c-2.866-0.844-5.845-1.314-8.885-1.4v13.323C33.806,52.013,36.814,47.943,38.86,43.423z"></path>
</g></svg></span>&nbsp;ดูโพสทั้งหมด
        </a>
        <a href="https://nicepage.com/k/youtube-website-templates" class="u-border-none u-btn u-button-style u-hover-palette-2-light-1 u-palette-2-light-2 u-btn-3"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 52 52" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M38.5,28H28v11c0,1.104-0.896,2-2,2
	s-2-0.896-2-2V28H13.5c-1.104,0-2-0.896-2-2s0.896-2,2-2H24V14c0-1.104,0.896-2,2-2s2,0.896,2,2v10h10.5c1.104,0,2,0.896,2,2
	S39.604,28,38.5,28z"></path></svg></span>&nbsp;สร้างโพส
        </a>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-46c6">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>



  <footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99"><div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
      </div></footer>
  <section class="u-backlink u-clearfix u-grey-80">
  </section>
  
</body></html>