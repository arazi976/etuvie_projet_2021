<!DOCTYPE html>
    <html>
        <head classe = "header">
        <link rel="stylesheet" href="styleH.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                        
    </head>
        <body>
        
            
            <?php include ("head2.php");?>
            <div>
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Username: <input type ="text" name="user" value=""/></p></form> 
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Password: <input type ="password" name="pass" value=""/></p></form> 
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Confirm Password: <input type ="password" name="confirm-pass" value=""/></p></form> 
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Age: <input type ="date" name="birthday" value=""/></p></form> 
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> email: <input type ="text" name="mail" value=""/></p></form>
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Numero de telephone: <input type ="number" name="phone" value=""/></p></form>
                    <form method="POST" action="enregistrement.php" autocomplete="off">
                    <p> Description: <input type ="text" name="description" value=""/></p></form>
                    <input type="submit" value="Send" />
            </div>
        	<?php include ("foot2.php");?>
	
			

        </body>
    </html>
   
     
            
            
        