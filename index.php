<?php 
include('includes/config.php'); 
include('includes/header.php');
?>  
     
    <h2 class="center"><?php echo $mainHeadline; ?></h2>






<?php //main page content ?>
    <section class="center">
        We here at Capitol Hill Cat House have been proudly serving the cats and cat-lovers in our community for 10 years! We're sure you'll find your forever friend here today.
    </section>

    <h3 class="center">Here is a picture of our in-house socializer cat, Percy!</h3>
    <img src ="images/percy.jpg" alt="My cat Percy" class="center">
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
<?php
include('includes/footer.php');
?>