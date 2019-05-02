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
<?php    
//Initialize Functions
    require('functions.php');    

    
    //Initialize Username Cookie
    setUserCookie();
    
    
    if(isset($_COOKIE['username'])) {
        session_save_path('.');
        session_id($_COOKIE['username']);
        session_start();
    } 
    
    if(isset($_POST['username'])) redirectFromLogin('index.php');
    
?>
</head>

<?php
    
    //Start of header    
    require("header.php");
    
?>



<body>
            
                <!--Option 2: Login with current information-->
                <center><div class='rightcolumn' style='width:100%'>
                    <div class='card' style="width:80%;">
                    <br>
                    <center>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
                        
                        <h3>Sign in below:</h3><br> 
                        username: <input type="text" style="width:25%" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; else echo ""; ?>" style="margin-bottom: .25em;">
                        <?php
                        if (isset($_POST['loginAttempted']) && isset($GLOBALS['errors']['username'])) {
                            print "<br>";
                            foreach ($GLOBALS['errors']['username'] as $key => $val) {
                                print "<span style='color: red; font-weight: bold;'>$val</span><br>";
                            }
                        }
                        ?>
                        <br>
                        password: <input type='password' style="width:25%" name="password" style="margin-bottom: .25em;">
                        
                        <?php
                        if (isset($_POST['loginAttempted']) && isset($GLOBALS['errors']['password'])) {
                            print "<br>";
                            foreach ($GLOBALS['errors']['password'] as $key => $val) {
                                print "<span style='color: red; font-weight: bold;'>$val</span><br>";
                            }
                        }
                        ?>
                        <br><br>
                        <input type='submit' name='loginAttempted' style="width:15%" value="log in">
                    </form>  </center>             

                
                <br><br>
            <!--Display the register option if not logged in-->

                <?php if(!isset($_COOKIE['username'])) {?>
                <!--Option 1: Register for a new account-->
                <div>
                    <h3>Don't have an account?<br> Register below: </h3><br><br>
                    <center><a href="register.php"><input type="submit" style="width:15%" value="register here!"></a></center>
                </div>
                <?php } else {?>
                <!--Option 2: Modify Account Details-->
                <div>
                    <h3>Modify your account below</h3><br><br>
                    <center><a href="register.php"><input type="submit" style="width:15%" value="modify your account"></a></center>
                </div>
                
                </div>
                    </div>
                                <?php }?>
</center>

    
<!--Start of footer-->    
<div class="rightcolumn" style="width:100%;">   
<?php require ("footer.php");?>
</div>
</body>
</html>