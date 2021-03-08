    <!DOCTYPE html>
        <html>
            <head classe = "header">
                <link rel="stylesheet" href="styleH.css" type="text/css" media="screen" />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                     
            </head>
            <body>
        
                <?php 
                    include ("head2.php");
            
                
                    if ($_POST ['user'] != ""||
                    $_POST ['pass'] != "" ||
                    $_POST ['confirm-pass'] != "" ||
                    $_POST ['birthday'] != "" ||
                    $_POST ['mail'] != "" ||
                    $_POST ['description'] != "" ||
                    $_POST ['phone'] != "" ||
                    $_POST ['pass'] != "confirm-pass") { 
                        echo <meta http-equiv="refresh" content="0"; URL= "inscription.php";
                    }else 
                        echo { <meta http-equiv="refresh" content="0"; URL= "FAQ.php";  } 

            
                   include ("foot2.php");?>
	
			

        </body>
    </html>   
            
        