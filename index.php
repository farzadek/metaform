<!DOCTYPE html>
<?php 
  include "./php/common.php"; 
?>
<html lang="<?php echo $lang ?>">
  <head>
    <meta charset="utf-8" />
    <title>Metaform construction inc.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="entrepreneur général, Montréal, services de rénovation" name="keywords" />
    <meta content="un entrepreneur général de Montréal réputé pour ses services de rénovation sur mesure et de qualité supérieure" name="description" />
    <meta content="index, follow" name="robots" />
    <meta content="metaform construction" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="metaform construction" property="og:title" />
    <meta content="https://metaformconstruction.ca" property="og:url" />
    <meta content="metaform construction" property="og:title" />
    <meta content="un entrepreneur général de Montréal réputé pour ses services de rénovation sur mesure et de qualité supérieure" property="og:description" />
    <meta content="metaform construction" property="og:sitename" />
    <meta name="google-site-verification" content="cd7091HRtpP7AyQ1TnvRIzIGF2drdnx_Y8UyhAWsVIY" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=253769067"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2C2KVDGLX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-S2C2KVDGLX');
    </script>

    <link href="assets/favicon.ico" rel="icon" />
    <link rel="apple-touch-icon" href="assets/apple-touch-icon-iphone-60x60.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/apple-touch-icon-ipad-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/apple-touch-icon-iphone-retina-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon-ipad-retina-152x152.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Lato&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="scss/style.css" rel="stylesheet" />
  </head>

  <body>
    <?php include "./components/header.php" ?>
    <?php include "./components/section1.php" ?>
    <?php include "./components/section2.php" ?>
    <?php include "./components/section3.php" ?>
    <?php include "./components/section4.php" ?>
    <?php include "./components/section5.php" ?>

    <a href="#" class="btn main-button p-3 back-to-top">
      <i class="fa fa-angle-double-up"></i>
    </a>
    <?php include "./components/footer.php" ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>
