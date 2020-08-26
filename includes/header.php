<?php include 'config.php'?>
<!DOCTYPE html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="robots" content="noindex,nofollow" />
   <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
   <title><?=$title?></title>
   <script src="https://use.fontawesome.com/6a71565c22.js"></script>
   <script src="https://code.jquery.com/jquery-latest.min.js"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
   <link rel="stylesheet" href="css/big.css">
   <link rel="stylesheet" href="css/nav.css">
</head>
<body>
  <header>
    <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>Aria's BIG Site</a></h1>
  </header>
  <div id="cssmenu">
    <ul>
       <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162</span></a></li>
       <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
       <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
       <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
       <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
          <ul>
             <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
             <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
             <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
          </ul>
       </li>
       <li><a href="shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
       <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
       <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
    </ul>
  </div>


    <h2 class="pageID"><?=$PageID?></h2>
