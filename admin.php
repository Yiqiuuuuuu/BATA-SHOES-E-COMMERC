<?php include 'connect.php';
if(isset($_REQUEST["number"])){
	$nationalIdNo=$_REQUEST["number"];
		if($nationalIdNo==""||$nationalIdNo==NULL)
	        {
             echo "<script type='text/javascript'>
				document.location = 'administration.php';
				</script>";exit;
				}
			
	       else
	       {
	       mysql_connect("$host", "$user", "$pass") or die (mysql_error());	
	       mysql_select_db("$db") or die(mysql_error());
	       $strSQL = "SELECT * FROM administrators where nationalIdNo='$nationalIdNo'";	
	       $rs = mysql_query($strSQL);	
	       if(mysql_num_rows($rs)==0){
	        echo "<script type='text/javascript'>
				document.location = 'administration.php';
				</script>";exit;
				}
			}
		}
		 else
	      {
		       echo "<script type='text/javascript'>
				document.location = 'administration.php';
				</script>";exit;
	          }			
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<title>ELECTRONICS</title>
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<link rel="stylesheet" href="css/maini.css" type="text/css">
	<script type="text/javascript" src="js5/jquery.js"></script>
	<script type="text/javascript" src="js5/jquery.slideshow.min.js"></script>
	<script type="text/javascript" src="js5/jquerytiming.js"></script>
    <script type="text/javascript" src="ajaxslide.js"></script>
	
	
<script src="Scripts/jquery-latest.js" type="text/javascript"></script>
<script src="Scripts/thickbox.js" type="text/javascript"></script>
<link href="css/thickbox.css" rel="stylesheet" type="text/css" />


<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<script src="Scripts/jquery-latest.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>


<body>
	<div id="header">
	<div id="headerinside">	
		
 <div  align="left"id="logo"><img src="images/logo.png" width="261" height="40"></div>	
		
	</div>
	<div id="topmenu">
	
	
	<A HREF="index.php?e=""">HOME</A>
	
	
	</div>
<div id="search" align="center">  
           <div align="center" style="float:left;  width:450px; margin:auto;">  </div>
		  
		 <div align="center" style=" width:450px; float:left">		
	</div>
			
</div>

	</div>  

<div id="container">
<img src="images/top-header.jpg" />



<div id="inner_contentColumn" class="middlecolumn" align="center" >

<div id=log1 style="margin-top:20px; margin-bottom:20px;"><br>	
	<form  action="adminlogin.php"method="post">
	<p align="center">Administrator User Name:<br> <input type="text" size="30" name="username" /></p>
	<p align="center">Password:<br> <input type="password" size="30" name="password" /></p>
	<input type="hidden"  name="attempts" value="<?php echo $_REQUEST["attempts"]; ?>" />
	<input type="hidden"  name="number" value="<?php echo $_REQUEST["number"]; ?>" />
	<p align="center"><input type="submit" value="Log Me In" /></p>
	</form>
			
	</div>
	</div>		



<div id="footer">
<P align="center">� Copyright | 2014|  ~ All Rights Reserved|   <A HREF="administration.php">Admin Login</A></p>

<img src="images/botround.jpg" width="980" height="15" alt="" />
</div>
</div>
</body>
</html>
