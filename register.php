<!DOCTYPE html

/*
Section 1 Team 7
Christopher Batoon, Mac Rommel Bautista, Hikaru Matsubara, Lauren Lee

Credits:
w3schools for the CSS layout and html webpage template
Font awesome for the icons
*/
 

<html>
<?php
if(isset($_POST['logout'])) {
            setcookie('username','',time()-1234567890);
            header('location:account.php');
            session_unset();
            session_destroy(); 
            die();
        }
?>

<head>
    
    
<!--Start of header-->    
    
<?php require("header.php");?>

</head>

<body>
    


<!--Start of body-->    

<div class="row">
    
<!-- Below is placeholder form but real php and form to be placed here -->

  <div class="leftcolumn" style="width:100%">
    <div class="card">
      <div class="fakeimg" style="padding-left:100px; height:300px; width:50%;">  
      <center>
                    To <?php if(!isset($_COOKIE['username'])) echo "create a new"; else echo "modify your"; ?> Airfryers And Things account, please enter the following information below:<br>
                    <?php if(isset($_COOKIE['username'])) echo "Unfortunately at this time, you must enter your desired data in all fields to modify your account.<br>"; ?> 
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <br>Username<br>
                        <input type='text' name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; else echo ""; ?>" placeholder="Create a username" style="margin-bottom: .25em; width: 200px;"><br>
                        <?php
                        if (isset($_POST['registrationAttempted']) && isset($GLOBALS['errors']['username'])) {
                            foreach ($GLOBALS['errors']['username'] as $key => $val) {
                                print "<span style='color: red; font-weight: bold;'>$val</span><br>";
                            }
                        }
                        ?>
                        <br>Password<br>
                        <?php if(isset($_COOKIE['username'])) echo "<input type='password' name='password' placeholder='Enter your old password' style='margin-bottom: .25em; width: 200px;'><br>"; ?>
                        <input type='password' name="password_1" placeholder="Enter your new password" style="margin-bottom: .25em; width: 200px;"><br>
                        <input type='password' name="password_2" placeholder="Confirm your new password" style="margin-bottom: .5em; width: 200px;"><br>
                        <?php
                        if (isset($_POST['registrationAttempted']) && isset($GLOBALS['errors']['password'])) {
                            foreach ($GLOBALS['errors']['password'] as $key => $val) {
                                print "<span style='color: red; font-weight: bold;'>$val</span><br>";
                            }
                        }
                        ?>
                        <br>Email<br>
                        <input type='text' name="email_1" value="<?php if(isset($_POST['email_1'])) echo $_POST['email_1']; else echo ""; ?>" placeholder="Enter your email" style="margin-bottom: .25em; width: 200px;"><br>
                        <input type='text' name="email_2" value="<?php if(isset($_POST['email_2'])) echo $_POST['email_2']; else echo ""; ?>" placeholder="Confirm your email" style="margin-bottom: .5em; width: 200px;"><br>
                        <?php
                        if (isset($_POST['registrationAttempted']) && isset($GLOBALS['errors']['email'])) {
                            foreach ($GLOBALS['errors']['email'] as $key => $val) {
                                print "<span style='color: red; font-weight: bold;'>$val</span><br>";
                            }
                        }
                        ?>
                        <br>
                        <input type="hidden" name="modify" value="<?php echo $_POST['modify']; ?>">

                        <input type="submit" name="modifiy" value="Modify here">
                    </form>
                </center>
          <div><center>                                                   
                        <center>Log out below:
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="hidden" name="logout" value="true">
                            <input type="submit" name="SUBMIT" value="Log out">
                        </form>
              </center></div>
      </div>
    </div>
  </div>

    
<!--Start of footer-->    
    
<?php require ("footer.php");?>


</body>
</html>
