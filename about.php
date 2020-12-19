<?php 
include('includes/config.php'); 
include('includes/header.php');
?>  
    
<section>
 <h2 class="center"><?php echo $mainHeadline; ?></h2>
    <p class="center">Capitol Hill Cat House helps cats, feral or lost, go home and thrive – whether home is the family room or the farm. We do this by rehabilitating orphaned and injured feral cats, sheltering and adopting homeless street cats, and educating the community to inspire compassionate action for animals.</p>
    <br>
    <p class="center">Credit for description from <a href="https://www.paws.org/about/">PAWS.ORG</a></p>
</section>

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