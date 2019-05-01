<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require ("header.php");

?>


<FORM action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<!--Start of menu taco 1-->
<div class="row">
  <div class="rightcolumn" style="width:100%; height:500px;">
    <div class="card">
        <center>
            <table border>
                <tr>
                <h3> Shopping Cart  for  <?php echo ucfirst($_COOKIE['username']);?> </h3>

                </tr>
                <tr>
                    <th>Item Amount </th>
                    <th><center> Item </center></th>
                    <th>Single Item Price</th>
                    <th>Total Price</th>
                </tr>
<?php
    if (isset($_SESSION['taco1']))
    {
        echo '<tr>'
                . '<td><center>'.$_SESSION['taco1'].'</center></td>'.
                    '<td> standard tacos </td>'.
                    '<td> $2 per taco</td>'.
                    '<td><center>'. (($_SESSION['taco1'])*2). '</center></td>'
                .'</tr>';
                    
        if (isset($_SESSION['taco2']))
        {            
            echo '<tr>'
                . '<td><center>'.($_SESSION['taco2']).'</center></td>'.
                    '<td> standard tacos </td>'.
                    '<td> $2 per taco</td>'.
                    '<td><center>'. (($_SESSION['taco2'])*2). '</center></td>'
                .'</tr>';
            if (isset($_SESSION['taco3']))
            {            
                echo '<tr>'
                . '<td><center>'.$_SESSION['taco3'].'</center></td>'.
                    '<td> standard tacos </td>'.
                    '<td> $2 per taco</td>'.
                    '<td><center>'. (($_SESSION['taco3'])*2). '</center></td>'
                .'</tr>';

                if (isset($_SESSION['taco4']))
                {            
                echo '<tr>'
                . '<td><center>'.$_SESSION['taco4'].'</center></td>'.
                    '<td> standard tacos </td>'.
                    '<td> $2 per taco</td>'.
                    '<td><center>'. (($_SESSION['taco4'])*2). '</center></td>'
                .'</tr>';
                
                
                    if (isset($_SESSION['taco5']))
                    {            
                    echo '<tr>'
                    . '<td><center>'.$_SESSION['taco5'].'</center></td>'.
                        '<td> standard tacos </td>'.
                        '<td> $2 per taco</td>'.
                        '<td><center>'. (($_SESSION['taco5'])*2). '</center></td>'
                    .'</tr>';
                
                    }
                        if (isset($_SESSION['taco6']))
                        {            
                        echo '<tr>'
                        . '<td><center>'.$_SESSION['taco6'].'</center></td>'.
                        '<td> standard tacos </td>'.
                        '<td> $2 per taco</td>'.
                        '<td><center>'. (($_SESSION['taco6'])*2). '</center></td>'
                        .'</tr>';
                
                        }
                            if (isset($_SESSION['taco7']))
                            {            
                            echo '<tr>'
                            . '<td><center>'.$_SESSION['taco7'].'</center></td>'.
                            '<td> standard tacos </td>'.
                            '<td> $2 per taco</td>'.
                            '<td><center>'. (($_SESSION['taco7'])*2). '</center></td>'
                            .'</tr>';
                
                            }
                                if (isset($_SESSION['taco8']))
                                {            
                                echo '<tr>'
                                . '<td><center>'.$_SESSION['taco8'].'</center></td>'.
                                '<td> standard tacos </td>'.
                                '<td> $2 per taco</td>'.
                                '<td><center>'. (($_SESSION['taco8'])*2). '</center></td>'
                                .'</tr>';
                
                                }
                                   if (isset($_SESSION['drink1']))
                                    {            
                                    echo '<tr>'
                                    . '<td><center>'.$_SESSION['drink1'].'</center></td>'.
                                    '<td> standard tacos </td>'.
                                    '<td> $2 per taco</td>'.
                                    '<td><center>'. (($_SESSION['drink1'])*2). '</center></td>'
                                    .'</tr>';

                                    }
                                    
                }
            }
        }
}
else
{
    echo "";
}
?>
            </table>
    </div>
  </div>
    
<!--Start of taco 2-->   
  <div class="rightcolumn" style="width:100%; height:300px;">
    <div class="card">
    
    </div>
  </div>
      </form>

<?php

require ("footer.php");

?>