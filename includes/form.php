<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    
<label>First Name</label>
<input type="text" name="firstName" value="<?php
        if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
    <span><?php echo $firstNameErr; ?></span>

<label>Last Name</label>
<input type="text" name="lastName" value="<?php
        if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
    <span><?php echo $lastNameErr; ?></span>
    
<label>Email</label>
<input type="text" name="email" value="<?php
        if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    <span><?php echo $emailErr; ?></span>
    
<label>Phone Number</label>
<input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
        if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>">
    <span><?php echo $telErr; ?></span>
    
<label>Gender</label>
<ul>
    <li><input type="radio" name="gender" value="female"
    <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female </li>
    
    <li><input type="radio" name="gender" value="male"
    <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male </li>
    </ul>
    <span><?php echo $genderErr; ?></span>
    
<label>Which cat are you interested in?</label>
<ul>
    <li><input type="checkbox" name="cat[]" value="Bella"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Bella') echo 'checked="checked"'; ?>>Bella </li>    
    
    <li><input type="checkbox" name="cat[]" value="Kitty"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Kitty') echo 'checked="checked"'; ?>>Kitty </li> 
    
    <li><input type="checkbox" name="cat[]" value="Charlie"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Charlie') echo 'checked="checked"'; ?>>Charlie </li> 
    
    <li><input type="checkbox" name="cat[]" value="Milo"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Milo') echo 'checked="checked"'; ?>>Milo </li> 
    
    <li><input type="checkbox" name="cat[]" value="Lily"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Lily') echo 'checked="checked"'; ?>>Lily </li> 
    
    <li><input type="checkbox" name="cat[]" value="Boots"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Boots') echo 'checked="checked"'; ?>>Boots </li> 
    
    <li><input type="checkbox" name="cat[]" value="Shadow"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Shadow') echo 'checked="checked"'; ?>>Shadow </li> 
    
    <li><input type="checkbox" name="cat[]" value="Percy"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Percy') echo 'checked="checked"'; ?>>Percy </li> 
    
    <li><input type="checkbox" name="cat[]" value="Lulu"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Lulu') echo 'checked="checked"'; ?>>Lulu </li> 
    
    <li><input type="checkbox" name="cat[]" value="Pepper"
    <?php if(isset($_POST['cat']) && $_POST['cat'] == 'Pepper') echo 'checked="checked"'; ?>>Pepper </li> 
    
    </ul>
    <span><?php echo $catErr; ?></span>
    
 <label>Comments</label>   
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo 
    htmlspecialchars($_POST['comments']); ?></textarea>
    <span><?php echo $commentsErr; ?></span>
    
<input type="radio" name="privacy" value="<?php
        if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']); ?>">
        I agree to your Privacy Policy
    <span><?php echo $privacyErr; ?></span>


<input type="submit" value="Send it!">
<p><a href="">Reset me!</a></p>    
    </fieldset>
    
    </form>