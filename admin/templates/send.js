$(document).ready(function () {
    $("#closing").click(function (e) { 
        e.preventDefault();
        $("#create_tags").css("display", "none");
        $('#closing').css("display", "none");
        $(".main-sidebar").css("display", "block");
        $(".demo-settings").css("display", "block");
        $("#wrapper_main").css("display", "block");
        $("#post").css("display", "block");
    });;
    $("#create_tags").css("display", "none");
    $('#closing').css("display", "none");
    $("#plus").click(function (e) { 
        // e.preventDefault();
    });
    $("#close").click(function (e) { 
        e.preventDefault();
            document.getElementById("result").style.display = "none";
            document.getElementById("content").style.display = "block";
            document.getElementById("wrapper_main").style.display = "block";
    });;
    $("#true").click(function (e) { 
        e.preventDefault();
            document.getElementById("result").style.display = "none";
            document.getElementById("content").style.display = "block";
            document.getElementById("wrapper_main").style.display = "block";
    });;
    $("#false").click(function (e) { 
        e.preventDefault();
            window.location.href = "index.php";
    });
    $("#sending").click(function (e) { 
        var str = document.getElementById("files").value;
        var res = str.split(".");
        var type = res[res.length - 1];
        if ($("#title").val().length >= 5 && $("#content").val().length >= 50 && (type == 'jpg' || type == 'jpeg' || type == 'png')) {
            document.getElementById("wrapper_main").style.display = "none";
            document.getElementById("content").style.display = "none";
            document.getElementById("result").style.display = "block";
            document.getElementById("result").style.opacity = 1;
        }
            e.preventDefault();
            if($("#title").val().length < 5) {
                var errTitle = '<span>*Введите значение Заголовка не менее 5 символов!</span>';
                $("#title_err").html(errTitle);
            }
            else {
                $("#title_err").hide();
            }
            if ($("#content").val().length < 50) {
                var content_err = '<span>*Введите значение Контента не менее 50 символов!</span>';
                $("#content_err").html(content_err);
            }
            else {
                $("#content_err").hide();
            }
            if ($("#files").val().length == 0) {
                var upload = '<span>*Загрузите изображение!</span>';
                $("#upload_err").html(upload);
            }
            else {
                $("#upload_err").hide();
            }
            if ($("#tags").val().length == 0) {
                var context = '<span>*Выберите Контекст Поста!</span>';
                $("#tag_err").html(context);
            }
            else {
                $("#tag_err").hide();
            }
        var title = $("#title").val();
        var content = $("textarea").val();
        var file = $('#files').prop('files')[0];
        var context = $('#tags').val();
        var form_data = new FormData();
        form_data.append('title', title);
        form_data.append('content', content);
        form_data.append('files', file);
        form_data.append('context', context);
        $.ajax({
                url: "send.php",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                data: form_data,
                success: function (response) {
                    console.log(response);
                    $("#sending").attr("disabled", "disabled");
                    setTimeout(function () {
                        $("#sending").removeAttr("disabled");
                      }, 3000);
                }
        });
    });
});