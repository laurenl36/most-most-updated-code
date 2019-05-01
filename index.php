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
    
</head>
<body>
    
<!--Start of header-->       
<?php require ("header.php");?>
    


<!--Start of body-->    
<div class="row">
  <div class="topcolumn">
    <div class="card" style="padding:10px;">
      <h3>taco tuesday special every week </h3>
      <center><h4>Click banner below for details</h4></center>
      <div class="fakeimg" style="height:100%; padding:20px;"><center><img src="taco4.jpg" width=100% height=400px></center></div>
      <p><p><p>
    </div>

  </div>
  <div class="leftcolumn">
    <div class="card">
      <h3>See full menu </h3>
      <div class="fakeimg" style="height:100%; width:100%; padding:20px;">
          <a href="menu.php">
          <img src="tacospread.jpg" width=100% height=100% padding:20px>
          </a>
      </div>
    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">      
      <h3>Blog Posts</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
  </div>
</div>

<!--Start of footer-->    
<?php require ("footer.php");?>


</body>
</html>
