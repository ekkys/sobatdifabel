<!DOCTYPE html>
<html lang="id">
    
    <head>
        <title>Layanan Sobat</title>

        <!-- Meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Stylesheets -->
       
            <link rel="stylesheet" href="<?php echo base_url().'theme/css/base.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/skeleton.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/flexslider.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/jquery.fancybox-1.3.4.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/validationEngine.jquery.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/smoothness/jquery-ui-1.8.22.custom.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/ui.spinner.css'?>" />
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>" />
        <link rel="stylesheet" href="<?php echo base_url().'theme/css/lamoon.css'?>" />
        <link href='http://fonts.googleapis.com/css?family=Lato|Lato:300|Vollkorn:400italic' rel='stylesheet' type='text/css'>
        
       
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo base_url().'assets/img/bg1.png'?>" />
         <?php 
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
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
                                <img src="<?php echo base_url().'assets/img/bgsd.png'?>" alt="" />
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
                <div id="content" class="contact">
                    <div id="intro">
                    </div>
                    
                    <div class="container section">
                        <div class="two-third column last">
                            <h3 class="nobg">Registrasi Disini Sobat </h3>

                            <form style="margin-left:100px;" action="<?php echo base_url().'kontak/kirim_pesan'?>" method="post">
                                <p>
                                    <label for="name" class="required label">Nama:</label>
                                    <input type="text" name="xnama" style="width:300px;" placeholder="Nama" required/>
                                </p>
								 <p>
                                    <label for="name" class="required label">Jenis Kelamin:</label>
                                    <input type="text" name="xjenkel" style="width:300px;" placeholder="Jenis Kelamin" required/>
                                </p>
                                <p>
                                    <label for="email" class="required label">Email:</label>
                                    <input placeholder="Email" type="email" name="xemail" style="width:300px;" required/>
                                </p>
                                <p>
                                    <label for="subject" class="required label">No Hp:</label>
                                    <input type="text" name="xkontak" style="width:300px;" placeholder="No Hp" required/>
                                </p>
                                <p>
                                    <label for="name" class="required label">Kota/Kabupaten:</label>
                                    <input type="text" name="xkota" style="width:300px;" placeholder="Kota/Kabupaten" required/>
                                </p>
								 <p>
                                    <label for="name" class="required label">Difabel/non difabel:</label>
                                    <input type="text" name="xdifabel" style="width:300px;" placeholder="Difabel/nondifabel" required/>
                                </p>
								 <p>
                                    <label for="name" class="required label">Ragam disabilitas:</label>
                                    <input type="text" name="xragam" style="width:300px;" placeholder="Ragam disabilitas" />
                                </p>
								 <p>
                                    <label for="name" class="required label">Alat Bantu:</label>
                                    <input type="text" name="xalat" style="width:300px;" placeholder="Alat bantu" required/>
                                </p>
								 <p>
                                    <label for="name" class="required label">Password:</label>
                                    <input type="text" name="xpassword" style="width:300px;" placeholder="password" required/>
                                </p>
                                <p>
                                    <label></label>
                                    <input class="medium gray button" type="submit" name="Submit" value="Submit" />
                                </p>
                            </form>

                            <?php echo $this->session->flashdata('msg');?>

                        </div>
                    </div>
                </div>

            
                 <!-- Copyright and Social Icons -->
                <div id="copyright">
                    <div class="container section end">
                        <ul id="social">
                            <li>
                                <a href="https://www.facebook.com/sobat.difabel.1"><img src="<?php echo base_url().'theme/images/social/facebook.png'?>" alt="" /></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SobatDifabel?s=09"><img src="<?php echo base_url().'theme/images/social/twitter.png'?>" alt="" /></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/p/CBN0rmuHXvi/?igshid=16mhw4k8o4j4sa"><img src="<?php echo base_url().'theme/images/social/instagram.png'?>" alt="" /></a>
                            </li>
                              <li>
                                <a href="#"><img src="<?php echo base_url().'theme/images/social/youtube.png'?>" alt="" /></a>
                            </li>
                        </ul>
                        <span id="text">Copyright &copy by Sobat Difabel <?php date_default_timezone_set('Asia/Jakarta'); echo date('Y');?></a>.</span>

                    </div>
                </div>
              

        <!-- JavaScript Files -->
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery-1.7.2.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.easing.1.3.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.flexslider-min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.hoverIntent.minified.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/superfish.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.cycle.lite.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.fancybox-1.3.4.pack.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.validationEngine.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery.validationEngine-en.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/jquery-ui-1.8.22.custom.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/ui.spinner.min.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'theme/scripts/lamoon.js'?>"></script>  
        <script data-account="7KDD9cRL1J" src="https://cdn.userway.org/widget.js"></script>

    </body>
</html>
