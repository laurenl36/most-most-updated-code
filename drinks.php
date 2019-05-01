<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikari Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
Font awesome for the icons
*/


<html>

<head>
    
    
<!--Start of header-->       
<?php require ("header.php");


// if the session is new, register a shopping cart

if (array_key_exists('dorder', $_POST)) {
   
    if (!$_SESSION['taco1']) {
        // start the cart out with no items selected by placing 0 in each product quantity slot
        // put the cart in this users session
        $_SESSION['taco1'] = $_POST['taco1'];
        $_SESSION['taco2'] = $_POST['taco2'];
        $_SESSION['taco3'] = $_POST['taco3'];
        $_SESSION['taco4'] = $_POST['taco4'];
        $_SESSION['taco5'] = $_POST['taco5'];
        $_SESSION['taco6'] = $_POST['taco6'];
        $_SESSION['taco7'] = $_POST['taco7'];
        $_SESSION['taco8'] = $_POST['taco8'];
        
    }
    else
    {
        echo "please enter values";
    }
}
 
// Check that select_button submit was pressed.
// Place drink quantities in cart

    if (array_key_exists('dorder1', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['drink1'] = $_POST['drink1'];
        
    }

    if (array_key_exists('dorder2', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['drink2'] = $_POST['drink2'];
        
    }

    if (array_key_exists('dorder3', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['drink3'] = $_POST['drink3'];
        
    }

    if (array_key_exists('dorder4', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['drink4'] = $_POST['drink4'];
        
    }

    
?>
</head>
<body>
<!--Start of Menu Nav Bar-->
<center>
<div class="topnav" style= "text-align:center; background-color: white; color:black;">
    <center>
        <span style="padding-left:20px;">
            <a href="menu.php"><i class='fas fa-pepper-hot' style='font-size:20px; color:black;'></i>
                <small> </small><font color='black'> tacos </font></a></span>
        <a href="sides.php"><i class='fas fa-pepper-hot' style='font-size:20px; color:black;'></i>
            <small> </small><font color="black"> sides</font></a>
        <a href="drinks.php"><i class='fas fa-coffee' style='font-size:20px; color:#648c47;'></i>
            <small> </small><font color="#648c47"> drinks</font></a>       

</div>
    </center>


<!--Start of PHP form-->
<FORM  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<!--Start of menu taco 1-->
<div class="row">
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
          <center>
            <img src="cola.jpeg" height="100%" width="100%">
            <p class="name">Coca Cola</p>
            <p class="price">$1 for 1 can</p>
            <hr>
            <p class="description">Choose from ginger ale, sprite, or coca cola.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="drink1">
              <input type="submit" name="dorder1" value="order">
          </center>
      </div>
    </div>
  </div>
    
<!--Start of taco 2-->   
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="lemon.jpeg" height="100%" width="100%">
                
            <p class="name">Lemon Soda</p>
            <p class="price">$4</p>
            <hr>
            <p class="description">Served iced or hot.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="drink2">
              <input type="submit" name="dorder2" value="order">
            </center>
      </div>
    </div>
  </div>
    
<!--Start of taco 3-->    
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="berrysoda.jpeg" height="100%" width="100%">                
            <p class="name">Berry Soda</p>
            <p class="price">$1 for 1, $5 for 7</p>
            <hr>
            <p class="description">Stuffed with two layers of taco meat, cheese, and sour cream.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco3">
              <input type="submit" name="order3" value="order">
            </center>
      </div>
    </div>
  </div>

<!--Start of taco 4-->   
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="horchata.jpeg" height="100%" width="100%">                                
            <p class="name">Horchata</p>
            <p class="price">$2 for 1, $5 for 3</p>
            <hr>
            <p class="description">Stuffed with vegetarian meat substitute. Topped with tomatoes and lettuce.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco4">
              <input type="submit" name="order4" value="order">
            </center>
      </div>
    </div>
  </div>

        
</div>
</form>
<br><br>
<!--Start of footer-->    
<div class="footer">
    <br><br>
<?php require ("footer.php");?>
</div>

</body>
</html>
