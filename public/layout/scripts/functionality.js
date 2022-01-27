// login function with ajax
$("#btn_login").click(function (event) {
    event.preventDefault();

    $.ajax({
        type: "post",
        url: "adminAuth",
        dataType: "json",
        data: $("#login_form").serialize(),
        success: function (response) {
            alert("Done");
            window.location.href = "/adminView";
        },
        error: function (data) {
            alert("please check email or password");
        },
    });
});

// add new article with ajax
$("#add_new_article_form").submit(function (e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: "POST",
        url: "news",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
            this.reset();
            fetchAllAtricle() ;
            alert("Article has been published successfully");
        },
        error: function (data) {
            console.log(data);
        },
    });
});

$(document).ready(function(){
    fetchAllAtricle() ;
    fetchAllAtricleForUser();
});


function fetchAllAtricle() {
    $.ajax({
        type: "get",
        url: "news",
        dataType: "json",
        success: function (response) {
            console.log(response.articles);
            $('#allArticles').html("");
            $.each(response.articles , function(key , item){
                $('#allArticles').append('<li class="">\
                        <article>\
                        <h6 class="heading">'+ item.title +'</h6>\
                        <img src="uploades/'+ item.image +'" alt="" >\
                                <ul class=" meta">\
                                    <li style="font-weight="bold" "><i class="fa fa-user"></i><span>Admin</span></li>\
                                    <li><i class="fa fa-calendar"></i><span>'+ item.created_at +'</span></li><br/>\
                                    <li><i class="fa fa-tasks"></i><span>'+ item.category +'</span></li>\
                                </ul>\
                                    <p style="font-weight=bold !important;" id="pStyle">'+ item.description +'</p>\
                                <footer class="nospace">\
                                <button type="submit" onclick="edit_article('+item.id+')" class="btn">Edit</button>\
                                <button type="submit" onclick="delete_article('+item.id+')" class="btn">Delete</button>\
                                </footer>\
                        </article>\
                    </li>'
                    );
            });
        },
    });
}

function fetchAllAtricleForUser() {
    $.ajax({
        type: "get",
        url: "all_news_for_user",
        dataType: "json",
        success: function (response) {
            console.log(response.articles);
            $('#allArticles2').html("");
            $.each(response.articles , function(key , item){
                $('#allArticles2').append('<li class="">\
                        <article>\
                        <h6 class="heading">'+ item.title +'</h6>\
                        <img src="uploades/'+ item.image +'" alt="" >\
                                <ul class=" meta">\
                                    <li style="font-weight="bold" "><i class="fa fa-user"></i><span>Admin</span></li>\
                                    <li><i class="fa fa-calendar"></i><span>'+ item.created_at +'</span></li><br/>\
                                    <li><i class="fa fa-tasks"></i><span>'+ item.category +'</span></li>\
                                </ul>\
                                    <p style="font-weight=bold !important;" id="pStyle">'+ item.description +'</p>\
                        </article>\
                    </li>'
                    );
            });
        },
    });
}

function edit_article(id) {
    $.ajax({
        type: "get",
        url: "/news/"+id+"/edit",
        dataType: "json",
        success: function (response) {
            console.log(response.articles.id);
            $('#modalbody').html("");
            $.each(response  , function(key , item){
                $('#modalbody').append('\
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">\
                <input type="hidden" value="'+item.id+'" id="article_id_for_update">\
                <input type="hidden" value="'+item.image+'" id="image_for_update">\
                    <div class="mb-3">\
                        <label for="exampleFormControlInput1" class="form-label">Article Title</label>\
                        <input type="text" class="form-control" placeholder="Article Title" name="title2" id="title2" value="'+item.title+'">\
                    </div>\
                    <div class="mb-3">\
                        <label for="exampleFormControlTextarea1" class="form-label">Article Description</label>\
                        <textarea class="form-control" placeholder="Article Description" name="description2" id="description2" rows="3">'+item.description+'</textarea>\
                    </div>\
                    <div class="mb-3">\
                        <label for="exampleFormControlTextarea1" class="form-label">Article Ctegory</label>\
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category2" id="category2">\
                            <option selected value="sports">Sports</option>\
                            <option value="arts">Arts</option>\
                            <option value="politics">Politics</option>\
                        </select>\
                    </div>\
                    <div class="modal-footer">\
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>\
                        <input type="submit" class="btn btn-primary" id="btn_update" value="Update">\
                    </div>\
                ');
            });
        },
    });
    $('#largeModal').modal('show');
}
$(document).ready(function(){
    var form = $('.update_ajax');
});

$(document).on("click", "#btn_update", function() {
    id = $('#article_id_for_update').val();
    var url = "news/"+id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: "PATCH",
        cache: false,
        data:{
            image : $('#image_for_update').val(),
            title: $('#title2').val(),
            description: $('#description2').val(),
            category: $('#category2').val()
        },
        success: function(dataResult){
            fetchAllAtricle();
            alert('Article is updated successfully');
        }
    });
});


function delete_article(id){
    var url = "news/"+id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: "DELETE",
        cache: false,
        success: function(dataResult){
            fetchAllAtricle();
            alert('This article is deleted successfully');
        }
    });
}


$(document).on("click", "#btn_forget_password", function() {
    // this.preventDefault ;
    email = $('#email_for_forget_pass').val();
    checkedPlatform = $('#platform').val();
    var url = "send_email_forget_password";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: "get",
        cache: false,
        data:{
            email : email
        },
        success: function(dataResult){
            alert(dataResult.msg);
        },
        error: function(dataResult){
            alert('Email is not correct');
        }
    });
});


$(document).on("click", "#btn_reset_password", function()
{
    password = $('#pass_forget').val();
    repassword = $('#repass_forget').val();

    if( password === repassword ){
        var url = "actually_reset_password";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: url,
            type: "PATCH",
            cache: false,
            data:{
                password : password
            },
            success: function(dataResult){
                alert(dataResult.msg);
                window.location = "/adminView";
            },
            error: function(dataResult){
                alert('Email is not correct');
                // console.log('error');
            }
        });
    }else{
        alert('password is not matching');
    }


});
