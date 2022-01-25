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
                    <li><button data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button></li>
                    <li><a href="/logout">Logout</a></li>



                </ul>
            </nav>
        </header>
    </div>
</div>

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <!-- ################################################################################################ -->
        <hr class="btmspace-80">
        <!-- ################################################################################################ -->
        <ul class="nospace group overview">
            <li class="one_third">
                <article><a href="#"><img src="images/demo/320x240.png" alt=""></a>
                    <h6 class="heading">title 1</h6>
                    <ul class="nospace meta">
                        <li><i class="fa fa-user"></i>Admin</li>
                        <li><i class="fa fa-tag"></i>12/7/2000</li>
                    </ul>
                    <p>This is description</p>
                    <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><img src="images/demo/320x240.png" alt=""></a>
                    <h6 class="heading">title 1</h6>
                    <ul class="nospace meta">
                        <li><i class="fa fa-user"></i>Admin</li>
                        <li><i class="fa fa-tag"></i>12/7/2000</li>
                    </ul>
                    <p>This is description</p>
                    <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                </article>
            </li>
            <li class="one_third">
                <article><a href="#"><img src="images/demo/320x240.png" alt=""></a>
                    <h6 class="heading">title 1</h6>
                    <ul class="nospace meta">
                        <li><i class="fa fa-user"></i>Admin</li>
                        <li><i class="fa fa-tag"></i>12/7/2000</li>
                    </ul>
                    <p>This is description</p>
                    <footer class="nospace"><a class="btn" href="#">Full Story &raquo;</a></footer>
                </article>
            </li>
        </ul>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>

<!--#############################################################-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add News</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="news" method="POST" id="add_new_article_form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Article Image</label>
                        <input type="file" class="form-control" name="upload_file" id="upload_file" accept="image/png, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Article Title</label>
                        <input type="text" class="form-control" placeholder="Article Title" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Article Description</label>
                        <textarea class="form-control" placeholder="Article Description" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Article Ctegory</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category" id="category">
                            <option selected value="sports">Sports</option>
                            <option value="arts">Arts</option>
                            <option value="politics">Politics</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" id="btn_add_new_article" value="Publish">
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<!--#############################################################-->
<form action="news" method="get">
    <input type="submit" name="submit" id="submit">
</form>



@include('sharedFooter')
