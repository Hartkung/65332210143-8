<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
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
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/historyplace.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="en">
<header class="u-clearfix u-header u-header" id="sec-b86e">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="HomeV1.php" class="u-image u-logo u-image-1" data-image-width="896" data-image-height="543"
           title="Home">
            <img src="images/historyplace.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <?php
                        session_start();
                        if (isset($_SESSION['username'])){
                            $username = $_SESSION['username']; //เรียกใช้username
                            echo '<li class="u-nav-item" style="color: #f3c4c7"> Welcome! '.$username.'</li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="destroy.php" style="padding: 10px 20px;">Log out</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="HomeV1.php" style="padding: 10px 20px;">หน้าแรก</a></li>';

                        }else{
                            //ถ้าไม่มีusernameให้แสดงกล่อง หน้าแรก สมัครสมาชิก และ ล็อกอิน
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="HomeV1.php" style="padding: 10px 20px;">หน้าแรก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="registerV1.php" style="padding: 10px 20px;">สมัครสมาชิก</a></li>';
                            echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="loginv1.php" style="padding: 10px 20px;">เข้าสู่ระบบ</a></li>';
                        }
                    ?>

                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="u-clearfix u-section-1" id="carousel_b797">
    <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1"
                     data-animation-name="customAnimationIn" data-animation-duration="1000">
                    <div class="u-container-layout u-container-layout-1">
                        <h1 class="u-text u-title u-text-1"> HISTORY<br>PLACE
                        </h1>
                        <div class="u-black u-shape u-shape-rectangle u-shape-1"></div>
                        <h4 class="u-text u-text-2">พื้นที่ประวัติศาสตร์</h4>
                    </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-30 u-image-2" data-image-width="1286"
                     data-image-height="966" data-animation-name="customAnimationIn" data-animation-duration="1000"
                     data-animation-direction="">
                    <div class="u-container-layout u-container-layout-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-858b">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-hover-feature u-image u-layout-cell u-size-30 u-image-1"
                         data-image-width="1280" data-image-height="769" data-href="blog/blog.html"
                         data-target="_blank">
                        <div class="u-container-layout u-container-layout-1"></div>
                    </div>
                    <div class="u-container-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                            <h2 class="u-align-center u-text u-text-default u-text-1">
                                <a class="u-active-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-none u-btn-1"
                                   href="Communication.html" target="_blank">พูดคุย-แลกเปลี่ยน</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<footer class="u-align-center u-clearfix u-footer u-footer u-grey-80" id="sec-ab99">
    <div class="u-block-b777-15 u-clearfix u-sheet u-sheet-1">
        <p class="u-block-b777-16 u-small-text u-text u-text-1 u-text-variant">Sample text. Click to select the Text
            Element.</p>
    </div>
</footer>
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

</body>
</html>