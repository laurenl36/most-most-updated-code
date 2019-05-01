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

if (array_key_exists('order', $_POST)) {
   
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
// Place taco quantities in cart

    if (array_key_exists('order1', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco1'] = $_POST['taco1'];
        
    }

    if (array_key_exists('order2', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco2'] = $_POST['taco2'];
        
    }

    if (array_key_exists('order3', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco3'] = $_POST['taco3'];
        
    }

    if (array_key_exists('order4', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco4'] = $_POST['taco4'];
        
    }

    if (array_key_exists('order5', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco5'] = $_POST['taco5'];
        
    }

    if (array_key_exists('order6', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco6'] = $_POST['taco6'];
        
    }

    if (array_key_exists('order7', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco7'] = $_POST['taco7'];
        
    }

    if (array_key_exists('order8', $_POST)) {
        // grab the quanities array from the form and replace previous cart quantities with new values
        $_SESSION['taco8'] = $_POST['taco8'];
        
    }    
    
?>
</head>
<body>
<!--Start of Menu Nav Bar-->
<center>
<div class="topnav" style= "text-align:center; background-color: white; color:black;">
    <center>
        <span style="padding-left:20px;">
            <a href="menu.php"><i class='fas fa-pepper-hot' style='font-size:20px; color:#648c47;'></i>
                <small> </small><font color='#648c47'> tacos </font></a></span>
        <a href="sides.php"><i class='fas fa-pepper-hot' style='font-size:20px; color:black;'></i>
            <small> </small><font color="black"> sides</font></a>
        <a href="drinks.php"><i class='fas fa-coffee' style='font-size:20px; color:black;'></i>
            <small> </small><font color="black"> drinks</font></a>       

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
            <img src="simpletaco2.jpeg" height="100%" width="100%">
            <p class="name">Standard Tacos</p>
            <p class="price">$2 for 1, $5 for 3</p>
            <hr>
            <p class="description">1 or more standard tacos. Topped with cheese, tomatoes, and lettuce.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco1">
              <input type="submit" name="order1" value="order">
          </center>
      </div>
    </div>
  </div>
    
<!--Start of taco 2-->   
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="breakfast.jpeg" height="100%" width="100%">
                
            <p class="name">Breakfast Tacos</p>
            <p class="price">$3 for 1, $5 for 2</p>
            <hr>
            <p class="description">Sold from 8am - 11am. Stuffed with bacon, scrambled eggs, and potatoes.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco2">
              <input type="submit" name="order2" value="order">
            </center>
      </div>
    </div>
  </div>
    
<!--Start of taco 3-->    
  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="chickentaco.jpeg" height="100%" width="100%">                
            <p class="name">Double Layer Tacos</p>
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
            <img src="vegetaco.jpeg" height="100%" width="100%">                                
            <p class="name">Vegetarian Tacos</p>
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
    
<!--Start of taco 5-->   

  <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
          <center>
            <img src="fishtaco.jpeg" height="100%" width="100%">                              
            <p class="name">Fish Tacos</p>
            <p class="price">$3 for 1, $5 for 2</p>
            <hr>
            <p class="description">Stuffed with fried whitefish. Topped with cheese, tomatoes, and lettuce.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco5">
              <input type="submit" name="order5" value="order">
          </center>
      </div>
    </div>
  </div>

      <div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="tacosalad.jpg" height="100%" width="100%">                
            <p class="name">Taco Salad</p>
            <p class="price">$10</p>
            <hr>
            <p class="description">Layered with taco meat, cheese, lettuce, salsa, sour cream, and .</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco6">
              <input type="submit" name="order6" value="order">
            </center>
      </div>
    </div>
  </div>
        
        
<div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="fancytaco.jpeg" height="100%" width="100%">                                
            <p class="name">Cheese and Bean Tacos</p>
            <p class="price">$1 for 1, $5 for 7</p>
            <hr>
            <p class="description">Stuffed with black beans, sour cream, and cheese.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco7">
              <input type="submit" name="order7" value="order">
            </center>
      </div>
    </div>
  </div>

<div class="rightcolumn2">
    <div class="card">
      <div class="fakeimg">
            <center>
            <img src="guactaco.jpeg" height="100%" width="100%">                                
            <p class="name">Guacamole and Bean Tacos</p>
            <p class="price">$1 for 1, $5 for 7</p>
            <hr>
            <p class="description">Stuffed with black beans and guacamole.</p>
            <div class="qty">
              <p class="qty_title">quantity: </p>
              <input type="text" name="taco8">
              <input type="submit" name="order8" value="order">
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
