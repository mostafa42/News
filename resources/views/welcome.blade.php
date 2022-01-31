@include('sharedHeader')

    <div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="index.html">{{ __('trans.siteName') }}</a></h1>
                    <br>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="/fr"> <img id="langs" src="<?php echo asset('images/france.png') ?>"/> </a></li>
                        <li><a href="/"> <img id="langs" src="<?php echo asset('images/english.png') ?>"/> </a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div id="pageintro" class="hoc clear">
            <div class="flexslider basicslider">
                <ul class="slides">
                    <li>
                        <article>
                            <h3 class="heading">{{ __('trans.category1') }}</h3>
                            <p> {{ __('trans.descriptionOfCategory1') }} </p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <h3 class="heading">{{ __('trans.category2') }}</h3>
                            <p> {{ __('trans.descriptionOfCategory2') }} </p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <h3 class="heading">{{ __('trans.category3') }}</h3>
                            <p> {{ __('trans.descriptionOfCategory3') }} </p>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear">
          <!-- main body -->
          <hr class="btmspace-80">
          <!-- ################################################################################################ -->
          <ul class="nospace group overview" id="allData">

          </ul>
          <!-- ################################################################################################ -->
          <!-- / main body -->
          <div class="clear"></div>
        </main>
      </div>
      <!-- read more Modal -->



@include('sharedFooter')
