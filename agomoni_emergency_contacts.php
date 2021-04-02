<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:Agomonihomefull.php');

}


?>

<?php
$con=mysqli_connect('localhost','u191935016_admin','Admin@2000');
mysqli_select_db($con,'u191935016_agomonidata');
$sql="INSERT INTO `db_device` (`id`, `page`, `session`) VALUES (NULL, 'Emergency', current_timestamp());";
mysqli_query($con,$sql);
    
?>

<!DOCTYPE html>
<html>
    <head>
        <script>
          function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        </script>
        <title>Agomoni Emergency Contact</title>
        <link rel="shortcut icon" type="image/jpg" href="img/logo.jpeg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
        <link rel = 'stylesheet' href = 'csss/agomoni_emergency_custom.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
<link rel="stylesheet" href="bootstrap.css">
        
<style>
        #ngo{
          width:150px;
          padding:10px;
          background-color:pink;
          outline:none;
          border:none;
        border-radius:15px;
        }
        #ngo:focus{
          background-color:pink;
          border-radius:15px;
        }
        .flip-card {
  background-color: transparent;
  width: 280px;
  height: 320px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  word-wrap: break-word;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:transparent;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
        .fa-quote-left{
          color:orange;
          font-size:25px;
        }
        .flip-card-front p{
          padding:10px;
          color:white;
          font-size:12px;
        }
        .flip-card-front h5{
          color:white;
        }
        /* .hrr{
          width:50%;
          height:2px;
          border:none;
          background:white;
          margin:auto !important ;
        } */
        body{
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-image: linear-gradient(145deg, #1c3048, #ff7e84);
    height: 100%;
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
    .flip-card-back a{
        color:white;
        text-decoration:none;
    }
        </style>
    
    </head>
    <body>
        <div style="background-image: url('img/backfaded.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; height: 100%; width: 100%; padding-bottom: 50%;">
      <div class="row" style="background-color: #1c3048; margin: 0%;">
        <div class="col-xs-3 col-sm-3 col-md-1 col-lg-1" align="right">
                <a href="Agomonihomefull.php"><img src="img/White.png" style="height: 90px;width: 90px; margin:10%; "></a>
              </div>
        <div class="col-xs-9 col-sm-9 col-md-11 col-lg-11">
                 <h2 style="color: #ff7e84; font-family: 'Montez', cursive; font-size: 50px;" class="heading1">agomoni</h2>
                 <h4 style="color: #ff7e84; font-family: 'Montez', cursive;" class= "heading2">More than Family</h4>
              </div>
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
          <li><a href="agomoni_notepad1.php">Dashboard</a></li>
          <li><a href="agomonigallery1.php">Gallery</a></li>
          <li><a href="agomoni_ContactUs1.php">Contact Us</a></li>
          <li><a href="agomoni_profile.php">My Account</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="agomoni_emergency_contacts.php"  style="color: #ffffff;">Emergency Contact</a></li>
          <li><a href="logout.php" class="">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
 </nav> 
  <br>
    
<div class="text-center">
    <form action=""  method="post">
          <label for="ngo" class="text-white">Please Select an option.</label>
          <br>
          <select name="ngo" id="ngo">

<?php
$con=mysqli_connect('localhost','u191935016_admin','Admin@2000');

mysqli_select_db($con,'u191935016_agomonidata');

// $sequery1="SELECT * FROM `db_ngo` ";
$sequery1="select distinct category from db_ngo";
$query1=mysqli_query($con,$sequery1);
$nums1=mysqli_num_rows($query1);
?><option value="Select">Select</option><?php
while($dat= mysqli_fetch_array($query1))
{?>

<option value="<?php echo $dat['category']; ?>"><?php echo $dat['category']; ?></option>

<?php
}



?>




            <!-- <option value="Relief Work">Relief Work</option> -->
            <!-- <option value="Children">Children</option>
            <option value="NGO">NGO</option> -->
            
          </select>
          <br><br>
          <input type="submit" id="btnone" name="submit" value="Search" class="btn btn-primary">
</form>
</div>
    
<br>
<?php
    $con=mysqli_connect('localhost','u191935016_admin','Admin@2000');

mysqli_select_db($con,'u191935016_agomonidata');
    
    if(isset($_POST['submit']))
    {
      ?><script></script><?php
      $ngo=$_POST['ngo'];
      
      $q="select * from db_ngo where  (category='$ngo')";
      // $q="select * from db_ngo where category LIKE '%{$ngo}%' ";
      $query=mysqli_query($con,$q);
      $nums=mysqli_num_rows($query);
      if($nums==0)
      {
        ?>
        <script>
          alert("Please Select and Option");
        </script>
      
        <?php
      }
      else{
      ?>
        <h2 style="color:white; text-align: center;">All Contacts Available for <?php echo $ngo; ?></h2>
        
        <?php
    }
  }
    ?>
              
<br>
<div class="container">
  <br>
  
  <div class="row">
    <?php
    $con=mysqli_connect('localhost','u191935016_admin','Admin@2000');

mysqli_select_db($con,'u191935016_agomonidata');
    
    if(isset($_POST['submit']))
    {
      $ngo=$_POST['ngo'];
      
      $q="select * from db_ngo where  (category='$ngo')";
      // $q="select * from db_ngo where category LIKE '%{$ngo}%' ";
      $query=mysqli_query($con,$q);
      $nums=mysqli_num_rows($query);
      if($nums==0)
      {
        ?>
        <script>
          //alert("no data present");
        </script>
      
        <?php
      }
      else{
      
      
      
      while($data= mysqli_fetch_array($query))
      {
       ?>
       
<div class="col-lg-4 col-md-6 col-10 mx-auto">
              <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
              <i class="fa fa-quote-left"></i>
              <!-- <h5>Ngo For <?php echo $data['category']; ?></h5> -->
              
              <p >We are happy to help you.</p>
                <img src="ngo/<?php echo $data['image']; ?>" alt="Avatar" style="width:220px;height:180px;border-radius:10px; ">
               
                
              </div>
              <div class="flip-card-back">
                <br><br>
                <h3><?php echo $data['ngo_name']; ?></h3> 
                <p><?php echo $data['contact1']; ?></p> 
            <a href="<?php echo $data['contact2']; ?>" target="_blank" ><p> <?php echo $data['contact2']; ?> </p></a>
                
                
              </div>
            </div>
          </div>
              </div>

        <?php
        }
    }
  }
    ?>
              

    

              
  </div>
  
</div>
     <?php $_SESSION['page']='agomoni_emergency_contacts.php'; ?>

      <!-- <script src = 'agomoni_emergency_script.js'></script> -->
      <button style="border-radius: 5px;" class="open-button" onclick="openForm()"><h4><b style="color:white;">Chat</b></h4></button>
      <div class="chat-popup" id="myForm">
      <form action="chat.php" method="post" class="form-container">
      <h1><b>Chat</b></h1>

      <label for="msg" style="color: white;"><b>Message</b></label>
      <textarea placeholder="Type message..." name="msg" required ></textarea>

      <input type="submit" name="submit" value="Send" class="btn ">
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
      </form>

</div>
      
    </body>
</html>