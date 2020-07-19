<!DOCTYPE html>
<html>
<head>
  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>

.topnav {
  overflow: hidden;
  background-color: #1a75ff;
}
h1 {
    font-family: 'Fondamento', cursive;
    color: white;
    text-shadow: 1px 0px 1px black, 0 0 5px #b50d29, 0 0 5px #b50d29;
}
h2 {
  font-family: 'Fondamento', cursive;
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
  font-family: 'Fondamento', cursive;
  color: white;
  text-shadow: 1px 0px 1px black, 0 0 5px #b50d29, 0 0 5px #b50d29;
}
p{
  font-size: 22px;
}
@media  screen and (min-width: 480px) {
  .container {
    font-size: 22px;
  }
  li{
    font-size: 22px;
  }
}

/* If screen size is 600px wide, or less, set the font-size of <div> to 30px */
@media  screen and (max-width: 600px) {
  .container {
    font-size: 20px;
  }
  li{
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
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

@media  screen and (max-width: 600px) and (min-width: 480px){
   img {

   width: 100%;
     height: 100%; /* 5px rounded corners */
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
    <h1 class="Display-1" >Terrorist Financing Crime</h1>
    <hr>
    <div class="row">
        <div class="col-md-8">  
            <p>
             Terrorism financing is the provision of funds or providing financial support to individual terrorists or non-state actors.Most countries have implemented measures to counter terrorism financing (CTF) often as part of their money laundering laws. Some countries and multinational organisations have created a list of organisations that they regard as terrorist organisations, though there is no consistency as to which organisations are designated as being terrorist by each country

            </p>
            </div>
        <div class="col-md-4">
            <img src="images\terrorist.jpg" style="width: 95%; height: 71%; border: 2px solid  #00004d;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
        </div>
    </div>
    
   <h1> Money Laundering:</h1>
  <hr>
   <br>
  <div class="row">
  <div class="col-md-6">
    
     <img src="images\money-laundering.webp"  style="width: 100%; height:78%; border: 2px solid  #00004d;
    box-shadow: 7px 9px #b3f0ff; border-radius: 5%;">
  </div>
  <div class="col-md-6">
    <p>
     Terrorism financing and Money laundering are conceptual opposites. Money laundering is the process where cash raised from criminal activities is made to look legitimate for re-integration into the financial system, whereas terrorism financing cares little about the source of the funds, but it is what the funds are to be used for that defines its scope.
    </p>
  </div>
</div>

<br>
<h1>Preventive Measures (Safety Tips)</h1>
<hr>
  <div class="row">
    <div class="col-md-12">
      <ul>
      <li>Account transactions that are inconsistent with past deposits or withdrawals such as cash, cheques, wire transfers, etc.</li>
      <li>Transactions involving a high volume of incoming or outgoing wire transfers, with no logical or apparent purpose that come from, go to, or transit through locations of concern, that is sanctioned countries, non-cooperative nations and sympathizer nations.</li>
      <li>Unexplainable clearing or negotiation of third party cheques and their deposits in foreign bank accounts</li>
      <li>Structuring at multiple branches or the same branch with multiple activities.</li>
      <li>Corporate layering, transfers between bank accounts of related entities or charities for no apparent reasons</li>
      <li>Wire transfers by charitable organisations to companies located in countries known to be bank or tax havens.</li>
      
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
</html><?php /**PATH C:\laragon\www\CrimeUI\resources\views/terrorist.blade.php ENDPATH**/ ?>