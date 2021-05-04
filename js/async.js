$(document).ready(function () {
    $("#button").click(function (e) { 
        e.preventDefault();
        if ($("#username").val().length > 0) {
            var username = $("#username").val();
        }
        else {
            $("#errUsername").html("<span style='color: red; fonst-size: 18px;'>*Введите Username</span>");
        }
        if ($("#pass").val().length > 0) {
            var pass = $("#pass").val();
        }
        else {
            $("#errPass").html("<span style='color: red; fonst-size: 18px;'>*Введите Password</span>");
        }
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "../check.php",
            data: {
                'username' :    username,
                'pass'     :    pass
            },
            success: function (response) {
                alert(response);
                // alert("Button clicked!");
            }
        });
    });;
});