<!DOCTYPE html>
<html>
<head>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
</head>
<body>

<?php
	if($_POST){
		
	echo $_POST["d"];	
		
	}

?>



<form action="t.php" method="post">
  
<!--<div type="text" id="datepicker" style="font-size:62.5%;"></div>-->

<input type="text" name="d" id="datepicker" value="10/11/2010"/> 
<input type="submit" />
</form>
</body>
</html>