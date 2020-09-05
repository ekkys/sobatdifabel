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

            <!-- STRUKTUR -->
            <section class="section-room bg-white">
                <div class="container">

                    <div class="room-wrap-3">
                        <div class="row">
                            <div class="col-10  justify-content-center">

                               <center> <h1><span>SDM Sobat dibalik Layar</span></h1></center>
							   <h1>
                                   

                                        <!-- ITEM -->

                                        <?php foreach ($data->result() as $row) :

                                            if (($row->structure_id) % 2 == 0) {
                                                $rata = 'room_item-10 thumbs-center';
                                            } else {
                                                $rata = 'room_item-10';
                                            }
                                        ?>
                                            <div class="<?php echo $rata; ?>">
                                               <center> <figure>
                                           <img src="<?php echo base_url() . 'assets/img/' . $row->structure_img; ?>" alt="gambar" height="400" width="200">  
                                        </figure>
                                                    <div class="text" style="bold">
                                                    <p href="#"><?php echo $row->structure_name; ?></>
                                                    <p href="#"><?php echo $row->structure_jabatan; ?></p>
                                                    <p href="#"><?php echo $row->structure_bidang; ?></p>
                                                    <p href="#"><?php echo $row->structure_disability; ?></p>
                                                    <p href="#"><?php echo $row->structure_asal; ?></p>
                                                   
                                                </div>
                                        </center>
                                            <?php endforeach; ?>
                                            <!-- END / ITEM -->


                                            </div>
                            </div>
                        </div>
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

  

</body>

</html>