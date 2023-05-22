<?php

session_start();
// session_destroy();

if(!isset($_SESSION['usuario'])){
    echo "
    <script>
    window.location.href='loginInterface.php';
    </script>";
    session_destroy();
    die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <script src="https://kit.fontawesome.com/d3ae0c1cce.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<nav class="main-menu">
 <div>
    <a class="logo" href="http://startific.com">
    </a> 
  </div> 
<div class="settings"></div>
<div class="scrollbar" id="style-1">
      
<ul>
  
<li>                                   
<a href="http://startific.com">
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>   
   
<li>                                 
<a href="http://startific.com">
<i class="fa fa-user fa-lg"></i>
<span class="nav-text">Login</span>
</a>
</li>   

    
<li>                                 
<a href="http://startific.com">
<i class="fa fa-envelope-o fa-lg"></i>
<span class="nav-text">Contact</span>
</a>
</li>   
  


 
<!-- <li>
<a href="http://startific.com">
<i class="fa fa-heart-o fa-lg"></i>

                        
<span class="share"> 


<div class="addthis_default_style addthis_32x32_style">
  
<div style="position:relative;
margin-left: 0px;top:3px;"> 
   
  
 <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="30px" height="30px"></a>

   <a href="https://twitter.com/share" target="_blank" class="share-popup"><img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png" width="100px" height="100px"></a>

   
<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_
" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png" width="30px" height="30px"></a>   
  
  
  
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>                    
</span>
                        <span class="twitter"></span>
                        <span class="google"></span>
                        <span class="fb-like">  
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fstartific&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
                       
                        </span> 

                        <span class="nav-text">
                        </span>
                        
                    </a>

</li> -->
                            

  
  
</li>
<li class="darkerlishadow">
<a href="http://startific.com">
<i class="fa fa-clock-o fa-lg"></i>
<span class="nav-text">News</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-desktop fa-lg"></i>
<span class="nav-text">Technology</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-plane fa-lg"></i>
<span class="nav-text">Travel</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-shopping-cart"></i>
 <span class="nav-text">Shopping</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-microphone fa-lg"></i>
<span class="nav-text">Film & Music</span>
</a>
</li>

<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-flask fa-lg"></i>
<span class="nav-text">Web Tools</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-picture-o fa-lg"></i>
<span class="nav-text">Art & Design</span>
</a>
</li>

<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-align-left fa-lg"></i>
<span class="nav-text">Magazines
</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-gamepad fa-lg"></i>
<span class="nav-text">Games</span>
</a>
</li>
  
<li class="darkerli">
<a href="http://startific.com">
<i class="fa fa-glass fa-lg"></i>
<span class="nav-text">Life & Style
</span>
</a>
</li>
  
<li class="darkerlishadowdown">
<a href="http://startific.com">
<i class="fa fa-rocket fa-lg"></i>
<span class="nav-text">Fun</span>
</a>
</li>
 
  
</ul>

  
<li>
                                   
<a href="http://startific.com">
<i class="fa fa-question-circle fa-lg"></i>
<span class="nav-text">Help</span>
</a>
</li>   
    
  
<ul class="logout">
<li>
                   <a href="http://startific.com">
                         <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">
                            BLOG 
                        </span>
                        
                    </a>
</li>  
</ul>
        </nav>  

<aside class="responsive-banner first">
  <div class="container-envelope">
    <svg class="cirle-a" height="160" width="160">
      <circle cx="80" cy="80" r="80"/>
    </svg>
     <svg class="cirle-b" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <svg class="cirle-c" height="600" width="600">
      <circle cx="300" cy="300" r="300"/>
    </svg>
   <svg class="cirle-d" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <img src="https://i.pinimg.com/originals/f2/d1/f9/f2d1f900f688ddca0765ec8e2d3900e1.png" />
    <div class="col-xs-12">
      <p>Live Sites using our WordPress Themes</p>
      <a target="_blank" href="https://www.silocreativo.com/en/showcase/" class="more-link">Get inspired</a>
    </div>
  </div>
</aside>

<aside class="responsive-banner second">
  <div class="container-envelope">
    <svg class="cirle-a" height="160" width="160">
      <circle cx="80" cy="80" r="80"/>
    </svg>
     <svg class="cirle-b" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <svg class="cirle-c" height="600" width="600">
      <circle cx="300" cy="300" r="300"/>
    </svg>
   <svg class="cirle-d" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <img src="https://i.pinimg.com/originals/f2/d1/f9/f2d1f900f688ddca0765ec8e2d3900e1.png" />
    <div class="col-xs-12">
      <p>Live Sites using our WordPress Themes</p>
      <a target="_blank" href="https://www.silocreativo.com/en/showcase/" class="more-link">Get inspired</a>
    </div>
  </div>
</aside>

<aside class="responsive-banner third">
  <div class="container-envelope">
    <svg class="cirle-a" height="160" width="160">
      <circle cx="80" cy="80" r="80"/>
    </svg>
     <svg class="cirle-b" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <svg class="cirle-c" height="600" width="600">
      <circle cx="300" cy="300" r="300"/>
    </svg>
   <svg class="cirle-d" height="60" width="60">
      <circle cx="30" cy="30" r="30"/>
    </svg>
    <img src="https://i.pinimg.com/originals/f2/d1/f9/f2d1f900f688ddca0765ec8e2d3900e1.png" />
    <div class="col-xs-12">
      <p>Live Sites using our WordPress Themes</p>
      <a target="_blank" href="https://www.silocreativo.com/en/showcase/" class="more-link">Get inspired</a>
    </div>
  </div>
</aside>
<div class="link-container">
  <a target="_blank" href="https://www.silocreativo.com/en/showcase/" class="more-link">Visit the original article</a>
</div>


<script src="assets/js/formulario.js"></script>

			

</body>
</html>