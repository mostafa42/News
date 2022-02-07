@include('sharedHeader')
@include('admin.adminNavbar')

<div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <hr class="btmspace-80">
      <!-- ################################################################################################ -->
      <ul class="nospace group overview" id="allData2">

      </ul>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>

<!--#############################################################-->
<!-- Modal -->
<div class="modal ddddddd fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> <!-- {{ __('trans.addNews') }} -->
                <h5 class="modal-title" id="exampleModalLabel">XNXX</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="news" method="POST" id="add_new_article_form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('trans.articleImage') }}</label>
                        <input type="file" class="form-control" name="upload_file" id="upload_file" accept="image/png, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{ __('trans.articleTitle') }}</label>
                        <input type="text" class="form-control" placeholder="Article Title" name="title" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">{{ __('trans.articleDescription') }}</label>
                        <textarea class="form-control" placeholder="Article Description" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">{{ __('trans.articleCategory') }}</label>
                        <select class="form-select-lg mb-3" aria-label=".form-select-lg example" name="category" id="category">
                            <option selected value="sports">{{ __('trans.option1') }}</option>
                            <option value="arts">{{ __('trans.option2') }}</option>
                            <option value="politics">{{ __('trans.option3') }}</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('trans.closeBtn') }}</button>
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
            <h4 class="modal-title" id="myModalLabel">{{ __('trans.updateArticle') }}</h4>
          </div>
          <div class="modal-body" id="modalbody">
          </div>
        </div>
      </div>
    </div>

@include('sharedFooter')
