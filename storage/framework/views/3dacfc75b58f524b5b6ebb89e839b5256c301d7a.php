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
   <a href="helpline">Helpline No.</a>

  <a href="#about">About</a> 
</div>
<br>

    <div class="container" style="background: white;">  
    <h1 class="Display-1">Drug Related Crimes</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <p>
              A drug-related crime is a crime to possess, manufacture, or distribute drugs classified as having a potential for abuse (such as cocaine, heroin, morphine and amphetamines). Drugs are also related to crime as drug trafficking and drug production are often controlled by drug cartels, organised crime and gangs. Drug abuse and addiction is associated with drug-related crimes.
            </p>   
            <p>
             Research carried out on drug-related crime found that drug misuse is associated with various crimes that are in part related to the feelings of invincibility, which can become particularly pronounced with abuse. Problematic crimes associated include shoplifting, property crime, drug dealing, violence and aggression and driving whilst intoxicated.
            </p>
            </div>
        <div class="col-md-4">
            <img src="images\drug\drugs.jpg" style="width: 100%; height: 97%; border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
        </div>
    </div>
    
   <h1> Various Types Of Drugs Related Crimes:</h1>
  <hr>
   <h2>Drugs Manufacturing:</h2>
   <br>
  <div class="row">
  <div class="col-md-6">
    
     <img src="images\drug\drug-manufacturing.jpeg"  style="width: 100%; height: 83%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
  <div class="col-md-6">
    <p>
      Another type of drug crime is drug manufacturing, involving any step of the production process of an illegal drug. The delivery of any illicit drug is also considered a crime under federal and state laws. Usually prosecutors must prove intent to manufacture and possession in order to convict an alleged drug manufacturer. If convicted, a drug manufacturer could face fines and prison time.
    </p>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-6">
    <h2>Drugs Trafficking and Distribution:</h2>
     <p>
       Drug trafficking and distribution laws make it illegal to sell, transport, and import illegal controlled substances like marijuana and cocaine. As a felony, drug trafficking and distribution is a more serious crime than just drug possession because it usually involves the transportation of a large amount of drugs. However, merely possessing large amounts of an illegal drug may lead police to believe that you intended to sell the narcotics and they may charge you with distribution. If convicted of drug trafficking, the sentence can be anywhere from 3 years to life in prison.
     </p>
  </div>
   <div class="col-md-6">
    <img src="images\drug\trafficking.jpeg"  style="width: 100%; height: 83%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
</div>
<h2>Drugs Dealing: </h2>
  <br>
<div class="row">
  <div class="col-md-6">
    <img src="images\drug\dealing.jpg"  style="width: 100%; height: 83%;  border: 2px ;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
  <div class="col-md-6">
    <p>
      "Drug dealing" generally refers to the selling of illegal drugs on a smaller scale. It's important to remember that trafficking and dealing are defined differently from state to state and under federal law. Since drug dealing usually consists of one person selling a small amount, the punishment is less severe than selling larger amounts. 
    </p>
  </div>
</div>

<br>
<h1>Preventive Measures (Safety Tips)</h1>
<hr>
  <div class="row">
    <div class="col-md-12">
      <ul>
        <li>Insist on healthy lifestyles in the form of healthy meals. </li>
        <li>Insist on regular and varied family time. </li>
        <li>Get the kids involved in family projects. </li>
        <li>Cut the electronics down a notch</li>
        <li>Talk to the kids about drugs. </li>
        <li>Be open and honest with kids about previous drug abuse of your own. </li>
        <li>Vet the friends and social circles of the kids. </li>
        <li>Insist that the community gets involved in drug abuse prevention. </li>
        <li>Get the kids involved in extracurricular activities.</li>
      </ul>
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
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/drug.blade.php ENDPATH**/ ?>