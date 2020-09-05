<!DOCTYPE html>
<html lang="id">

<head>
    <title>Sobat Difabel</title>

    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets -->

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/base.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/skeleton.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/jquery.fancybox-1.3.4.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/validationEngine.jquery.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/smoothness/jquery-ui-1.8.22.custom.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/ui.spinner.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/lamoon.css' ?>" />
    <link href='http://fonts.googleapis.com/css?family=Lato|Lato:300|Vollkorn:400italic' rel='stylesheet' type='text/css'>


    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/images/icon.png' ?>" />
    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>
</head>

<body>

    <!-- Background Image -->
    <img src="<?php echo base_url() . 'assets/images/bg1.jpg' ?>" class="bg" alt="" />

    <!-- Root Container -->
    <div id="container" class="container">
        <div id="wrapper" class="wrapper">

            <!-- Banner -->
            <div id="banner">
                <div id="logo">
                </div>
                <div id="banner-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?php echo base_url() . 'assets/img/bgsd.png' ?>" alt="" />
                        </li>

                    </ul>
                </div>
            </div>



            <!-- Main Menu -->
            <div id="menu" class="home">
                <ul id="root-menu" class="sf-menu">
                    <?php
                    $this->load->view('front/menu');
                    ?>
                </ul>
            </div>

            <!-- Content -->
            <div id="content">
                <div id="intro">
                    <h1><span>PROFIL SOBAT DIFABEL</span></h1>
                    <p style="text-align: center;">
                        <p>SOBAT DIFABEL (Semua Orang BAnTu Difabel/Different Ability People) merupakan platform penyedia berbagai layanan yang menghubungkan difabel dan non difabel. Tujuan hadirnya Sobat Difabel yakni mewujudkan lingkungan yang inklusi melalui program-program yang mempermudah difabel untuk mengakses aktivitas publik. Dalam merealisasikan tujuan tersebut sobat difabel mengintegrasikan berbagai elemen masyarakat melalui edukasi dan pengembangan teknologi sehingga menghasilkan inovasi teknologi pelayanan bagi difabel mupun non-difabel. </p>
                    </p>
                </div>
                <div id="intro">
                    <h1><span>VISI</span></h1>
                    <p style="text-align: center;">
                        <p>Platform teknologi bagi individu, komunitas, organisasi, perusahaan, maupun instansi negeri/swasta untuk membantu difabel mengakses aktivitas publik demi mewujudkan lingkungan yang ramah difabel menuju inklusi yang berkelanjutan</p>
                    </p>
                </div>
                <div id="intro">
                    <h1><span>MISI</span></h1>
                    <p style="text-align: center;">
                        <p>1. Menciptakan dan menyinambungkan sebuah lingkungan inklusif bagi difabel</p>
                        <p>2. Menyediakan layanan fisik maupun non fisik bagi difabel</p>
                        <p>3. Memastikan aksesibilitas yang sesuai dengan kebutuhan</p>
                        <p>4. Menyebarluaskan pemahaman hak asasi manusia bagi difabel dalam masyarakat</p>
                    </p>
                </div>
                <div id="intro">
                    <h1><span>MOTO</span></h1>
                    <p style="text-align: center;">
                        <p> Solutif Optimis Berani Aksesibel Teruji</p>
                    </p>
                </div>





                <!-- Copyright and Social Icons -->
                <div id="copyright">
                    <div class="container section end">
                        <ul id="social">
                            <li>
                                <a href="https://www.facebook.com/sobat.difabel.1"><img src="<?php echo base_url() . 'theme/images/social/facebook.png' ?>" alt="" /></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SobatDifabel?s=09"><img src="<?php echo base_url() . 'theme/images/social/twitter.png' ?>" alt="" /></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/p/CBN0rmuHXvi/?igshid=16mhw4k8o4j4sa"><img src="<?php echo base_url() . 'theme/images/social/instagram.png' ?>" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url() . 'theme/images/social/youtube.png' ?>" alt="" /></a>
                            </li>
                        </ul>
                        <span id="text">Copyright &copy by Sobat Difabel <?php date_default_timezone_set('Asia/Jakarta');
                                                                            echo date('Y'); ?></a>.</span>

                    </div>
                </div>




                <!-- JavaScript Files -->
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery-1.7.2.min.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.easing.1.3.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.flexslider-min.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.hoverIntent.minified.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/superfish.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.cycle.lite.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/jquery.fancybox-1.3.4.pack.js' ?>"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'theme/scripts/lamoon.js' ?>"></script>
                <script data-account="7KDD9cRL1J" src="https://cdn.userway.org/widget.js"></script>

            </div>
        </div>

</body>

</html>