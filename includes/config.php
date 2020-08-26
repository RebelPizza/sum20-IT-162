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
    $title = 'Web Dev Examples by Aria';
    $logo = 'fa-home';
    $PageID = 'Client Questionnaire';
  break;

  case 'flexbox.php':
    $title = 'Flexbox Research';
    $logo = 'fa-universal-access';
    $PageID = 'Flexbox Research';
  break;

  case 'galleries.php':
    $title = 'Galleries and Sliders';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Galleries and Sliders';
  break;

  case 'calendar.php':
    $title = 'Google Calendar';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Google Calendar';
  break;

  case 'map.php':
    $title = 'Google Map';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Google Map';
  break;

  case 'youtube.php':
    $title = 'Google YouTube Video';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Youtube Video';
  break;

  case 'shoppingcarts.php':
    $title = 'Shopping Carts';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Shopping Carts';
  break;

  case 'siteapp.php':
    $title = 'Responsive vs. Mobile';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Responsive vs. Mobile';
  break;

  case 'webcam.php':
    $title = 'Live Web Cameras';
    $logo = 'fa-pencil-square-o';
    $PageID = 'Live Web Cameras';
  break;

  default:
    $title = THIS_PAGE;
    $logo = 'fa-home';
    $PageID = 'Welcome';

}
