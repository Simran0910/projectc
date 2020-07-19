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
    <h1 class="Display-1">White Collar Crime</h1>
    <hr >
    <div class="row">
        <div class="col-md-8">
            <p>White collar crime is a crime committed by the people who belongs to the higher class of society and are from the reputable group of society. This crime is committed during the course of their occupation. The people who are committing this crime have usually a better understanding of technology, their respective field, disciplines etc. White collar crimes are largely evolved from few years. And they are seen to be committed in large organizations that cover a large number of activities.</p>

                      </div>
        <div class="col-md-4">
               <img src="images\white-collar.jpg" style="width: 100%; height: 84%; 
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;" >       
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p> So we can say that these crimes are common to trade, commerce, education, health etc. As the criminal profile has changed a lot in few years the traditional crimes have partially switched by the white collar crimes in the country. The primary difference between the white and the blue crime is that the ordinary i.e. the criminals of blue crime are people of under-privileged section and upper class is involved in white collar crime and they commit the crime in a very organized manner. They maintain their respect in the society until the crime is discovered.</p>
      </div>
    </div>

    <h2>Common Types Of White Collar Crime In India:</h2>
<hr>
<div class="row">
    <div class="col-md-12">
    
    
            <h3>1) Bank Fraud:</h3>
        <p>
            Fraud is a crime committed with an intention to deceive and gain undue advantage. Bank Fraud is a fraud committed on the banks. It is committed by the fraudulent companies by making fake representations. It is also related to the manipulation of the negotiable instruments like cheque bouncing, securities, bank deposits etc. Bank fraud is concerned to the public at large because there is a relation of trust between the banks and the public. It is the most common type of white collar crime and also a corporate crime. It harms public as well as the government of the country.
          </p>
        <h3>2) Bribery: </h3>
         <p>
           Bribery is also a very common type of white collar crime. By bribery we means giving money or some goods to the person at a high position in return of a favor. In simple words bribery is when one man gives money to the other which is in authority. It is done for the purpose of insisting him to do something or to prevent him from doing something. It is the most common income of most of the public officials of our country.
         </p>  
         <h3>3) Cybercrime: </h3>
         <p>
           Cybercrime is the biggest cause leading to these type of crime in India. It is the latest problem prevailing in the cyber world. Cybercrime is the crime which is related to â€˜computer networksâ€™. With the rapid increase of advancement of technology there is also a rapid increase in the crime related to the technology. Cybercrime involves the persons who are expert in computer related technology. And it is committed against the victim directly or indirectly to cause a harm to his reputation or to harm in physical or mental way using internet, networks and other technological sources.
         </p>
         <p>
           Disclosure of confidential information can create privacy problems. Also cybercrime against women is also rising. By the use of telecommunication networks, mobile phones cyber stalking, sending obscene messages and pictures by criminals to women is also increasing.<br>
# Hacking,<br>
# Child pornography,<br>
# Copyright infringement,<br>
# Cyber terrorism,<br>
# Cyber stalking are some of common examples of cybercrime.

         </p>
</div>

</div>
<h1>Preventions  (Safety Measures)</h1>
   <hr>
  <div class="row">
    <div class="col-md-12">
      <ul>
        <li>Screen employees properly and timeously.</li>
         <li>Maintain a strict segregation of duties.</li>
          <li>Ensure you have a good, anonymous tip-off line.</li>
           <li>Prioritise an internal audit function – and make sure it is effective.</li>
            <li>Use powerful software to perform exception monitoring in real time.</li>
             <li>Provide employees with proper training.</li>
             <li>Develop and manage an ethical culture throughout the company.</li>

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
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/whitecollar.blade.php ENDPATH**/ ?>