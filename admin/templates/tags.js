$(document).ready(function () {
    $("#save_post").click(function (e) { 
    e.preventDefault();
    var context_post = $("#context_post").val();
    var form_data = new FormData();
    form_data.append("context_post", context_post);
    $.ajax({
        type: "POST",
        url: "tags.php",
        data: form_data,
        cache: false, 
        contentType: false,
        processData: false,
        dataType: "text",
        success: function (res) {
            console.log(res);
            if (res == '*Введите значения!!!') {
                $("#message").html(`<div class='alert alert-danger m-auto mt-2 mb-4' style='width: 80%;'>${res}</div>`);
            }
            else {
                $("#message").html(`<div class='alert alert-success m-auto mt-2 mb-4' style='width: 80%;'>${res}</div>`);

            }
                // $("#message").html(res);
                // console.log("Error!");
        }
    });
});
});