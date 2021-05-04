<?php 
    session_start();
    if (isset($_SESSION['status'])):
      include "../../db/connect.php";
      $sql = "SELECT * FROM `tags`";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/demo.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link rel="stylesheet" href="../dist/css/main.css">
    <title>Create Data</title>
</head>
<body>
    <div id="app">
        <div class="main-wrapper" id="wrapper_main">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
              <ul class="navbar-nav mr-3">
                <a href="#" class="nav-link nav-link-lg" id="bars_btn"><i class="ion ion-navicon-round"></i></a href="#">
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
              </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                    <!--            <i class="ion ion-android-person d-lg-none"></i>-->
                <div class="d-sm-none d-lg-inline-block"><?= "Hi, ".$_SESSION['username'];?></div></a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="../templates/profile.php" class="dropdown-item has-icon">
                      <i class="ion ion-android-person"></i> Profile
                    </a>
                    <a href="../../logout.php" class="dropdown-item has-icon">
                      <i class="ion ion-log-out"></i> Logout
                    </a>
                  </div>
                </li>
            </ul>
          </nav>
          <div class="main-sidebar" id="main_sidebar">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <a href="index.php">Admin Room</a>
              </div>
              <div class="sidebar-user">
                <div class="sidebar-user-picture">
                  <img alt="image" src="../../images/background.jpg">
                </div>
                <div class="sidebar-user-details">
                  <div class="user-name"><?php echo $_SESSION['username'];?></div>
                  <div class="user-role">
                    <?php echo $_SESSION['status'];?>
                      <!--Administrator-->
                  </div>
                </div>
              </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Posts</li>
            <li class="active">
            </li>
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-post-item" data-toggle="list" href="#list-post" role="tab" aria-controls="post"><i class="ion ion-android-mail icon"></i><span class
              ="link_items">POSTS</span></a>
            </div>
            </ul>
          </div>
        </aside>
      </div>
    <div class="main-content">
        <section class="section">
            <div class="panel panel-default">
                <div class="adjust">
                   <div class="loader4" id="loader"></div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-dashboard-item">
                      
                  </div>
                  <div class="tab-pane fade show" id="list-post" role="tabpanel" aria-labelledby="list-post-item">
                      <a href="../templates/form.php" class="btn btn-primary create_posts">Write a Post</a>
                  </div>
                  <div class="tab-pane fade" id="list-carousel" role="tabpanel" aria-labelledby="list-carousel-item">Carousel</div>
            </div>
        </section>
    </div>
            <!-- Create Posts -->
    <div class="content" id="form-data">
        <form method="post" id="post">
            <input type="text" name="title" id="title" placeholder="Title" class="form-control">
            <span id="title_err" style="color: red;"></span><br>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Content" class="form-control"></textarea>
            <span id="content_err" style="color: red;"></span><br>
            <div class="input__wrapper">
                <input name="file" type="file" id="files" class="input input__file">
                <label for="files" class="input__file-button">
                    <span class="input__file-icon-wrapper"><img class="input__file-icon" src="../dist/img/file-earmark-arrow-up.svg" alt="Выбрать файл" width="40"></span>
                    <span class="input__file-button-text" id="choose_file">Выберите файл</span>
                </label>
                <span id="upload_err" style="color: red;"></span>
              </div>
                  <select name="tags" id="tags" class="mb-3" style="background: rebeccapurple; color: silver;">
                    <?php while ($row = $stmt->fetch(PDO:: FETCH_OBJ)):?>
                      <option><?= $row->tags;?></option>
                      <?php endwhile;?>
                  </select>
              <span id="tag_err" style="color: red;"></span>
                    <a href="creating_tags.php" id="plus"><i class="fas fa-plus-circle"></i></a>
              <button type="submit" class="btn btn-success" id="sending" name="send" data-toggle="modal" data-target="#exampleModal">Send!</button>
            </form>
          </div>
          <div id="res"></div>
          <div id="texts"></div>
          <div id="result">
        <div id="close"><i class="fas fa-times-circle"></i></div>
        <h2>Всё прошло успешно!!!</h2>
        <p>Хотите добавить пару Постов?</p>
        <div id="btn">
          <button class="btn btn-success mr-2" id="true">Да</button>
          <button class="btn btn-danger ml-2" id="false">Нет</button>
        </div>
    </div>
    
    <script src="../dist/modules/jquery.min.js"></script>
    <script src="../dist/modules/popper.js"></script>
    <script src="../dist/modules/tooltip.js"></script>
    <script src="../dist/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="../dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
    <script src="../dist/js/sa-functions.js"></script>
    <script src="../dist/modules/chart.min.js"></script>
    <script src="../dist/modules/summernote/summernote-lite.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
              label: 'Statistics',
              data: [460, 458, 330, 502, 430, 610, 488],
              borderWidth: 2,
              backgroundColor: 'rgb(87,75,144)',
              borderColor: 'rgb(87,75,144)',
              borderWidth: 2.5,
              pointBackgroundColor: '#ffffff',
              pointRadius: 4
            }]
          },
          options: {
            legend: {
              display: false
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true,
                  stepSize: 150
                }
              }],
              xAxes: [{
                gridLines: {
                  display: false
                }
              }]
            },
          }
        });
          !function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c. hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement ("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r. width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b. addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.  max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d. offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s. clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||  (t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c]. position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.  length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this. stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil (Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random  ()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;  default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g. directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),
          function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();
            particleground(document.getElementById('particles-foreground'), {
              dotColor: 'rgba(255, 255, 255, 1)',
              lineColor: 'rgba(255, 255, 255, 0.05)',
              minSpeedX: 0.3,
              maxSpeedX: 0.6,
              minSpeedY: 0.3,
              maxSpeedY: 0.6,
              density: 50000, // One particle every n pixels
              curvedLines: false,
              proximity: 250, // How close two dots need to be before they join
              parallaxMultiplier: 10, // Lower the number is more extreme parallax
              particleRadius: 4, // Dot size
            });
            particleground(document.getElementById('particles-background'), {
              dotColor: 'rgba(255, 255, 255, 0.5)',
              lineColor: 'rgba(255, 255, 255, 0.05)',
              minSpeedX: 0.075,
              maxSpeedX: 0.15,
              minSpeedY: 0.075,
              maxSpeedY: 0.15,
              density: 30000, // One particle every n pixels
              curvedLines: false,
              proximity: 20, // How close two dots need to be before they join
              parallaxMultiplier: 20, // Lower the number is more extreme parallax
              particleRadius: 2, // Dot sized
            });
    </script>
    <script src="../dist/js/scripts.js"></script>
    <script src="../dist/js/custom.js"></script>
    <script src="../dist/js/demo.js"></script>
    <script>
        window.setTimeout(() => { 
          $("#loader").css("display", "none");
        }, 800);
        var bars_btn = document.querySelector("#bars_btn");
        var main_sidebar = document.querySelector("#main_sidebar");
        main_sidebar.style.display = "block";
        bars_btn.onclick = function () {
          if (main_sidebar.style.display === "block") {
              main_sidebar.style.display = "none"
          }
          else {
              main_sidebar.style.display = "block";
          }
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="send.js"></script>
    <?php
        else:
            header("Location: ../../index.php");
        endif;
    ?>
</body>
</html>