<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <style>

.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}
h1 {
    font-family: 'Fondamento', ;
    color: white;
    text-shadow: 1px 0px 1px black, 0 0 5px #b50d29, 0 0 5px #b50d29;
}
h2 {
  font-family: 'Fondamento', ;
  color: white;
  text-shadow: 1px 0px 1px black, 0 0 5px #b50d29, 0 0 5px #b50d29;
}
hr{
  height:2px;
  border-width:auto;
  color:#b50d29;
  background-color:#b50d29;
}
h3{
  font-family: 'Fondamento', ;
  color: white;
  text-shadow: 1px 0px 1px black, 0 0 5px #b50d29, 0 0 5px #b50d29;
}
p{
  font-size: 22px;
}
@media  screen and (min-width: 480px) {
  .container {
    font-size: 20px;
  }
}

/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media  screen and (max-width: 600px) {
  .container {
    font-size: 20px;
  }
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
hr{
  color: red;
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

@media  screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
@media  screen and (max-width: 600px) and (min-width: 480px){
   img {

   width: 100%;
     height: 100%; /* 5px rounded corners */
  }
}

  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
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

.container-fluid{
  background-color: #c7bdb1;
}
.container {
    border: 1px solid #e6e6e6;
    padding: 10px;
    box-shadow: 7px 9px #b3b3b3;
    font-family: 'Nunito', sans-serif;
}
.container .row footer-content hidden-xs{
  position: fixed;
   
   bottom: 0;
   width: 100%;
        }
        .button {
  text-align: center;
  cursor: pointer;
  outline: none;
  box-shadow: 0 9px #b5aeae;
}

.button:active {
  box-shadow: 0 5px  #88848c;
  transform: translateY(1px);
}
        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #b50d29;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 60px;
}

#myBtn:hover {
  opacity: 0.8
}
     
</style>
</head>
<body>
 
        <div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
  <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div>
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="" title="Home">
               <img src="images/header1.jpeg" alt="Home" style="">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link sactive" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link" href="#">Crime Awareness</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Resources</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li> 
      <li></li>
    </ul>
  </div> 

   
</nav>
<br>

    <div class="container" style="background: white;">  
    <h1 class="Display-1">Cyber Crimes</h1>
    <hr >
    <div class="row">
        <div class="col-md-8">
                         <br>
             One finds laws that penalise cyber-crimes in a number of statutes and even in regulations framed by various regulators. The Information Technology Act, 2000 ("IT Act") and the Indian Penal Code, 1860 ("IPC") penalise a number of cyber-crimes and unsurprisingly, there are many provisions in the IPC and the IT Act that overlap with each other.</p>
                      </div>
        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTrTrDPcReuMBBU-lEn_fC0LGjCMomOf-B22A&usqp=CAU" width="70%;" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
        </div>
    </div>
    <div class="row">
<div class="col-md-12">
    <h2>Definition of Cyber Crime in Indian Penal Code</h2>
    <hr>
      <p>The word "cyber" is slang for anything relating to computers, information technology, internet and virtual reality. Therefore, it stands to reason that "cyber-crimes" are offences relating to computers, information technology, internet and virtual reality.<br>
    </p>
    
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Types of Cyber Crime under IPC</h2>
    <hr>
      <ol>
    <li>Sending threatening messages by email - Sec 503 IPC.</li>
<li>Sending defamatory messages by email - Sec 499 IPC.</li>
<li>Forgery of electronic records - Sec 463 IPC.</li>
<li>Bogus websites, cyber frauds - Sec 420 IPC.</li>
<li>Email spoofing - Sec 463 IPC.</li>
<li>Web-Jacking - Sec. 383 IPC.</li>
<li>E-Mail Abuse - Sec. 500 IPC.</li>
          <li>Hacking</li>
          <li>Child pornography and Abuse</li>
          <li>Privacy or Theft</li>
        </ol>
  </div>
</div>
  <h2>Causes of Cyber Crimes</h2>
<hr>
<div class="row">
    <div class="col-md-8">
        <p>Cybercriminals always opt for an easy way to make big money. They target rich people or rich organizations like banks, casinos, and financial firms where a huge amount of money flows daily and hack sensitive information.</p> 
</div>
</div>
    <div class="row col-md-12">
        <h3>
           Easy to access 
        </h3>
        <p>
            The problem behind safeguarding a computer system from unauthorized access is that there are many possibilities of breach due to the complex technology. Hackers can steal access codes, retina images, advanced voice recorders, etc. that can fool biometric systems easily and bypass firewalls can be utilized to get past many security systems.
             </p>
        <h3>Capacity to store data in comparatively small space </h3>
        <p>
           The computer has the unique characteristic of storing data in a very small space. This makes it a lot easier for the people to steal data from any other storage and use it for their own profit.
        </p>
        <h3> Complex </h3>
        <p>
           The computers run on operating systems and these operating systems are programmed of millions of codes. The human mind is imperfect, so they can do mistakes at any stage. Cybercriminals take advantage of these gaps.
        </p>
        <h3>Negligence</h3>
        <p>Negligence is one of the characteristics of human conduct. So, there may be a possibility that protecting the computer system we may make any negligence which provides cyber-criminal access and control over the computer system.</p>
        <h3>Loss of evidence</h3>
        <p>he data related to the crime can be easily destroyed. So, Loss of evidence has become a very common & obvious problem which paralyzes the system behind the investigation of cyber-crime.</p>
        
   </div>
   <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Cyber Crime(Sec.77A):</h2>
       <hr>
        <p>
          Section 77A of the IT Act provides that, subject to certain exceptions, all offences under the IT Act for which the punishment is imprisonment for a term of 3 (three) years or less, are compoundable. ... Most of the cyber-crimes covered under the IT Act are punishable with imprisonment of 3 (three) years or less.
        </p>
     </div>
     <div class="col-md-6">
      <br>
       <img src="https://www.jagranjosh.com/imported/images/E/Articles/Cyber-Crime-Causesa.jpg" width="90%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
     </div>
   </div>
   <h1>How to Tackle Cyber Fraud (Safety Measures)</h1>
   <hr>
   <br>
   <h2>Use Strong Passwords</h2>
   <br>
  <div class="row">
  <div class="col-md-4">
     <img src="https://media.threatpost.com/wp-content/uploads/sites/103/2019/11/20084407/password.png" width="100%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-6">
  <p>
     Maintain different password and username combinations for each account and resist the temptation to write them down.
  </p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6">
    <h2>Be social media savvy</h2>
    <p>
      Be sure to keep your social networking profiles (Facebook, Twitter, YouTube, etc.) are set to private. Be sure to check your security settings. Be careful of what information you post online. Once it is on the Internet it is there forever.
    </p>
  </div>
   <div class="col-md-6">
    <br>
    <br>
    <img src="https://resize.hswstatic.com/w_907/gif/incognito-browser.jpg" width="90%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
</div>
<br>
<h2>Secure your Mobile Devices</h2>
  <br>
<div class="row">
  <div class="col-md-6">
    <img src="https://blog.hotspotshield.com/wp-content/uploads/2013/08/mobile-security-apps.png" width="60%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-6">
    <p>
     Many people are not aware that their mobile devices are also vulnerable to malicious software, such as computer viruses and hackers. Be sure to download applications only from trusted sources.
    </p>
  </div>
</div>
<br>
<h2>Protect your data</h2>
<br>
<div class="row">
  <div class="col-md-8">
    <p>
      Protect your data by using encryption for your most sensitive files such as financial records and tax returns. A person can stay one step ahead of the hacker by getting information about the scams and hacking styles on the Internet.
    </p>
  </div>
  <div class="col-md-4">
    <img src="https://www.aureon.com/webres/Image/resources/article/IT-Encrypt-Your-Data.png" width="90%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
</div>
<br>
    <h2>Protect your identity online</h2>
    <br>
    <div class="row">
  <div class="col-md-4">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTKsJsvf9wEuc5VrgJ3DvygH4FfAzjZLs3rUg&usqp=CAU" width="100%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-8">
    <p>
     When it comes to protecting your identity online it is better to be too cautious than not cautious enough. It is critical that you be cautious when giving out personal ID such as your name, address, phone number, and/or financial information on the Internet. Be certain to make sure websites are secure when making online purchases, etc. This includes enabling your privacy settings when using/accessing social networking sites.
  </div>
</div>
    <br>
    <h2>Protect your computer with security software</h2>
    <br>
    <div class="row">
  <div class="col-md-4">
    <img src="https://miro.medium.com/max/2800/1*cP7MHHa7OZUcE7K9Jw0M2g.png" width="100%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-8">
    <p>
     Several types of security software are necessary for basic online security. Security software essentials include firewalls and antivirus programs. A firewall is usually your computer’s first line of defense. It controls who and what can communicate with your computer online. 
    </p>
  </div>
</div>
    <br>
    <h2>Parental Control</h2>
    <br>
    <div class="row">
  <div class="col-md-4">
    <img src="https://www.newznew.com/wp-content/uploads/2019/12/android-parental-control-app.jpg" width="100%" style="box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
  </div>
  <div class="col-md-8">
    <p>
    In the era of online technology, parents should monitor all the activities of their children online. Giving adequate privacy to children would be problematic. Parents need to be cautious and should keep an eye on browser history and email accounts regularly. A better way of handling this is by enabling parental control in mobile apps, browsers, and at the router level so that they will be able to access only the secured sites. This will keep the children safe from online fraud. Many apps like Netflix, Amazon Prime, youtube offer kids-only personalized content to protect children from wrongdoings.
    </p>
  </div>
</div>
</div>
    <button id="myBtn" title="Go to top"  style="font-size:25px;color:white">Register</button>
        
    <br> 
      <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "block";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
<br>
  <i onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-angle-double-up" style="font-size:36px;color:white"></i>
        <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
  </div>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>



</body>
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/cyber.blade.php ENDPATH**/ ?>