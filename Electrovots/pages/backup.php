<?php
session_start();
include('../include/check_Login_Pages.php');
if(isset($_SESSION['sess_name'])){
	$name=$_SESSION['sess_name'];
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BACKUP Database</title>
<link rel="shortcut icon" href="../favicon.png" type="image/x-png" />
<link href="../css/main.css" rel="stylesheet" type="text/css"/>
	
</head>

<body>
	<div id="topcontainer">
    	<?php include('../include/menubar.php'); ?>
    </div> <!-- top container-->
    
    <div id="bodycontainer">
    	<div id="toolbodybar">
        	<div id="bodytext">BACK-UP DATABASE</div>
        </div>  	
    		<div id="toolbodyruler"></div>
            	<div id="bodycontent">
                
 						<div id="buttoncontainer">
                        		
                 	<?php if(isset($_POST["backup"])){
                  	 include('../include/backup.php'); 
					}
					else{
						echo "<form action='backup.php' method='post' enctype='multipart/form-data'>";
                 		echo "<input type='image' src='../photo/backup1.png' name='backup' value='backup'>";
                  		echo "</form>";
					}?>
                  
 					    </div>
           
                
                	<div id="ssglogobackup"></div>
                
                </div><!-- body container-->
    </div><!-- body container-->
</body>
</html>


		
           