<?php

include ('showContent/showHomeContent.php');
include ('showContent/showAboutContent.php');
include ('showContent/showContactContent.php');
include ('showContent/show404Content.php');
include ('showContent/showRegContent.php');
include ('showContent/showLoginContent.php');


function showContent($page, $inputs, $errs){
  switch($page){
    case 'home':
      showHomeContent();
      break;
    case 'about':
      showAboutContent();
      break;
    case 'contact':
      showContactContent();
      break;
    case 'register':
      showRegContent($inputs, $errs);
      break;
    case 'login':
      showLoginContent($inputs, $errs);
      break;
    default:
      show404Content();
  }
}
?>