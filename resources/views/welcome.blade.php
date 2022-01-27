@include('sharedHeader')

    <div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="index.html">News</a></h1>
                    <br>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                    </ul>
                </nav>
            </header>
        </div>
        <div id="pageintro" class="hoc clear">
            <div class="flexslider basicslider">
                <ul class="slides">
                    <li>
                        <article>
                            <h3 class="heading">Sports News</h3>
                            <p> All about sports news here </p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <h3 class="heading">Politics News</h3>
                            <p> All about politics news here </p>
                        </article>
                    </li>
                    <li>
                        <article>
                            <h3 class="heading">Arts News</h3>
                            <p> All about arts news here </p>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->

            <!-- ################################################################################################ -->
            <hr class="">
            <!-- ################################################################################################ -->
            <ul class="nospace group overview" id="allArticles2">

            </ul>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
@include('sharedFooter')
