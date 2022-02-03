<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ __('trans.siteName') }}</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/jpg" href="<?php echo asset('images/logo.jpg')?>" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('layout/styles/styles2.css')?>" />

    <link href="<?php echo asset('layout/styles/layout.css')?>" rel="stylesheet" type="text/css" media="all">
    <!------------------------------
        Starting Template files head calling
    ------------------------------>

    <link rel="stylesheet" href="<?php echo asset('layout/styles/style.css')?>">
    <link rel="stylesheet" href="<?php echo asset('layout/styles/responsive.css')?>">
    <link rel="stylesheet" href="<?php echo asset('layout/styles/jquery.mCustomScrollbar.min.css')?>">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"  media="screen">

    <!------------------------------
        Ending Template files head calling
    ------------------------------>

</head>

<body id="top" class="main-layout">

    <!-- read more Modal -->
    <div class="modal mymodel fade" id="readMore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('trans.articleTitle') }}</h5>
                    <button type="button" class="close" onclick="closeModel()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="readMoreBodyDescription">

                </div>
            </div>
        </div>
    </div>
    <script>
        function closeModel(){
          $('#readMore').modal('hide');
      }
    </script>
