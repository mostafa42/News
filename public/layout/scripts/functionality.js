// login function with ajax
$("#btn_login").click(function(event) {
    event.preventDefault();

    $.ajax({
        type: "post",
        url: "adminAuth",
        dataType: "json",
        data: $('#login_form').serialize(),
        success: function(response){
          alert('Done');
          window.location.href = '/adminView';
        },
        error: function(data){
             alert('please check email or password');
        }
    });
});

// add new article with ajax
// $("#btn_add_new_article").click(function(event) {
//     event.preventDefault();
//     var form_url = $("form[id='add_new_article_form']").attr("action");
//     var uploadfile = new FormData(document.getElementById("add_new_article_form"));
    // fd.append('name ', name );
    // fd.append('address', address);
    // fd.append('area', area);
    // fd.append('gender', gender);
    // $.ajax({
    //     type: "post",
    //     url: "news",
    //     dataType: "json",
    //     data: {
    //         '_token' : $("#_token").val()
    //     },
    //     success: function(response){
    //     //   alert('Published Successfully');
    //     console.log(response);
    //     },
    //     error: function(data){
    //          alert(data);
    //     }
    // });
//     console.log(uploadfile);

// });
$('#add_new_article_form').submit(function(e) {

    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type:'POST',
        url: "news",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
           this.reset();
           alert('Article has been published successfully');
        },
        error: function(data){
           console.log(data);
         }
       });

});

$("#submit").click(function(event) {
    $.ajax({
        type:'get',
        url: "news",
        dataType : "json" ,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            console.log(data('title'));
        },
        error: function(data){
           console.log(data);
         }
       });
});
