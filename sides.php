<?php
// Start the session if user is logged on
    if(isset($_COOKIE['username'])) {
        session_start();
           }
?>
<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikaru Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
Font awesome for the icons
*/
 

<html>

<head>

</head>
<body>
    
<!--Start of header-->    

<?php require("header.php");?>

<!--Start of body-->    

<div class="row">

  <div class="leftcolumn" style="width:50%">
    <div class="card">
        <center> <h3>Food</h3> 
      <div class="fakeimg" style="height:300px;">  
      <form action="/action_page.php">

      </form> 
      </div>
    </div>
  </div>
  <div class="rightcolumn" style="width:50%">
    <div class="card">
        <card><h3>Food</h3>
      <div class="fakeimg" style="height:300px;">
    <div class="search-container">
    <form action="/action_page.php">
       </form> </center>   
    </div>
    </div>
  </div>
</div>

    
<!--Start of footer-->    
    
<?php require ("footer.php");
// Set session variables
// for example;
// $_SESSION['user'] = $_POST['username'];

?>

</body>
</html>
