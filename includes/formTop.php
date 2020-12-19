<?php
$firstName = '';
$lastName = '';
$email = '';
$tel = '';
$gender = '';
$privacy = '';
$comments = '';
$cat = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$telErr = '';
$genderErr = '';
$privacyErr = '';
$commentsErr = '';
$catErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
if(empty($_POST['firstName'])){
    $firstNameErr = 'Please fill out your first name';
} else{
    $firstName = $_POST['firstName'];
}

    
if(empty($_POST['lastName'])){
    $lastNameErr = 'Please fill out your last name';
} else{
    $lastName = $_POST['lastName'];
}    
    
    
if(empty($_POST['email'])){
    $emailErr = 'Please fill out your email';
} else{
    $email = $_POST['email'];
}

    
//if(empty($_POST['phone'])){
//    $nameErr = 'Please fill out your phone';
//} else{
//    $name = $_POST['phone'];
//}   
    
    
if(empty($_POST['gender'])){
    $genderErr = 'Please check one!';
} else{
    $gender = $_POST['gender'];
}   
    
    if($gender == 'male'){
        $male = 'checked';
    }elseif($gender == 'female'){
        $female = 'checked';
    }  
    
if(empty($_POST['cat'])){
    $catErr = 'Please check one!';
} else{
    $cat = $_POST['cat'];
}

if(empty($_POST['comments'])){
    $commentsErr = 'Please include your comments!';
} else{
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])){
    $privacyErr = 'Please agree to the Privacy Rules!';
} else{
    $privacy = $_POST['privacy'];
}    

function myCats(){
    $myReturn = '';
    if(!empty($_POST['cat'])){
        $myReturn = implode(', ', $_POST['cat']);
        
    } return $myReturn;
}
 
if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
    
    
if(isset($_POST['firstName'],
         $_POST['lastName'],
         $_POST['gender'],
         $_POST['privacy'],
         $_POST['tel'],
         $_POST['comments'],
         $_POST['cat']))  {
        
    $to = 'szemeo@mystudentswa.com';
    $subject = 'CHCH Adoptee Info' .date('m/d/y');
    $body = ''.$firstName.' has filled out the form  '.PHP_EOL.'';
    $body .= 'Email: '.$email.' '.PHP_EOL.'';
    $body .= 'Phone Number: '.$tel.' '.PHP_EOL.'';
    $body .= 'Your cats: '.myCats().' '.PHP_EOL.'';
    $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
    $body .= 'Comments: '.$comments.' '.PHP_EOL.'';
    
    $headers = array(
    'From' => 'no-reply@nicknelson97.xyz',
    'Reply-to' => ' '.$email.'');
    
    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
}//isset
    
}//request method
