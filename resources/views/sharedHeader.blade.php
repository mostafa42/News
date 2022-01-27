<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>News</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/jpg" href="<?php echo asset('images/logo.jpg')?>"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------------------------
        Starting Template files head calling
    ------------------------------>
    
    <link rel="stylesheet" href="<?php echo asset('layout/styles/styles.css')?>" />

    <link href="<?php echo asset('layout/styles/layout.css')?>" rel="stylesheet" type="text/css" media="all">
    <!------------------------------
        Ending Template files head calling
    ------------------------------>

</head>

<body id="top">
