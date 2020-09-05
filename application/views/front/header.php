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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">
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
    <img src="<?php echo base_url() . 'theme/images/bg.JPG' ?>" class="bg" alt="" />
