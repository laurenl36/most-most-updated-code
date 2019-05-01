<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikaru Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
*/


<html>


<head>    
<!--start of header-->    
<?php require("header.php");?>
</head>


<body>

<!--Start of Body-->    

<div class="row">

  <div class="leftcolumn" style="width:100%">
      <div class="card"><center>
<h3>Contact Us</h3>
<p><span class="error" style="color:red">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="name"> <span style="color:red">*</span>
  <br><br>
  E-mail: <input type="text" name="email" placeholder="email"> <span style="color:red">*</span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Sign up for Email Subscription? <input type="radio" name="yes" value="Yes">  Yes  <input type="radio" name="no" value="No"> No
  <br><br>
  <input type="submit" name="submit" value="Submit">  </center>
</form>

  <br><br>
  
      <br>
      </form> 
      </div>
    </div>
    </div>
  </div>
</div>

    
<!--Start of Footer-->    
    
<?php require ("footer.php");?>

</body>
</html>
