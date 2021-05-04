$(document).ready(function () {
    $("#sending").click(function (e) { 
        e.preventDefault();
        var form = document.getElementById('post'); //id of form
        var formdata = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open('POST','carouselValues.php',true);
        // xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
        //if you have included the setRequestHeader remove that line as you need the 
        // multipart/form-data as content type.
        xhr.onload = function(){
            alert("Всё прошло успешно!!!");
        }
        xhr.send(formdata);
    });
});
