<!DOCTYPE html>
<html>
<head>
  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
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
</style>
</head>
<body>
<div class="top-bar hidden-xs" style="background-color: #b50d29; width: 100%;" >
            <div class="container-fluid" id="top">
                <div class="row">
                    
                    <div class="col-md-12 top-nav pull-right" style="text-align:right; background-color: #b50d29;">

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
    <img src="images\header.png" alt="BPRD" width="100%">
  </center>
  <div class="topnav" id="myTopnav" style="margin-top: 8px;">
  

  <a href="#home">Home</a>
  <a href="#news" class="active" >Awareness</a>
   <a href="#about">Helpline No.</a>

  <a href="#about">About</a> 
</div>
<br>

   <div class="container" style="background: white;">  
    <h1 class="Display-1">Kidnapping</h1>
    <h4>(Sec. 359 IPC) </h4>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>The term 'Kidnapping' literally means, "carrying away a person against his/her will or against the will of the guardian in case of a minor".<br>
              <br>
              The term 'Kidnapping' is derived from the word 'kid', which means child, and 'nap', which means, "to steal". The word 'kidnapping' means "child stealing". However, it is not confined or restricted to child stealing. It extends to all.</p>
                      </div>
        <div class="col-md-4">
               <img src="images\kidnapping\kidnapper.jpg" style="width: 100%; height: 97%; border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;" >       
        </div>
    </div>
    <div class="row">
<div class="col-md-12">
    <h2>Definition of kidnapping in Indian Penal Code</h2>
    <hr>
    <p>
      In criminal law, kidnapping is the taking away or transportation of a person against the persons will, usually to hold the person in false imprisonment, a confinement without legal authority. This may be done for ransom or in furtherance of another crime, or in connection with a child custody dispute.
    </p>
    <p>
      Whoever takes or entices any minor under sixteen years of age, if a male, or under eighteen years of age, if a female, or any person of unsound mind out of the keeping of the lawful guardian of such minor or person of unsound mind, without the consent of such guardian, is said to kidnap such minor or person from lawful guardianship.
    </p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Kinds of Kidnapping (Sec.359):</h2>
    <hr>
    <p>According to Sec.359, kidnapping is of two types:</p>
    <ol>
      <li>Kidnapping from India (Sec.360)</li>
      <li>Kidnapping from lawful guardianship (Sec.361)</li>
    </ol>
    <h3>1. Kidnapping from India (Sec.360)</h3>
       <p>It means carrying away a person (conveying a person) beyond the territorial limits of India against its consent. It is an offence under Sec.360, if a boy below the age of 16 years and a girl below the age of 18 years is conveyed beyond the limits of India even with his/her consent.</p>
    <h3>2. Kidnapping from lawful guardianship (Sec.361)</h3>
       <p>According to Sec.361 IPC enticing or taking away of a minor girl below 18 years of age, or a minor make below 16 years of age or any person of unsound mind from the lawful custody without any consent of such guardian, is called "Kidnapping".</p>
       <p>
       There is an exception to this Section, which provides that this Section does not extend to the act any person who in good faith believes himself to be entitled to the lawful custody of such child, unless such act is committed for an immoral or unlawful purpose.</p>
  </div>
</div>
  <h2>Causes of Kidnapping</h2>
<hr>
<div class="row">
    <div class="col-md-8">
    
    
            <h3>Unemployment</h3>
        <p>
            Studies show that The high unemployment rate in many countries has forced citizens to find other ways to make money—and some of those ways are illegal. Kidnapping a rich person can be a lucrative business. A cash-strapped unemployed person may believe that when he kidnaps someone who is rich, he may be able to become rich himself.</p>

        
</div>
<div class="col-sm-4" style="padding-top: 40px;">
    <img src="images\kidnapping\kidnapping.jpg" style="width: 100%; height: 83%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
   </div>
</div>
    <div class="row col-md-12">
      <h3>Poverty</h3>
        <p>
            Poverty can propel people toward crime as a way to make ends meet. Sometimes, a person who is poor might believe that kidnapping or other illegal acts could provide the necessary money to start a new life—a life that will no longer involve crime.
        </p>
        <h3>
            Illiteracy
        </h3>
        <p>
            Illiteracy is the inability to read or write. When people know how to read and write, they can gain the skills they need in order to become educated, get a job, and live a productive life. Literacy and education can also be an important foundation upon which to build a deeper understanding of moral judgment and decision making.
             </p>
        <h3>Politics </h3>
        <p>
           Corrupt politicians may arrange for the kidnapping of their opponents. Sometimes, they do this so that their opponents will make concessions or change their votes on the issues.
        </p>
        <h3> Greed </h3>
        <p>
            Some people are not contented with what they have and wish they could buy more and more things—whether it's fancy clothes, cars, houses, or jewelry. This kind of persons may turn to crime to make more money. A wicked businessman can kidnap his business rival for a large ransom to become richer.
        </p>
        
   </div>
   <div class="row">
     <div class="col-md-6">
       <h2>Punishment for Kidnapping (Sec.363):</h2>
       <hr>
        <p>
          Section 363 prescribes punishment for kidnapping. Whoever kidnaps any person from India or from lawful guardianship shall be punished with imprisonment up to 7 years and also liable for fine.
        </p>
     </div>
     <div class="col-md-6">
      <br>
       <img src="images\kidnapping\punishment.jpg" height="250" style=" width: 100%; height: 80%;  border: 2px ; box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
     </div>
   </div>
   <h1>Kidnapping Preventions  (Safety Measures)</h1>
   <hr>
   <br>
   <h2>Do Not Accept Rides Offered By Strangers</h2>
   <br>
  <div class="row">
  <div class="col-md-6">
     <img src="images\kidnapping\lift.jpg"  style=" width: 100%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
  <div class="col-md-6">
  <p>
    Once you get into a stranger's car, you are at their mercy. They could either incapacitate you or hold you hostage and you might not have an opportunity to defend yourself.
  </p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6">
    <h2>Secure Your Home</h2>
    <p>
      Kidnappers don't always snatch their victims off the streets. They can sometimes begin the attack right in your own home. To prevent kidnapping in your own property, close your doors and gates and install locks or alarms. The more secure you are inside, the more difficult you will be to abduct.
    </p>
  </div>
   <div class="col-md-6">
    <br>
    <br>
    <img src="images\home.jpg" style="width: 90%; height: 75%; border: 2px;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
</div>
<br>
<h2>Let Someone Know Where You're Going</h2>
  <br>
<div class="row">
  <div class="col-md-6" style=" padding-left: 30px;">
    <img src="images\kidnapping\inform.jpg"   style=" width: 90%;  height: 76%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
  <div class="col-md-6">
    <p>
      If you must meet a new acquaintance, make sure someone knows where you're going and who you're meeting. Leave word with a family member or friend where you're headed and if possible, give the name of the person you're about to meet and other details you might know.
    </p>
     <p>Meet them in a crowded place or somewhere other people can see you. Heavy human traffic is a major deterrent for kidnappers and may just save your life.
    </p>
  </div>
</div>
<br>
<h2>Tell Your Child to Never Talk to Strangers</h2>
<br>
<div class="row">
  <div class="col-md-8">
    <p>
      Train your children to avoid strangers, even if they seem friendly and offer gifts. If a stranger asks for help, tell your child to refuse and to call the attention of an adult immediately. If a gift is being offered, tell them not to accept anything.
    </p>
  </div>
  <div class="col-md-4">
    <img src="images\kidnapping\stranger.jpg" style="width: 100%; height: 80%; border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;" >
  </div>
</div>

</div>
</div>
    
<br>
 <button class="btn btn-primary" disabled style="float: right; width: 200px; padding: 10px;">
    <span class="spinner-grow spinner-grow-sm">
    </span>
    Register     >>
  </button>

<!--footer--->
<br>
<br>


  <div class="container-fluid" style="bottom: 0;">
    <div class="row footer-content hidden-xs">
        <div class="col-md-6">                 
            <h5 class="small text-info">Bureau Of Police Research And Development</h5>
            <div class="row">
                <div class="col-sm-4">
                   Crime Awareness
                </div>
                <div class="col-md-3 col-sm-3">
                   Track Complaint 
                </div>
                <div class="col-md-4 col-sm-4">
                   
                </div>

            </div>                 
        </div>
        <div class="col-md-6">                 
            <h5  class="float-right small text-info">Other Websites</h5>
            <div class="row">            
                <div class="col-sm-5">
                   
                        
                    </ul>
                </div>
                <div class="col-sm-5">
                   
                </div>
            </div>                 
        </div>

    </div>
</div>
<div class="container-fluid" style="background-color: #b50d29;">
    <div class="row footer-bottom">
        <div  style ="padding-right:0px;margin-right:0px; text-align: center"class="col-md-10">
            Site developed and maintained by Team Code Gear, GITAM, Haryana. Send your feedbacks to xyz@cimereporting.in 
        </div>

</body>
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/kidnapping.blade.php ENDPATH**/ ?>