<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Mahlul Tech, Technology is a solution">
    <meta name="author" content="Muhamad Jalaludin">

    <title>Mahlul Tech | Technology is a solusion</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/ico" href="<?= site_url('assets/img/mahlul.png') ?>" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('admin/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= base_url('admin/plugins/node-waves/waves.css') ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= base_url('admin/plugins/animate-css/animate.css') ?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?= base_url('admin/plugins/morrisjs/morris.css') ?>" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?= base_url('admin/plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?= base_url('admin/plugins/bootstrap-select/css/bootstrap-select.css') ?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?= base_url('admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <!-- Light Gallery Plugin Css -->
    <link href="<?= base_url('admin/plugins/light-gallery/css/lightgallery.css') ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?= base_url('admin/css/style.css'); ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= base_url('admin/css/themes/all-themes.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('admin/plugins/tinymce/tinymce.js') ?>"></script>
    <script>
        //TinyMCE
        tinymce.init({
            selector: "#tinymce",
            theme: "modern",
            height: 300,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.suffix = ".min";
    </script>
</head>
<body class="theme-teal">