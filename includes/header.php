<?php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>     
 <head>
  <title><?php echo $title; ?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
 </head>
 <body>
<main class="wrapper">
<header>
<h1><a href="index.php"><i class="logo fa fa-home"></i>Capitol Hill Cat House</a></h1>
<nav> 
<ul class="topnav" id="myTopnav">    
<?php echo makeLinks($nav);   ?>
</ul>
</nav>
            
    <?php//login/logout info?>
       <section class="rightnavlog"> 
    
<?php
if(isset($_SESSION['success'])): ?>
<div class="error success">
    <p>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </p>
</div>
<?php endif ?>

<div class="error success">
<?php 
    if(isset($_SESSION['UserName'])): ?>
        <h3> Welcome, 
            <?php echo $_SESSION['UserName']; ?>
        </h3>
    <p><a href="index.php?logout='1' ">Log out</a></p>
</div>
<?php endif ?>
    </section>
    
</header>
