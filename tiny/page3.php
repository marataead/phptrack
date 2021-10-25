<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
 
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LdMLPEcAAAAABTF4TY4_XHc0hGLG_bmFBgl9Byw';
    $recaptcha_response = $_POST['recaptcha_response'];

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
 
    if ($recaptcha->score >= 0.5) {
// Query params are: utm_term={keyword}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype} 
require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://treker.site/api.php?', 'PVd6FZF5yzZBmhtk');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/unnamed-10-128x128.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>yoga</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/web/assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="header2 cid-sMLHW4i7v7 mbr-fullscreen mbr-parallax-background" id="header2-5">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Новый курс йоги</strong></h1>
                <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2">получи бесплатный доступ к курсу йоги и верните себе здоровье</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form2 cid-sMLI9TPKvq" id="form2-6">

    

    
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="GfugP7y37nL3VRlngxg3M1pN5IRu62Q6Yb/pyCt/UirGamTZ4fNEM8aWflnWhcjqpjJDYFr7ZG8ciziZGlJDeWe4fvAGSu9q9dvBkB0ZKs1zys0MsyO0dAazJGQkGBg1">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Получи бесплатный доступ</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-5 display-7">Fill the form below to get started.</p>
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" id="name-form2-6">
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" id="email-form2-6">
                        </div>
                        <div class="mbr-section-btn col-md-auto col"><button type="submit" class="btn btn-warning display-4">Получить</button></div>
                    </div>
                <span class="gdpr-block">
<label>
<span class="textGDPR display-7" style="color: #a7a7a7"><input type="checkbox" name="gdpr" id="gdpr-form2-6" required="">By continuing you agree to our <a style="color: #149dcc; text-decoration: none;" href="terms.html">Terms of Service</a> and <a style="color: #149dcc; text-decoration: none;" href="policy.html">Privacy Policy</a>.</span>
</label>
</span></form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer7 cid-sMAHkM2hCx" once="footers" id="footer7-4">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">ООО «Бьюти ПРО»<br>129281 ГОРОД МОСКВА УЛИЦА ИЗУМРУДНАЯ ДОМ 13 КОРПУС 2 ЭТАЖ 1 ПОМ 1 КОМ 2 ОФ 4<br>ОГРН: 1197746307219 КПП: 771701001 ИНН: 9717082050<br>Политика конфиденциальности  Пользовательское соглашение</p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/j" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/t" style="color:#aaa;">Designed</a> with Mobirise web theme</p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/parallax/jarallax.js"></script>  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-core.js"></script>  <script src="assets/web/assets/cookies-alert-plugin/cookies-alert-script.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
<input name="cookieData" type="hidden" data-cookie-customDialogSelector='null' data-cookie-colorText='#424a4d' data-cookie-colorBg='rgba(234, 239, 241, 0.99)' data-cookie-textButton='Понятно' data-cookie-colorButton='' data-cookie-colorLink='#424a4d' data-cookie-underlineLink='true' data-cookie-text="Мы не используем ваших данных <a href='privacy.html'>cookie policy</a>.">
  </body>
</html>
       <?php
    } else {
       echo 'Не прошли проверку на бота';
    }
 
}
 

