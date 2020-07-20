<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

// echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = '';

switch (THIS_PAGE) {
  case 'index.php':
    $title = "Aria's IT162 Portal Page";
    $logo = 'fa-home';
    $PageID = 'Welcome';
  break;

  case 'aia.php':
    $title = "Aria's Final Project AIA (Client work)";
    $logo = "fa-universal-access";
  break;


  case 'contactme.php':
    $title = "Aria's IT162 Contact Page";
    $logo = 'fa-pencil-square-o';
    $PageID = 'Contact Aria';
  break;

  default:
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Aria";



//     <li><a href="index.php" class="selected">Welcome</a></li>
//     <li><a href="big/index.php">Big</a></li>
//     <li><a href="aia.php">AIA</a></li>
//     <li><a href="flowchart.php">Flowchart/Layout</a></li>
//     <li><a href="fp/index.php">Final Project</a></li>
//     <li><a href="contactme.php">Contact Aria</a></li>
//
//

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
        $myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
      }else{
        $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
      }
    }

    return $myReturn;

}
