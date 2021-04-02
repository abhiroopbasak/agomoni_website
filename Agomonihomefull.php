<?php
session_start();
// if($_SESSION['device']==1){
    
// }
// else{
//     $_SESSION['device']=0;
// }
if(isset($_SESSION['user']) && isset($_SESSION['pas'])){
    ?>
    <script>
        document.location='agomoni_update_profile.php';
    </script>    
    <?php
}
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
<script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
  </script>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>agomoni-home</title>

<link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
<script data-ad-client="ca-pub-5657296610960679" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<style>
  *{
    scroll-behavior: smooth;
  }
  body{
      background-color: #000000;
  }
  hr{
      margin-left: 5%;
      margin-right: 5%;
  }
  .navbar{
    margin-bottom: 0px;
  }
  .line button a{
    text-decoration: none;
  }
  #section1{
      margin-left: 0%;
      margin-right: 0%;
      height:80%;
    padding: 0px;
    
  }
  #section2,#section3,#section4{
    padding-bottom:50px;
  }
  .blur1{
    background-color: rgba(0,0,0,0);
  }
  q{
    color: white;
    padding-top: 160px;
    font-size: 20px;
  }
  li{
    color: white;
  }
  ::placeholder{
    color: white;
  }
   .jumbotron{
    background-image: url("img/jumbo.jpeg");
    image-rendering: center;
    background-size: 100% 100%;
    margin-bottom: 0px;
  }
  input[type=text]{
        height: 40px;
        width: 300px;
        padding-left: 20px;
        background-color: rgba(0,0,0,0.1);
        transition: none;
        color: white;
     }
      input[type=password]{
        height: 40px;
        width: 300px;
        padding-left: 20px;
        background-color: rgba(0,0,0,0.1);
        transition: none;
        color:white;
     }
     hr {
    height: 8px;
    padding-top: 1px;
    background-image: linear-gradient(90deg, yellow, transparent);
    margin-top: 0px;
    margin-bottom: 0px;
    border: 0;
    height: 1px;
}
h1,h2,h3,h4,h5,h6,p{
  color: white;
}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding-left: 5px;
  padding-top: 6px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: black;;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #838383;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #b6b6b6;
  outline: none;
  color:black;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
a{
  text-decoration: none;
  color: black;
}
a: hover{
  color: black;
  text-decoration: none;
}
button: hover{
  color: blue;
  text-decoration: none;
}
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

i{
  color:red;
}
#hide1{

display:none;

}
.jumbotron{
}
    .heading1 {
        color: #ff7e84;
        font-size: 60px;
        font-family: 'Montez', cursive;
        margin-top: 5px;
        margin-left:10px;
    }
    .heading2 {
        color: #ff7e84;
        font-size: 25px;
        font-family: 'Montez', cursive;
        margin-top: 3px;
        margin-left: 0px;
        margin-left:10px;
    }
    .cont{
        padding: 10%;
    }
    p{
        text-align: justify;
        text-justify: inter-word;
        font-size: 20px;
    }
    .forget{
  margin:10px !important;
}
.forget a{
  
  text-decoration:none;
  color:white;
}

.banner{
    padding: 5%;
}

.banner img{
    height: 800px;
    width: 100%;
}
</style>

<script data-ad-client="ca-pub-7316428934332522" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
  <body data-spy="scroll" data-target=".navbar" data-offset="100">
    <div class="row" style="background-color: #1c3048; margin: 0%;">
              <div class="col-xs-3 col-sm-3 col-md-1 col-lg-1" align="right">
                <a href="Agomonihomefull.php"><img src="img/White.png" style="height: 90px;width: 90px; margin: 10%;"></a>
              </div>
             <a href="Agomonihomefull.php">
             <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                 <h2 style="color: #ff7e84; font-family: 'Montez', cursive; font-size: 50px;" class="heading1">agomoni</h2>
                 <h4 style="color: #ff7e84; font-family: 'Montez', cursive;" class= "heading2">More than Family</h4>
              </div>
             </a>
              <!--<div class="col-xs-5 col-sm-4 col-md-2 col-lg-2 line" align="center" style="padding: 10px;">-->
              <!--   <a href="#section2" class="btn btn-primary" >Log In</a>-->
              <!--   <a href="#section2" class="btn btn-default">Register</a>-->
                 
              <!--</div>-->
           </div>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="margin-start: 10%;"><b style="color:white;">Discover Us:</b></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">Log in</a></li>
          <li><a href="#section3">Explore</a></li>
          <li><a href="#section5">Updates</a></li>
          <li><a href="#section4">About Us</a></li>
          <li><a href="#section6">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <div id="section1" class="container-fluid">  
  <div class="jumbotron">
    <div class="blur1" align="right">
      <div class="container cont">
           <h2 align="center" style="padding-top: 100px;font-size: 45px; color: #1c3048; font-family: 'Montez', cursive; font-size: 110px;" ><b>Welcome to agomoni</b></h2>
           <!--<h4 align="center" style="font-size: 20px;color: white;"><b>More than Family</b></h4>-->
           <div align="center" style="padding-bottom: 90px;">
                 <a href="#section4"><button class="btn btn-primary btn-lg" style="position: relative;/*background-color: rgba(0,0,0,0.3)*/;border: 4px solid black;" >Learn more</button></a>
           </div>
          </div>
      </div>
    </div>
  </div>
  <div id="section2" class="container-fluid" style="background-color: black;padding-top: 60px;">
    <div class="row">
        <div class="col-xs-0 col-sm-0 col-md-2 col-lg-2" ></div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center">
       <form action="login.php" method="post">
       
       <h2 style="color: #ffb605;padding-bottom: 40px;">Login</h2>
        <input id="uname" minlength="6" maxlength="20" type="text" name="username" placeholder="Username" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" required><br><br>
        <input pattern="(?=.*\d)(?=.*[\W_]).{6,}" minlength="6" maxlength="20" type="password" name="password" placeholder="Password" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" required><br><br>
                <input id="referral" name="code" type="text" placeholder="Referral Code (optional)" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;"><br><br>

       <input type="submit" class="btn btn-primary btn-md" id="Log_in" style="background-color: white;color: black;" value="Signin" >
       <div class="forget">
       <a href="resetpass.php">Forgot Password?</a></div>
       
       </form>
     </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center">
        <form action="register.php" method="post" onsubmit=" return validation();">
        
        <h2 style="color: #ffb605;">Register Here</h2>
       <br><br>
        <input id="uname2" type="text" name="username" placeholder="Username" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" minlength="6" maxlength="20" required><br><br>
        <input pattern="(?=.*\d)(?=.*[\W_]).{6,}" title="Password must be of 6 characters including a number and a special character." type="password" name="password" placeholder="Password" id="pass"  size = "25" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" minlength="6" maxlength="20" required >  <br><br>
        <input pattern="(?=.*\d)(?=.*[\W_]).{6,}" type="password" placeholder="Confirm Password" id="cpass"  size="25" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" minlength="6" maxlength="20" required><br><br>
        <input type="text" name="email" placeholder="Email Id or Phone No" style="box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;" minlength="10" required><br><br>
        
        <input  type="submit" class="btn btn-primary btn-md" id="Log_in" style="background-color: white;color: black;" value="Signup" >
       
        
        </form>
   </div>
   <div class="col-xs-0 col-sm-0 col-md-2 col-lg-2" ></div>
    </div>
    </div>
    <hr>
   
    <div id="section3" class="container-fluid" style="background-color: black;padding-top: 60px;">
    <div class="row">
      <div class="container">
        <h1 align="center" style="color:#ffb605;padding-bottom: 60px;"><b>Explore</b></h1>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" al ign="left">
        <img src="img/image3.jpg" style="max-width: 100%;height: auto;box-shadow: 0 4px 8px 0 yellow, 0 6px 20px 0 white;">  
        <h3 align="center">Gallery</h3>
        <p>To know more you need to login...</p>
        <a href="agomonigallery1.php"><button class="btn btn-primary btn-md">Click Here</button></a>
     </div>
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" align="left">
        <img src="img/image1.jpg" style="max-width: 100%;height: auto;box-shadow: 0 4px 8px 0 yellow, 0 6px 20px 0 white;">  
        <h3 align="center">Notebook</h3>
        <p>To know more you need to login...</p>
        <a href="agomoni_notepad1.php"><button class="btn btn-primary btn-md">Click Here</button></a>
     </div>
     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" align="left">
        <img src="img/dashbord.png" style="max-width: 100%;height: 200px;box-shadow: 0 4px 8px 0 yellow, 0 6px 20px 0 white;">  
        <h3 align="center">Dashboard</h3>
        <p>To know more you need to login...</p>
        <a href="agomoni_notepad1.php"><button class="btn btn-primary btn-md">Click Here</button></a>
     </div>
   </div>
    </div>
    </div>
    <hr>
    <div id="section5" class="container-fluid" style="background-color: black;padding-top: 60px;padding-bottom: 60px;">
    <div class="row">
      <div class="container" style="width: 90%;">
        <h2 align="center" style="color:#ffb605;padding-bottom: 10px;">Recent News</h2>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad">
     <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0190123281&asins=0190123281&linkId=45507233ee6af18494028010a3d1d3e0&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=178633089X&asins=178633089X&linkId=b4551c8562130d0a47ad16daa2ab761e&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
     </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" align="left">
        <p>Through the whooshing ages and whirlpool of changing times, definitions are changing about their heads. Definitions of gender and love and happiness. Agomoni is a family that seeks to uphold every definition and provide a platform for the people to speak about what matters to them and what bothers them.
 </p><br><p>How do we know that the future is going to be good? By making sure our todays are better than our yesterdays, by taking small steps towards our goals and celebrating our victories as people across the world realise the need of a little more love in the world.
</p><br><p>agomoni is an online initiative for people to come forward with their stories. Stories of wars against patriarchy, homophobia, mental health issues and defeat. Their stories inspire us and encourage us to carry on with our endeavours to achieve new heights. We pride ourselves on 30 collaborations and support from illustrious dignitaries. We have clocked 15000+ views within the very first month of the weblog launch.
</p><br><p>We provide support to speak up against various social ills under complete anonymity, so that your voices can have a safe haven to speak up to release the stress that taxes you out, to make public more aware of every issue that bothers you.
</p><br><p>Run entirely by student members, we aim to make the tomorrow better than today is, to raise awareness about the various questions that crowd our minds, to distinguish our identity as human beings and find peace. 

</p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad">
     <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0008123209&asins=0008123209&linkId=604a1be1d6dd763fbf5c67ae7bff58c3&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0143333623&asins=0143333623&linkId=d91a1d8e978f8a5ca6f14c1da814465b&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
     </div>
           <div class="container banner">
        <a href="https://campusambassador.abhiroopbasak.repl.co"><img src="Campus Representative Program (1).png"></a>
    </div>
   </div>
    </div>
    </div>
    <hr>
    <div id="section4" class="container-fluid" style="background-color: black;padding-top: 60px;padding-bottom: 60px;">
    <div class="row">
      <div class="container" style="width: 90%;">
        <h2 align="center" style="color:#ffb605;padding-bottom: 10px;">About Us</h2>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad"><iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0198076401&asins=0198076401&linkId=c90bc81062b4b29349496bd69e8bc054&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=9390356350&asins=9390356350&linkId=3a0503e60ab93bb2474f4c3871103594&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe></div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" align="left">
        <p>Agomoni is an initiative to help people find their voice and share their stories freely, without any apprehension. We believe every member of agomoni is more than family and here we open our hearts to everyone who wants to share. Complete anonymity is supported so as to help people keep their identities a secret if they want and not worry about being judged.  We encourage talking about various social issues like the LGBTQ+ community, mental health, bullying and other major social problems that people face in this world. Discussing social issues like these is important because it helps create awareness, and better understanding of the problems. Talking to people about your difficulties or even your happiness keeps your mental health in check. It is important to find your own voice and share who you are and what you’re going through in life right now.</p><br>
        <p>agomoni is an online community run by students and supported by various illustrious dignitaries and organisations; within a month since its creation, we have accumulated a total of 15000+ views and more than 30 collaboration projects.</p><br>
        <p>We pride ourselves for serving a meaningful mission to provide a voice to the voiceless and bring forth the challenges we all face in every section of the society to the world. We run entirely on student volunteers whose efforts have made this initiative possible and request your support in carrying forward with this. Your support will inspire us in our drive to create an even better safe haven for all. To know more about this initiative, get in touch with us.</p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad">
     <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=B07Y3CJJCR&asins=B07Y3CJJCR&linkId=0ae0cceaa813cbdb79a2bb7af6b7c7c0&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=1542094135&asins=1542094135&linkId=12386040d237a4fa97b9e199cdaf98f5&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
     </div>
   </div>
    </div>
    </div>
    <hr>
    
    <div id="section6" class="container-fluid" style="background-color: black;padding-top: 60px;padding-bottom: 60px;">
    <div class="row">
      <div class="container" style="width: 90%;">
        <h2 align="center" style="color:#ffb605;padding-bottom: 10px;">Contact Us</h2>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad">
     <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=1847563406&asins=1847563406&linkId=a8599fb49a4b0ca320e4c62dca009b84&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0552173452&asins=0552173452&linkId=ad37cbfab92bed9d34be4488e76e2d9e&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
     </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" align="left">
        <p style="font-size: 18px;">We are ready to serve you. Just a text away and you can associate yourself with this initiative aimed at doing your own part for the society. Drop us a text and we will be there for you.</p><br>

        <p style="font-size: 17px;"><i>Mail us to know more:</i></p><br>

        <p>admin@agomoni.in</p>

        <p>customercare@agomoni.in<p>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ad">
     <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=0552161276&asins=0552161276&linkId=8c9df830fd481c871005b9be53b1a2a3&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
    <iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=agomoni06-21&marketplace=amazon&amp;region=IN&placement=1542094135&asins=1542094135&linkId=4a0d4e55a9d613fb07c2c04dcc311d61&show_border=false&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
     </div>
   </div>
   </div>
    <!-- <button class="open-button" onclick="openForm()"><h4 style="color:white;"><b>Chat</b></h4></button>
    <div class="chat-popup" id="myForm">
    <form action="chat.php" method="post" class="form-container">
    <h1><b>Chat</b></h1>

    <label for="msg" style="color: white;"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required ></textarea>

    
    <input type="submit" name="submit" value="Send" class="btn ">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->
</div>


<script>



function validation(){
var x = document.getElementById("pass").value;

var n = document.getElementById("cpass").value;

if(x != n)
{
alert("password not match");
return false;
}
// else{
// alert("password match");

// }



}

// function my(){
// var x = document.getElementById("pass");
// var y = document.getElementById("hide1");
// var z = document.getElementById("hide2");

// if(x.type === "password")
// {

// x.type="text";
// y.style.display="block";
// z.style.display="none";

// }
// else{


// x.type="password";
// y.style.display="none";
// z.style.display="block";


// }

// }
</script>


<?php
$con=mysqli_connect('localhost','u191935016_admin','Admin@2000');
mysqli_select_db($con,'u191935016_agomonidata');
$sql="INSERT INTO `db_device` (`id`, `page`, `session`) VALUES (NULL, 'Home', current_timestamp());";
mysqli_query($con,$sql);
    
?>
<script type="text/javascript">

        
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		
		if($(window).width()>767) {
		  // 	window.location.href="desktop.php";
		}
		else {
		  //  window.location.href="mobile.php";
		}
	</script>
<?php
// }
?>
<script>
     $(function() {
        $('#uname').on('keypress', function(e) {
            if (e.which == 32){
                return false;
            }
        });
});
$(function() {
        $('#uname2').on('keypress', function(e) {
            if (e.which == 32){
                return false;
            }
        });
});
$(function() {
    $('input').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});
</script>
</body>
</html>   
