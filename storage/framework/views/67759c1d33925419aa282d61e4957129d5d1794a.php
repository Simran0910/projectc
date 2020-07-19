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
  font-family: 'Fondamento',;
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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Emergency Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Report crime</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link sactive" href="/">Crime Awareness</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Resources</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="helpline">Helpline</a>
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
    <h1 class="Display-1">Assault</h1>
    <h4>(Sec. 351 IPC) </h4>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>Assault is often defined as an attempt to injure to someone else, and in some circumstances can include threats or threatening behavior against others. One common definition would be an intentional attempt, using violence or force, to injure or harm another person.<br>
              An assault is the act of inflicting physical harm or unwanted physical contact upon a person or, in some specific legal definitions, a threat or attempt to commit such an action. It is both a crime and a tort and, therefore, may result in criminal prosecution, civil liability, or both. </p>
            </div>
        <div class="col-md-4">
            <img src="images\assault\assault.jpg" style=" width: 95%; height: 75%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
        </div>         
    </div>
<div class="row">
  <div class="col-md-12">
    <h2>Assault Requirements:</h2>
    <hr>
    <ol>
      <li>Act Requirement</li>
      <li>Intent Requirement</li>
    </ol>
    <h3>1. Act Requirement</h3>
       <p>Even though contact is not generally necessary for an assault offense, a conviction for assault still requires a criminal "act". The types of acts that fall into the category of assaults can vary widely, but typically an assault requires an overt or direct act that would put the reasonable person in fear for their safety. Spoken words alone will not be enough of an act to constitute an assault unless the offender backs them up with an act or actions that put the victim in reasonable fear of imminent harm.</p>
    <h3>2. Intent Requirement</h3>
       <p>In order commit an assault an individual need only have "general intent." What this means is that although someone can't accidentally assault another person, it is enough to show that an offender intended the actions which make up an assault. So, if an individual acts in a way that's considered dangerous to other people that can be enough to support assault charges, even if they didn't intend a particular harm to a particular individual. Moreover, an intent to scare or frighten another person can be enough to establish assault charges, as well.</p>
  </div>
</div>
<h1>Battery</h1>
<hr>
   <div class="row">
        <div class="col-md-8">
            <p>Battery is the intentional offensive or harmful touching of another person without their consent. Under this general definition, a battery offense requires all of the following:</p>
            <ul>
              <li>Intentional touching;
              </li>
              <li>The touching must be harmful or offensive;</li>
              <li>No consent from the victim.</li>
            </ul>
                      </div>
        <div class="col-md-4">
            <img src="images\battery.jpg" style=" width: 85%; height: 75%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
        </div>
    </div>
<div class="row">
  <div class="col-md-12">
    <h2>Battery Requirements:</h2>
    <hr>
    <ol>
      <li>Act Requirement</li>
      <li>Intent Requirement</li>
    </ol>
    <h3>1. Intent Requirement</h3>
       <p>It may come as some surprise that a battery generally does not require any intent to harm the victim (although such intent often exists in battery cases). Instead, a person need only have an intent to contact or cause contact with an individual. Additionally if someone acts in a criminally reckless or negligent manner that results in such contact, it may constitute an assault. As a result, accidentally bumping into someone, offensive as the "victim" might consider it to be, would not constitute a battery.</p>
    <h3>2. Act Requirement</h3>
       <p>he criminal act required for battery boils down to an offensive or harmful contact. This can range anywhere from the obvious battery where a physical attack such as a punch or kick is involved, to even minimal contact in some cases. Generally, a victim doesn't need to be injured or harmed for a battery to have occurred, so long as an offensive contact is involved. In a classic example, spitting on an individual doesn't physically injure them, but it nonetheless can constitute offensive contact sufficient for a battery. Whether a particular contact is considered offensive is usually evaluated from the perspective of the "ordinary person."</p>
  </div>
</div>
   <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Assault  (Sec.352):</h2>
       <hr>
        <p>
          When someone assaults or uses Criminal force another person based on sudden and grave provocation by another person, he may be sentenced to prison time of a term which may be extended for a term of three months or a fine of up to INR 500, or both. It is defined under Section 352 of the Indian Penal Code.
        </p>
     </div>
     <div class="col-md-6">
      <br>
      <br>
      <br>
       <img src="images\kidnapping\punishment.jpg" style=" width: 85%; height: 75%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%">
     </div>
   </div>
   <h1>Preventions  (Safety Measures)</h1>
   <hr>
   <br>
   
  <div class="row">
    <div class="col-md-12">
      <h2>Self-Defense</h2>
   <br>
  <p>
    Self-defense is probably the most common defense used in assault and battery cases. In order to establish self-defense, an accused must generally show:
  </p>
  <ul>
    <li>a threat of unlawful force or harm against them</li>
    <li>a real, honest perceived fear of harm to themselves (there must be a reasonable basis for this perceived fear)</li>
    <li>no harm or provocation on their part</li>
    <li>there was no reasonable chance of retreating or escaping the situation.</li>
  </ul>
  <br>
  <h2>Defense of Others</h2>
  <br>
  <p>
    This defense is very similar to that of self-defense, with the only difference being that the individual must have an honest and real perceived fear of harm to another person. The limitations that apply to self-defense apply similarly to defending others, and the accused must have had reasonable grounds for their perceived fear in order to establish this defense.
  </p>
  <br>
  <h2>Defense of Property</h2>
  <br>
  <p>
    A defendant in an assault/battery case may be able to claim that they acted only in defense of their property against being invaded or illegally withheld. It's important to note that the availability and extent of this defense varies from state to state.
  </p>
  <br>
  <h2>Consent</h2>
  <br>
  <p>
    Consent may be available as a defense to an assault/battery charge, depending on the jurisdiction. Where available, if an individual has consented voluntarily to a particular act, then that same act generally cannot be asserted to constitute an assault and battery. But if the extent of the act exceeds the permission provided, it can still provide grounds for assault and battery charges. Also, it should be noted that courts scrutinize consent as a defense closely, and tend to find that harmful actions, even if consented to, violate public policy and should still be punished under assault, battery, or other laws.
  </p>
  </div>
</div>
<br></div>
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
          function tfunction(){
              document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
          }
  </script>


<br>

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
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/assault.blade.php ENDPATH**/ ?>