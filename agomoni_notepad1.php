<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:Agomonihomefull.php');

}
// elseif(!isset($_SESSION['fullname']))
// {
//   header('location:agomoni_update_profile.php');
// }
// elseif(!isset($_SESSION['full']))
// {
//   header('location:agomoni_update_profile.php');
// }


?>
<?php
$con=mysqli_connect('localhost','u191935016_admin','Admin@2000');
mysqli_select_db($con,'u191935016_agomonidata');
$sql="INSERT INTO `db_device` (`id`, `page`, `session`) VALUES (NULL, 'Notepad', current_timestamp());";
mysqli_query($con,$sql);
    
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agomoni-notebook | dashboard </title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="jss/turning.min.js"></script>
<script data-ad-client="ca-pub-7316428934332522" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script data-ad-client="ca-pub-5657296610960679" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap" rel="stylesheet">
</head>
<style>
  body{
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-image: linear-gradient(145deg, #1c3048, #ff7e84);
    height: 100%;
  }
  .navbar{
    margin-bottom: 0px;
  }
  #section1,#section2,#section3,#section4{
    padding-bottom:50px;
  }
 .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
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
    font-size: 20px;
  }
  input[type=text]{
        height: 40px;
        width: 400px;
        padding-left: 20px;
        background-color: rgba(0,0,0,0.1);
        transition: none;
        color: white;
     }
      input[type=password]{
        height: 40px;
        width: 400px;
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
h1,h2,h3,h4,h5,h6{
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

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
textarea
{
    border-radius: 10px;
    resize: none;
  max-width: 100%;
  height: 200px;
}
button{
    border-radius: 5px;
}

.bg{
  background:linear-gradient(120deg,red,green,yellow);
}

.container1{
  max-width: 500 !important;
  margin: auto;
  margin-top: 2%;
  font-family: sans-serif;
  letter-spacing: 0.5px;
  border-radius: 10px;
  background-color: #0e124559;
  }



.chat-page{
  padding: 0 0 50px 0;
}

.msg_inbox{
  border: 1px solid #ccc;
  overflow: hidden;
  padding-bottom: 30px;
}

.chats{
  padding: 30px 15px 0 25px;
}

.msg-page{
  height: 516px;
  overflow-y: auto;
}

.recieved-chats-img img{
  display: inline-block;
  width: 50px;
  float: left;
}

.recieved-msg{
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
}

.recieved-msg-inbox{
  width: 57%;
}

.recieved-msg-inbox p{
  background: #efefef none repeat scroll 0 0;
  border-radius: 10px 10px 10px 0px;
  color:#646464;
  font-size: 20px;
  margin: 0;
  padding: 10px 10px 10px 12px;
  font-family: 'Indie Flower', cursive;
  word-wrap: break-word;
}

.time{
  color: #777;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}

.outgoing-chats{
  overflow: hidden;
  margin: 26px 20px;
}

.outgoing-chats-msg p{
  background: #5D8E7D none repeat scroll 0 0;
  color: #fff;
  border-radius: 10px 10px 0px 10px;
  font-size: 20px;
  margin-left: 0;
  margin-right:10px;
  padding: 10px 10px 10px 12px;
  font-family: 'Indie Flower', cursive;
  word-wrap: break-word;
}

.outgoing-chats-msg{
  float: right;
  width: 46%;
  margin-left: 45%;
}

.outgoing-chats-img img{
  display: inline-block;
  width: 50px;
  float: right;
}
.log-img img{
  width:40px;
  height:40px;
  border-radius:50%;
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
    input{
        
    }
</style>
    <div style="background-image: url('img/backfaded.png'); background-size: cover; background-attachment: fixed; height: 100%;">
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
    </div>
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b style="color:white">Discover Us:</b></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <!-- <li><a href="agomoni_update_profile.php">Update Profile</a></li> -->
          <li><a href="#section1" style="color: #ffffff;">Dashboard</a></li>
          <li><a href="agomonigallery1.php">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="agomoni_emergency_contacts.php">Emergency Contact</a></li>
          <li><a href="logout.php" class="">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
 </nav> 
    
     
 <div id="section1" class="container-fluid" style="padding-top: 0px;padding-bottom: 50px;">
     <br><h2 class="container" align="left" style="font-family: 'Almendra SC', serif;font-size:40px; color:#ffb605;padding-bottom: 10px;">Welcome <?php echo $_SESSION['user']?>,</h2>
    <div class="row">
      <div class="container">
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" align="center">
            <h4 style="padding: 20px 20px; padding-bottom: 40px; color: #d3d3d3; text-align: justify;
  text-justify: inter-word; margin-top: 0;font-size: 20px; font-family: 'Almendra SC', serif;">Whatever you write in this Notepad will be displayed in the Dashboard anonymously. So feel free to write anything you want to, without the fear of disclosing your identity. Share your views and comments keeping in mind to be respectful towards others.</h4>

        </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" align="center" style="padding: 20px;">
        <form  action="notepad.php" method="post">
        <textarea name="written" style="padding: 2.5%; margin-bottom: 2.5%; background-color: #1c3048;border: 3px solid gray;color: white;font-size: 25px; font-family: 'Indie Flower', cursive;" rows="12" cols="65"  placeholder="Write Here Anonymously" required ></textarea>
        <div>
        <button style="background-color: #ff979c;color:#1c3048;border-radius: 20px;height: 40px;width: 130px;outline: none;"><b>Submit</b></button>
        <!-- <button class="btn btn-primary">Submit</button> -->
        
        
        </form>
      </div>
     </div>
   </div>
   </div>
 </div>

   


<section id="section2">
    
 <div class="container container1" >
    <div class="chat-page">
      <div class="msg-inbox">
        <div class="chats">
          <div class="msg-page">


          <?php
$con=mysqli_connect('localhost','u191935016_admin','Admin@2000');

mysqli_select_db($con,'u191935016_agomonidata');

if($con){
?>
<script>
// alert("connected successfully");
</script>
<?php
}
else{

?>
<script>
alert(" not connected ");
</script>
<?php

}

// $all=date("Y-m-d h-i-s");
$sequery="SELECT * FROM `db_posts` order by id desc LIMIT 300";
$query=mysqli_query($con,$sequery);
$nums=mysqli_num_rows($query);

while($data= mysqli_fetch_array($query))
{
  if(  $data['user_name']  != $_SESSION['user'] )
  {
    ?>

<div class="recieved-chats">
              <div class="recieved-chats-img log-img">
              <?php
$namm= $data['user_name'];
              $sequery2="SELECT * FROM `user_info` where (username='$namm')";
              $query2=mysqli_query($con,$sequery2);
              $nums2=mysqli_num_rows($query2);
              while($datt= mysqli_fetch_array($query2))
              {
                ?>

<img src="userimg/<?php echo $datt['image']; ?>.png">
<?php
              }

              ?>
                
                <!-- <img src="img/White.png"> -->
              </div>
            <div class="recieved-msg">
              <div class="recieved-msg-inbox">
                <p><?php echo $data['post']; ?></p>
                <span class="time"><?php echo $data['date']; ?>, <?php echo $data['time']; ?></span>
                <br>
              </div>
            </div>
            </div>




    <?php

  }
 else{
   ?>


<div class="outgoing-chats">
              <div class="outgoing-chats-img log-img">
              <?php
$nam=$_SESSION['user'];
              $sequery1="SELECT * FROM `user_info` where (username='$nam')";
              $query1=mysqli_query($con,$sequery1);
              $nums1=mysqli_num_rows($query1);
              while($dat= mysqli_fetch_array($query1))
              {
                ?>

<img src="userimg/<?php echo $dat['image']; ?>.png">
<?php
              }

              ?>
                
              </div>
              <div class="outgoing-chats-msg">
                <p><?php echo $data['post']; ?></p>
                <span class="time"><?php echo $data['date']; ?>, <?php echo $data['time']; ?></span>
                <br>
              
            </div>
            </div>


<?php
 }

}

?>

          </div>
        </div>
      </div>
    </div>
 </div>




 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-5657296610960679"
     data-ad-slot="3507295701"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



 </section>
 
 

<br><br><br><br>

 <?php $_SESSION['page']='agomoni_notepad1.php'; ?>
<button class="open-button" onclick="openForm()"><h4 style="color:white;"><b>Chat</b></h4></button>
    <div class="chat-popup" id="myForm">
    <form action="chat.php" method="post" class="form-container">
    <h1><b>Chat</b></h1>

    <label for="msg" style="color: white;"><b>Message</b></label>
    <textarea placeholder="Type Message..." name="msg" required ></textarea>
    <input type="submit" name="submit" value="Send" class="btn ">
    <!-- <button type="submit" class="btn">Send</button> -->
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>
</body>
</html>   



