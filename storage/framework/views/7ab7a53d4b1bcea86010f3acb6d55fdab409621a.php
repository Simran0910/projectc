<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="http://website.com/twitter_plugin_styles.css" />
   
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width:800px;
  position: relative;
    margin-left: 30px;
    margin-top: 50px;

}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes  fade {
  from {opacity: .4}
  to {opacity: 1}
}


</style>

	  <style>

 .content{
 padding: 30px;
}
          
.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: #b50d29;
}

.topnav .icon {
  display: none;
}

@media  screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media  screen and (max-width: 1250px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
    h3{
        text-align: center;
    }
    p{
        text-align: center;
    }
    h1{
        text-align: center;
    }
    .st{
        flex-direction: column;
        align-content: center;
    }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
    .slide {
       display:block;
/*        text-align: center;*/
        min-width: 100%;
    }
    .slide img{
        margin: 0px;
    }
        .Img{
        text-align: center;
            padding-left: 20px;
            padding-right: 20px;
        width: 100%;
            height: 100%;
            
    }
    .slideshow-container{
        margin-left: 0px;
        text-align: center;
        display: block;
        width: 100%;
        height: 100%;
        
    }
    .twitter 
    {
/*       margin-left: 15%;*/
        min-width: 100%;
        display: block;
        border:2px solid black;
        border-radius: 20px;
        align-items: center;
/*        scroll-behavior: smooth;*/
    }
   
    
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}


</style>
    <style>
.marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            font-size: 40px;
            color: #b50d29;

        }

        .marquee p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 15s linear infinite;
        }

        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }

        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes  scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            
        }
        .st{
            display: flex;
            flex-wrap: wrap;
/*            flex-direction: column;*/

        }
         .slide{
        width: 60%;
        float: left;
    }
    .twitter{
        width: 40%;
        float: right;
        height:100%;
        overflow: hidden;
        margin-top: 70px
    }
        hr{
            height: 5px;
          background-color:#b50d29;
        }
        .crime
        {
            display: flex;
            flex-wrap: wrap;
        }
        .tc
        {
            width:30%;
            height:30%;
            padding: 5px;
        }

    </style>

</head>
    <body>
        <div class="sheader">
<div class="top-bar hidden-xs" style="background-color: #b50d29; width: 100%;" >
            <div class="container" id="top">
                <div class="row">

                    <div class="col-md-12 top-nav pull-right" style="text-align:right">

                        <a href="#" id="btn-decrease" class="social-icon" title="Decrease font size" style="color: rgb(255,255,255)">A-</a> &nbsp;
                        <a href="#" id="btn-orig" class="social-icon" title="Default font size" style="color: rgb(255,255,255)">A</a> &nbsp;
                        <a href="#" id="btn-increase" class="social-icon" title="Increase font size" style="color: rgb(255,255,255)">A+</a>&nbsp;

                        <a class="btn social-icon" href="https://www.facebook.com/BPRDIndia/" target="blank" style="color: rgb(255,255,255)" ><i class="fa  fa-facebook-square"></i></a>
                        <a class="btn social-icon" href ="https://twitter.com/bprdindia" target="blank" style="color: rgb(255,255,255)"><i class="fa  fa-twitter-square"></i></a>
                        <a class="btn social-icon" href ="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow" target="blank" style="color: rgb(255,255,255)"><i class="fa  fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
  <div class="se-pre-con"></div>

<!--<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">-->
    <center>
    <img src="images/header.png" alt="BPRD" width="100%;">
  </center>
  <div class="topnav" id="myTopnav" style="margin-top: 8px;">


  <a href="#home">Home</a>
  <a href="#news" class="active">Awareness</a>
<!--  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> -->
   <a href="helpline">Helpline No.</a>

  <a href="#about">About</a>
<!--  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>-->
        </div>
 <div class="marquee">
        <p>Disaster strikes when you waver your concentration. Be Aware Always!</p>
    </div>
<br>
            <div class="st">
            <div class="slide">
            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://d2cbg94ubxgsnp.cloudfront.net/Pictures/480x270//8/9/0/139890_shutterstock_710989138.jpg" style="width:100%; height:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.dw.com/image/43421915_303.jpg" style="width:100%; height:100%;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRh7IkJrt1yN1nceIvDB5CIFyDMwr9KQsZ-qw&usqp=CAU" style="width:100%; height:100%;">
  <div class="text"></div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
                </div></div>
</div>
    <div class="twitter" >

            <a class="twitter-timeline" href="https://twitter.com/bprdindia?lang=en" data-widget-id="384617889120010240" style="float : right" data-height="400px"  data-chrome="nofooter noborders transparent">Tweets by @bprd</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jquery.carouFredSel.js"></script>
        </div>

        
</div>

        </div>

        <div class="content">
<br><hr>
 <img class="Img" width="600" height="450" style="margin-right: inherit;
              padding-left: 30px;" src="https://www.thenational.ae/image/policy:1.307938:1499464932/image/jpeg.jpg?f=16x9&w=1200&$p$f$w=dfa40e8" align="right">
<h1><b>Personal Crime</b></h1>
            <br>
<p> Personal crimes are the crimes most associated with violence against victims. For example, homicide is the willful killing of a person while murder is the unlawful willful killing of a person.</p>
<h3>Personal crimes are most commonly generalized as a violent crime that causes physical, emotional, or psychological harm to the victim. These crimes are offenses against the person, and can include but are not limited to:</h3>
   <table>
      <tr>
          <td>
     <a href="assault"><img src="images/assault.jpeg" width="100%" height="30%" style="border-radius:25px;" ></a>  
    </td>
    <td>
     <a href=""><input type="image" src="images/false.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a> 
      </td>
         <td>
     <a href="kidnapping"><input type="image" src="images/kidnapping.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>
       </td>       
      </tr> 
       <td>
     <a href=""><input type="image" src="images/homicide.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>
      </td>
       <td>
     <a href="women"><input type="image" src="images/women.jpeg" width="100%" height="30%" style="border-style:none; border-radius:25px;"></a> 
       </td>
           <td>
     <a href=""><input type="image" src="images/children.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>
                </td>
     </table>       
    
<br>
<hr>
<img class="Img" width="600" height="380" style="margin-left: inherit;
              padding-right: 30px;"  src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202001/Imageforrep_1-770x433.jpeg?cRECnOnp3XTYs_ahac4fLja7Zrqol.6J" width="35%" align="left">
<h1><b>Property Crime</b></h1>
<p>Property crimes, or offenses against property, do not necessarily involve the harm of another person. Rather, these crimes involve interference with another person’s right to use or enjoy their own property. </p>
            <br>
<h3>Property crimes include but are not limited to:</h3>
<table>
    <tr>
    <td>
     <a href=""><input type="image" src="images/theft.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/arson.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/white.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
    </tr>
    <tr>
    <td>
     <a href=""><input type="image" src="images/stolen.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href="vandalism"><input type="image" src="images/vandalism.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/cyber.jpeg" width="100%"  height="35%" style="border-radius:25px;"></a>  
    </td>
    </tr>
</table>
<br><br><br>
<hr>
<img class="Img" width="600" height="380" style="margin-right: inherit;
              padding-left: 30px;" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201811/hyderabad_murder_0.png?tzy.T4WRyE9ZYiwdHQT.EEl1XAHojX67" width="35%" align="right">
<h1><b>Inchoate Crime</b></h1>
            <br>
<p>Inchoate crimes, also known as incomplete crimes, are acts taken toward committing a crime or acts that constitute indirect participation in a crime. Although these acts are not themselves crimes, they are illegal because they are conducted in furtherance of a crime, and society wishes to deter individuals from taking such steps.</p>
<h3>Three primary inchoate crimes are attempt, conspiracy, and aiding and abetting.</h3>
<table>
    <tr>
    <td>
     <a href=""><input type="image" src="images/attempt.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/conspiracy.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
       <td>
     <a href=""><input type="image" src="images/aiding.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
    </tr>
            </table>
<br><br><hr>
 <img class="Img" width="600" height="350" style="margin-left: inherit;
              padding-right: 30px;" src="https://images.mid-day.com/images/2017/apr/10-drug-l.jpg" align="left" >
             <h1><b>Statutory Crime</b></h1>
            <br>
              <p>Statutory offenses refer to behavior that is made illegal by laws passed by a governing body, like the legislature, as opposed to behavior that violates the common law—or “judge-made law”</p>
            <h3>There are Three significant types of statutory crimes</h3>
            <table>
    <tr>
    <td>
     <a href=""><input type="image" src="images/alcohol.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href="drug"><input type="image" src="images/drug.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td >
     <a href=""><input type="image" src="images/traffic.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
    </tr>
            </table>
   <br><br><br><hr>
 <img class="Img" width="600" height="350" style="margin-right: inherit;
              padding-left: 30px;" src="https://trak.in/wp-content/uploads/2020/06/Untitled-design-38-1280x720.jpg" align="right" style="width:440px;">
 <h1><b>Financial Crime</b></h1>
            <br>
 <p>Financial crime is crime committed against property, involving the unlawful conversion of the ownership of property to one's own personal use and benefit.</p>
  <h3>Financial crimes include:</h3>
  <table>
    <tr>
    <td>
     <a href="financialfraud"><input type="image" src="images/fraud.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/ecrime.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/money.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
    </tr>
    <tr>
    <td>
     <a href="terrorist"><input type="image" src="images/terrorist.jpeg" width="100%"  height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/bribery.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
        <td>
     <a href=""><input type="image" src="images/mktabuse.jpeg" width="100%" height="30%" style="border-radius:25px;"></a>  
    </td>
    </tr>
</table>
            <br><br><hr>
 </div>
        </div>
    <br> 
        <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
    <script>
$(window).bind("load", function() {
$(".h-feed").carouFredSel({
        items: 2,
        direction: "up",
        scroll : {
        items: 1,
        easing: "elastic",
        duration: 1000,
        pauseOnHover: true
        }
    });
});
</script>
    </body>
</html>
<?php /**PATH C:\laragon\www\CrimeUI\resources\views/welcome.blade.php ENDPATH**/ ?>