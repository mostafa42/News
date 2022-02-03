@include('sharedHeader')
<!-- Loader -->
{{-- <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div> --}}

<div class="modal mymodel fade" id="readMore2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('trans.articleTitle') }}</h5>
                <button type="button" class="close" onclick="closeModel()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="readMoreBodyDescription2">

            </div>
        </div>
    </div>
</div>

<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <h1><a href="index.html">{{ __('trans.siteName') }}</a></h1>
                <br>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li><a href="/fr"> <img id="langs" src="<?php echo asset('images/france.png') ?>" /> </a></li>
                    <li><a href="/en"> <img id="langs" src="<?php echo asset('images/english.png') ?>" /> </a></li>
                    <li><a href="/all_news">{{ __('trans.allNews') }}</a></li>
                    <li><a href="/">{{ __('trans.homeDir') }}</a></li>
                </ul>
            </nav>
        </header>
    </div>

</div>

<div id="jewellery" class="Best">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>{{ __('trans.newsSite') }}</h2>
                    <p> {{ __('trans.YouWillFindExclusiveNews') }} </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="best_main">
                    <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="best_text">
                                <h1>{{ __('trans.sportWord') }}</h1>
                                <p> {{ __('trans.aboutSport') }}</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="best_img">
                                <figure><img src="images/beimg.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best_main">
                    <div class="row d_flex">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="best_img croos_rt">
                                <figure><img src="images/beimg2.png"></figure>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="best_text flot_left">
                                <h1>{{ __('trans.politicsWord') }}</h1>
                                <p> {{ __('trans.aboutPolitics') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="best_main pa_bot">
                    <div class="row d_flex">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="best_text">
                                <h1>{{ __('trans.artWord') }}</h1>
                                <p>{{ __('trans.aboutArt') }} </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="best_img d_none">
                                <figure><img src="images/beimg3.png"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- clients -->
<div id="clients" class="clients ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>{{ __('trans.myNameConcatenateWithEng') }}</h2>
                    <p> {{ __('trans.introAboutSection') }} </p>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <div class="col-md-10 offset-col-md-1">
                <div id="myCarousel" class="carousel slide clients_slider" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row d_flex">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                            <div class="img_box">
                                                <i><img src="<?php echo asset('images/icon_1.png')?>" alt="#" /></i>
                                                <figure><img src="<?php echo asset('images/clients.png')?>" alt="#" /></figure>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                            <div class="joe">
                                                <h3>{{ __('trans.myName') }}</h3>
                                                <p>{{ __('trans.describeMe') }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end clients -->

<!-- Footer -->
<div class="footer">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="call_now2">
                <h3> {{ __('trans.technologies') }} </h3>
                <span> {{ __('trans.loadingPage') }} </span>
             </div>
          </div>
          <div class="col-md-6">
             <div class="call_now">
                <h3>{{ __('trans.callNowTitle') }}</h3>
                <span>{{ __('trans.myContact') }}</span>
             </div>
          </div>
       </div>
    </div>
 </div>
<!-- end footer -->

@include('sharedFooter')
