@include('sharedHeader')
@include('admin.adminNavbar')

<div class="wrapper row3">
    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->

        <!-- ################################################################################################ -->
        <hr class="">
        <!-- ################################################################################################ -->
        <ul class="nospace group overview" id="allArticles">

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
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update Article</h4>
          </div>
          <div class="modal-body" id="modalbody">
          </div>
        </div>
      </div>
    </div>

@include('sharedFooter')
