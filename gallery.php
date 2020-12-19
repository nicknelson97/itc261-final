<?php

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Friday':
        $Name = 'Bella';
        $Pic = 'images/cat1.jpg';
        $desc = 'A real sweetie.';
        $big = 'A mostly white, chocolate spotted tabby she-cat, with short fur and blue eyes.';
    break;
    case 'Saturday':
        $Name = 'Milo';
        $Pic = 'images/cat4.jpg';
        $desc = 'Fluffy guy.';
        $big = 'A lilac and cream mackerel tortoiseshell she-cat with short fur, white socks, and hazel eyes.';
    break;
    case 'Sunday':
        $Name = 'Boots';
        $Pic = 'images/cat6.jpg';
        $desc = 'Cute cat.';
        $big = 'A short haired, chocolate and red ticked tortoiseshell-tabby she-cat, with a white belly, white gloves, and green eyes.';
    break;
    case 'Monday':
        $Name = 'Charlie';
        $Pic = 'images/cat3.jpg';
        $desc = 'Great meows.';
        $big = 'A mostly white, blue mackerel tabby ticked tabby tom, with long fur and blue eyes.';
    break;
    case 'Tuesday':
        $Name = 'Kitty';
        $Pic = 'images/cat2.jpg';
        $desc = 'Soft fur.';
        $big = 'A short haired, black spotted tabby tom, with green eyes.';
    break;
    case 'Wednesday':
        $Name = 'Pepper';
        $Pic = 'images/cat10.jpg';
        $desc = 'Cool eyes.';
        $big = 'A long haired, black and red, classic calico-tabby she-cat, with yellow eyes.';
    break;
    case 'Thursday':
        $Name = 'Percy';
        $Pic = 'images/cat8.jpg';
        $desc = 'Heavy sleeper.';
        $big = 'A blue tom, with long fur, and green eyes.';
    break;
}
include('includes/config.php'); 
include('includes/header.php');
?>
    <h2 class="center"><?php echo $mainHeadline; ?></h2>

<h2 class="center"><?php echo $Name; ?></h2>
<img src="<?php echo $Pic; ?>" alt="<?php echo $Name; ?>" class="center">
<h3 class="center"><?php echo $desc; ?></h3>
<p class="center"><?php echo $big; ?></p>
<br>
<ul>
    <li><a href="gallery.php?today=Sunday">Sunday</a></li>
    <li><a href="gallery.php?today=Monday">Monday</a></li>
    <li><a href="gallery.php?today=Tuesday">Tuesday</a></li>
    <li><a href="gallery.php?today=Wednesday">Wednesday</a></li>
    <li><a href="gallery.php?today=Thursday">Thursday</a></li>
    <li><a href="gallery.php?today=Friday">Friday</a></li>
    <li><a href="gallery.php?today=Saturday">Saturday</a></li>
</ul>

<?php
include('includes/footer.php');
?>