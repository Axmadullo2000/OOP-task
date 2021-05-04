<?php
    session_start();
    if (isset($_SESSION['status'])):
?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?= $_SESSION['status'];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="../dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/demo.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link rel="stylesheet" href="../dist/css/style_main.css">
    <link rel="stylesheet" href="../dist/css/styling.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg main-navbar navbar-expand-lg-style">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="d-block nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown show"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg" aria-expanded="true">
                <!--            <i class="ion ion-android-person d-lg-none"></i>-->
            <div class="d-sm-none d-lg-inline-block">Hi, ubaydullayev5419</div></a>
              <div class="dropdown-menu dropdown-menu-right show">
                <a href="#" class="dropdown-item has-icon">
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
            <li class="menu-header">Profile</li>
            <li class="active">
            </li>
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-profile-item" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="ion ion-android-mail icon"></i><span class
              ="link_items">Profile</span></a>
            </div>
            </ul>
          </div>
        </aside>
    </div>
    <div class="container">
    
    <div class="card-wrapper">
      
      <div class="card">
        
        <div class="card-image">
          <img src="https://image.ibb.co/dUTfmJ/profile_img.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
        <li>
          <a href="">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="fab fa-dribbble"></i>
          </a>
        </li>
      </ul>

      <div class="details">
        <h2>John Smith
          <br>
          <span class="job-title">UI Developer</span>
        </h2>
      </div>
    </div>
  </div><!-- end box wrapper --> 
    
    
<div class="card-wrapper">
      
      <div class="card profile-two">
        
        <div class="card-image profile-img--two">
          <img src="https://image.ibb.co/c9rY6J/profile02.jpg" alt="profile two">
        </div>

        <ul class="social-icons">
          <li>
            <a href="">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-dribbble"></i>
            </a>
          </li>
        </ul>

        <div class="details jane">
            <h2>Jane Doe
              <br>
              <span class="job-title">UI Designer</span>
            </h2>
        </div>
    </div>
 </div><!-- END box wrapper -->
     
 </div><!-- END container -->
    <?php
        else:
            header("Location: ../../logout.php");

        endif;
    ?>
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
        /*!
        * Particleground
        *
        * @author Jonathan Nicol - @mrjnicol
        * @version 1.1.0
        * @description Creates a canvas based particle system background
        *
        * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/
        */
        !function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c. hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement ("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r. width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b. addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.  max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d. offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s. clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||  (t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c]. position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.  length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this. stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil (Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random  ()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;  default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g. directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),/**
        * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
        * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
        * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
        * @license: MIT license
        */
        function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.             cancelAnimationFrame=function(a){clearTimeout(a)})}();
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
</body>
</html>