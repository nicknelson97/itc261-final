<?php
ob_start();
define('DEBUG', 'TRUE');
include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$people['Bella'] = 'cat1 A real sweetie.';
$people['Milo'] = 'cat4 Fluffy guy.';
$people['Boots'] = 'cat6_ ute cat.';
$people['Charlie'] = 'cat3 Great meows.';
$people['Kitty'] = 'cat2 Soft fur.';
$people['Pepper'] = 'cat10 Cool eyes.';
$people['Percy'] = 'cat8 Heavy sleeper.';




switch(THIS_PAGE){
        case 'index.php';
        $title = 'Home';
        $mainHeadline = 'Welcome to the adoption center!';
        $center = 'center';
        break;
        
        case 'about.php';
        $title = 'About';
        $mainHeadline = 'A little about us';
        $center = 'center';
        break;
       
        case 'cat.php';
        $title = 'Cats';
        $mainHeadline = 'Cats for Adoption';
        $center = 'center';
        break;
        
        case 'thx.php';
        $title = 'Thank You Page';
        $center = 'center';
        break;
        
        case 'contact.php';
        $title = 'Contact for website';
        $mainHeadline = 'Welcome to the contact page';
        $center = 'center';
        break;
        
        case 'gallery.php';
        $title = 'Cat of the Day';
        $mainHeadline = 'Cat of the Day!';
        $center = 'center';
        break;
        
        case 'cat-view.php';
        $title = 'Cat View';
        $mainHeadline = 'Cat View';
        $center = 'center';
        break;
}//end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['cat.php'] = 'Cats';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key){
            $myReturn .= '<li><a href=" '.$key.' "  class="selected">'.$value.'</a></li>';
        } else{
            $myReturn .= '<li><a href=" '.$key.' ">'.$value.'</a></li>';
        }
    }
    return $myReturn;
}//end func

function myerror($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myLine.' </b> on line: <b>'.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    } else {
        echo 'issue';
        die();
    }
}



?>