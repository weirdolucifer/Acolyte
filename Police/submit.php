<?php
                   
                   
                    if(isset($_POST['sub']))
                    {
                    
                     mysql_connect("localhost", "root", "") or die(mysql_error()); 
                     mysql_select_db("Law") or die(mysql_error());
                    mysql_query("UPDATE Licence SET Status='".$_POST['app']."' WHERE Licence_id ='".$_POST['ID']."'");
                    header("Location:image.php?ID=".$_POST['ID']."");
                     }
                    
                  ?> 