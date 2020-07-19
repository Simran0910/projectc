<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    
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
@media screen and (min-width: 480px) {
  .container {
    font-size: 20px;
  }
}

/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
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

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
@media screen and (max-width: 600px) and (min-width: 480px){
   img {

   width: 100%;
     height: 100%; /* 5px rounded corners */
  }
    body{
        font-size: 15px;
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
    <h1 class="Display-1">Crime Against Women</h1>
    <h4></h4>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>The differnce between a Man and a Woman has certainly taken a form of a Monster which is now feeding on the Female strata of Society.<br>
              <br>
              The Indian Penal Code, 1860,  lays down the provisions to penalise the culprit for the heinous offences against women. Various sections under IPC specifically deals with such crimes.</p>
              </div>
        
        <div class="col-md-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtSnLVELbu9yFYEXVgaOHyN7kpJsSelPGpgw&usqp=CAU" style="width: 100%; height: 97%; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" >
        </div>
    </div>
    <div class="row">
<div class="col-md-12">
    <h2>Sections Under IPC for Crime Against Women</h2>
    <hr>
   <ol>
            <li>Acid Attack (Sections 326A and 326B)</li>
            <li>Rape (Sections 375, 376, 376A, 376B, 376C, 376D and 376E) </li>
 <li>Attempt to commit rape (Section 376/511)</li>
 <li>Kidnapping and abduction for different purposes (Sections 363–373)</li>
  <li>Murder, Dowry death, Abetment of Suicide, etc. (Sections 302, 304B and 306)</li>
 <li>Cruelty by husband or his relatives (Section 498A)</li>
 <li>Outraging the modesty of women (Section 354)</li>
 <li>Sexual harassment (Section 354A)</li>
 <li>Assault on women with intent to disrobe a woman (Section 354B)</li> 
 <li>Voyeurism (Section 354C)</li>
 <li>Stalking (Section 354D)</li>
 <li>Importation of girls upto 21 years of age (Section 366B)</li>
 <li>Word, gesture or act intended to insult the modesty of a woman (Section 509)</li>
            </ol>
</div>
</div>

  <h2>Causes of Crime Against Women</h2>
<hr>
<div class="row">
    <div class="col-md-8">
    
    
            <h3>Gender Disparity</h3>
        <p>
            It is one of the deep rooted cause of violence against women that put women at risk of several forms of violence.
            Discriminatory gender norms and gender stereotypes results into structural inequality.</p>

        <h3>Psychiatric Morbidity</h3>
        <p>
           Generally refers to the incidence of both physical and psychological deterioration as a result of a mental or psychological condition, generally caused due to the consumption of alcohol.
        </p>
        <h3>Sociodemographic factors</h3>
        <p>Patriarchy has been cited as the main cause of violence against women. Where women have a higher economic status than their husbands and are seen as having sufficient power to change traditional gender roles, risk for violence is high.</p>
        <h3>Family factors</h3>
        <p>Exposure to harsh physical discipline during childhood and witnessing the father beating the mother during childhood is a predictor of victimization and perpetration of violence against wife in adulthood.</p>
        <h3>Traditional and cultural practices</h3>
        <ul>
        <li><b>Female genital mutilation:</b> Can lead to death, infertility, and long-term psychological trauma combined with increased physical suffering.</li>
<li><b>Acid attacks:</b> Acid attacks have emerged as a cheap and readily accessible weapon to disfigure and sometimes kill women and girls for reasons as varied as family feuds, inability to meet dowry demands, and rejection of marriage proposals.</li>
<li><b>Killing in the name of family honour:</b> In several countries of the world including Bangladesh, Egypt, Jordan, Lebanon, Pakistan, Turkey, and India, women are killed to uphold the honour of the family due to varied reasons such as-alleged adultery, premarital relationship (with or without sexual relations), rape, falling in love with a person the family disapproves, which justify a male member of the family to kill the woman concerned.</li>
<li><b>Early marriages:</b> Early marriage with or without the consent of the girl, constitutes a form of violence as it undermines the health and autonomy of millions of girls.</li>
            </ul>
        <h3>Judiciary and law enforcement machinery</h3>
        <p>An insensitive, inefficient, corrupt and unaccountable judicial system and law enforcement machinery fails to deter against various forms of crimes.</p>
        <h3>Sociocultural factors disfavouring women</h3>
        <p>Stereotypes of gender roles have continued over the ages.</p>
        <ul>
        <li>The primary roles for women have been marriage and motherhood.</li>
        <li>Women must marry because an unmarried, separated or divorced status is a stigma</li>
        <li>The custom of dowry is still prevalent in Indian marriages.</li>
        </ul>
    </div>
<div class="col-sm-4" style="padding-top: 40px;">
  <br>
    <img src="https://thelogicalindian.com/h-upload/2020/01/27/154099-haryana-newfb.jpg" style="width: 100%; height: 30%;box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" >
   </div>
</div>
       <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Several Crimes Against Women</h2>
       <hr>
             
         <ol>
           <li><b>Acid Attacks:</b>The minimum punishment is 10 years' imprisonment. It can extend up to life imprisonment with fine.</li>
           <li><b>Rape:</b>Except in certain aggravated situation the punishment will be imprisonment not less than seven years but which may extend to imprisonment for life, and shall also be liable to fine.</li>
           <li><b>Kidnapping for Several Reasons:</b>Shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine.</li>
            <li><b>Murder, Dowry death, Abetment of Suicide, etc.:</b>Punishable with a minimum sentence of imprisonment for 7 years and a maximum imprisonment for life.</li>
            <li><b>Sexual harassment:</b>Penalties range from one to three years imprisonment and/or a fine.</li>
            <li><b>Stalking:</b>Whoever commits the offence of stalking shall be punished on first conviction with imprisonment of either description for a term which may extend to three years, and shall also be liable to fine; and be punished on a second or subsequent conviction, with imprisonment of either description for a term which may extend to five years, and shall also be liable to fine.</li>
            <li><b>Importation of Girls under 21 years:</b>Shall be punishable with imprisonment which may extend to ten years and shall also be liable to fine.</li>
            </ol>
     </div>
     <div class="col-md-6">
      <br>
       <img src="https://www.unido.org/sites/default/files/inline-images/Vienna_Discussion_Forum_2019.png" style="width: 100%; height: 70%; margin-top:70px; box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:5%" >
     </div>
   </div>
   <h1>Safety Measures for Women</h1>
   <hr>
   <br>
        <ol>
  <li>Educate yourself on violence against women; learn the facts and the prevalence</li>
<li>Believe survivors</li>
<li>Contact your local legislators and political leaders and advocate for tougher laws against perpetrators of violence against women</li>
<li>Know that dating violence & sexual assault affects 1 in 3 girls and 1 in 6 boys by the time they are 18</li>
<li>Contact your local school board and ask them to address sexual harassment in schools</li>
<li>Speak out against all forms of violence</li>
<li>Question gender roles and assumptions</li>
<li>Respect and embrace diversity</li>
<li>Respect a person’s-even a child’s- right to say no</li>
<li>Respect your partner’s right to disagree or have their own opinion</li>
<li>Don’t blame victims, and reinforce that rape is never the victim’s fault</li>
<li>Strive for equality for everyone</li>
<li>Understand that putting boys and men down by calling them "ladies" and "girls" hurts everyone</li>
<li>Speak out against the media’s portrayal of violence</li>
<li>Learn how racism, sexism and homophobia are connected</li>
<li>Acknowledge that it does happen in your own community</li>
<li>Learn about power and control tactics</li>
<li>Attend Take Back the Night events</li>
<li>Ask permission before pursuing physical or sexual contact with someone</li>
<li>Realize that sexual violence is about power and control, not sex</li>
<li>Teach kids that respect is the minimum in a relationship, and lead by example</li>
<li>Advocate for victim’s rights</li>
<li>Ask your priest, rabbi, pastor, cleric, or spiritual leader to hold a special service to raise awareness and promote safety for victims and accountability for perpetrators.</li>
<li>Avoid engaging in, supporting or encouraging sexual harassment by speaking up when you see or hear it</li>
<li>Teach kids that violence will not solve problems</li>
<li>Know that most sex offenders aren’t strangers · 86% are known to their victim</li>
<li>Avoid making threats or using coercion and pressure to get sex</li>
<li>Be courageous; don’t be afraid to speak up for those who have lost their voice or dignity</li>
<li>Praise women and girls for something other than the way they look</li>
<li>Speak out against racist, sexist or homophobic jokes</li>
<li>Advocate for more youth violence prevention programs</li>
<li>Get others to speak out against sexual violence</li>
<li>Stop your sexual advances if the other person says no and encourage others to do the same</li>
<li>Avoid buying music that glorifies sexual violence and the objectification of women and girls</li>
<li>Urge your local radio stations to stop playing music that contains violent lyrics</li>
<li>Applaud others who speak out against violence and oppression</li>
<li>Invite a speaker from HAVEN to share with your class, work or community group</li>
<li>Pledge to never commit or condone acts of violence</li>
<li>Stop yourself or others from taking advantage of someone who is intoxicated</li>
<li>Make a decision to become an active bystander by speaking up and calling for help when necessary</li>
<li>Respect the choices victims and survivors make to survive</li>
<li>Encourage your local college and universities to offer prevention education to students
<li>Empathize</li>
<li>Work toward eliminating oppression of all kinds</li>
<li>Think globally and act locally</li>
<li>Hold perpetrators accountable for disrespecting their partners when you see it or hear it</li>
<li>Engage others in discussions about violence against women</li>
<li>Learn about healthy boundaries and don’t be afraid to voice your feelings in your relationship</li>
<li>Notice when someone invades your boundaries</li>
<li>Report it if you witness sexual harassment in your school or workplace</li>
<li>Post awareness materials in restrooms and break rooms for easy & confidential accessibility</li>
<li>Celebrate all aspects of masculinity, including compassion and sensitivity</li>
            </ol>
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
</html>