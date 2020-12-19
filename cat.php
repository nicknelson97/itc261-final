<?php


include('includes/credentials.php');
include('includes/config.php');
include('includes/header.php');

$sql = 'SELECT * FROM Cats';
  
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo '<ul>';
        echo '<li> Name: '.$row['Name'].'</li>';
        echo '<li class="bold">For more info on the <a href="cat-view.php?id='.$row['CatID'].'"> '.$row['Name'].' </a></li>';
        echo '<li> Breed: '.$row['Breed'].'</li>';
        echo '</ul>';
    }//while
}else {
    echo 'none';
}//else

@mysqli_free_result($result);

@mysqli_close($iConn);

include('includes/footer.php');
?>
