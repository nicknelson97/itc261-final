<?php

include('includes/config.php');


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:cat.php');
}

$sql = 'SELECT * FROM Cats WHERE CatID = '.$id.'';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
            $Name = stripslashes($row['Name']);
            $Gender = stripslashes($row['Gender']);
            $Age = stripslashes($row['Age']);
            $Color = stripslashes($row['Color']);
            $Description = stripslashes($row['Description']);
            $Breed = stripslashes($row['Breed']);
            $BreedDescription = stripslashes($row['BreedDescription']);
            $Feedback = '';
    }//while
} else {
    $Feedback = 'Error';
}
include('includes/header.php');
?>
<aside>
    
<?php
    
if($Feedback == ''){
    echo '<img src ="images/cat'.$id.'.jpg" alt="'.$Breed.'">';
} else {
    echo $Feedback;
}
    
?>
</aside>

<h2><?php echo $Name;?>'s Page</h2>
<?php
if($Feedback == ''){
    echo '<ul>';
        echo '<li><b>Name:</b> '.$Name.' </li>';
        echo '<li><b>Gender:</b> '.$Gender.' </li>';
        echo '<li><b>Age:</b> '.$Age.' </li>';
        echo '<li><b>Color:</b> '.$Color.' </li>';
    echo '</ul>';
        echo '<p class="descBox">'.$Description.'</p>';
    echo '<ul>';
        echo '<li><b>Breed:</b> '.$Breed.' </li>';
    echo '</ul>';
        echo '<p class="descBox">'.$BreedDescription.'</p>';
        echo '<p><a href="cat.php">Back to the cats</a></p>';
} else {
    echo $Feedback;
    echo '<p><a href="cat.php">Back to the cats</a></p>';
}
?>



<?php
include('includes/footer.php');
?>
    