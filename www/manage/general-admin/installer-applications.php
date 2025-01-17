<?php
if(strpos($_SERVER['REQUEST_URI'], 'solvitware/' )){ 
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/solvitware';
}elseif(strpos($_SERVER['REQUEST_URI'], 'designitpro' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/designitpro'; 
}elseif(strpos($_SERVER['REQUEST_URI'], 'storittek/' )){  
	$real_root = $_SERVER['DOCUMENT_ROOT'].'/storittek'; 
}else{
	$real_root = $_SERVER['DOCUMENT_ROOT']; 	
}
require_once($real_root.'/includes/class.dbcustom.php');
$dbCustom = new DbCustom();
require_once($real_root.'/manage/admin-includes/manage-includes.php');

$progress = new SetupProgress;
$module = new Module;

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$page ="miscellaneous";



if(isset($_POST["del_installer"])){

	if($user_level > 1){
		$installer_id = $_POST["del_installer_id"];
		$sql = sprintf("UPDATE installer_application SET hide = '1' 
						WHERE installer_id = '%u'
						AND profile_account_id = '%u'", $installer_id, $_SESSION['profile_account_id']);
		$result = $dbCustom->getResult($db,$sql);
		
	}else{
		$msg = "You are not authorised to delete.";		
	}

}

require_once($real_root.'/manage/admin-includes/doc_header.php'); 


?>
<script>
$(document).ready(function() {
	

	$(".inline").click(function(){ 
	

		if(this.href.indexOf("delete") > 1){
			var f_id = $(this).find(".e_sub").attr('id');
			//alert("del"+this.href.indexOf("delete"));
			//alert("f_id"+f_id);
			$("#del_installer_id").val(f_id);
			
		}	
	
		
	})


	
	$("a.inline").fancybox();
	
});




</script>
</head>

<body>

<?php 
include($real_root."/manage/admin-includes/manage-header.php"); 
include($real_root."/manage/admin-includes/manage-nav.php"); 
?>

<div class="page_title_top_spacer"></div>
<div class="page_title">
	Installer Applications
   	<div class="top_right_link">
    </div>
    
</div>
<div class="horizontal_bar"></div>
<div class="horizontal_bar_bottom_spacer"></div>

<div class="page_container">

<?php
$msg =  (isset($_GET['msg'])) ? $_GET['msg'] : $msg;
echo "<div style='color:blue;'>".$msg."</div>";  
?>
  <table border="0" width="100%" cellpadding="10">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="25%"><div class="head">Date Submitted</div></td>
    <td width="25%"><div class="head">Name</div></td>
    <td width="25%"><div class="head">City State</div></td>
    <td><div class="head">Insured</div></td>
    
  </tr>
    <?php


	$sql = "SELECT * FROM installer_application 
			WHERE hide = '0'
			AND profile_account_id = '".$_SESSION['profile_account_id']."'";
    $result = $dbCustom->getResult($db,$sql);	

    while($row = $result->fetch_object()) {
    
		$block = "<tr>"; 


		$block .= "<td valign='top'><a href='view-installer.php?installer_id=".$row->installer_id."'>
		<img src='".SITEROOT."/images/button_view.jpg' /></a></td>";


		$block .= "<td valign='top'><a class='inline' href='#delete'>
		<img src='".SITEROOT."/images/button_delete.jpg' /><div class='e_sub' id='".$row->installer_id."' style='display:none'></div> </a></td>";


		$block .= "<td valign='top'>".date("F j, Y, g:i a", $row->date_submitted)."</td>";			

		$block .= "<td valign='top'>$row->first_name $row->last_name</td>";			
	
		$block .= "<td valign='top'>$row->city $row->state</td>";	
		
		$insured =  ($row->insurance_policy_num != '') ? "yes" : "no";
		$block .= "<td valign='top'>$insured</td>";	
		
	
		$block .= "</tr>";
		
		echo $block;
	}

	?>
    </table>
    
    
    <div style="display:none">
        <div id="delete" style="width:300px; height:100px;">
        	<br />
            Are you sure you want to delete this installer?
            <form name="del_installer" action="installer-applications.php" method="post">
                <input id="del_installer_id" type="hidden" name="del_installer_id" />
                <input name="del_installer" type="submit" value="DELETE" />
            </form>
        </div>
    </div>

    
    
</div>

</body>
</html>



