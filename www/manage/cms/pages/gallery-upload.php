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
$showroom_item_id = $_GET['showroom_item_id']; 

require_once($real_root.'/manage/admin-includes/doc_header.php'); 


?>

<body>

<div class="page_title_top_spacer"></div>
<div class="page_title">
Item Gallery File Upload
</div>
<div class="horizontal_bar"></div>
<div class="horizontal_bar_bottom_spacer"></div>

<div class="page_container">
        
    <br /><br />
    <div style="width:300px; margin:auto;">
    
    <fieldset style="padding:10px;">
    <br /><br />
            <form name="upload_to_gallery_form" action="item-gallery.php" method="post" enctype="multipart/form-data">
                <input id="showroom_item_id" type="hidden" name="showroom_item_id" value="<?php echo $showroom_item_id;  ?>" />
                Upload File<br />
                <input type="file" name="uploadedfile"><br /><br />             
    
        <div style="padding-top:33px; padding-right:80px; float:left;">		
            <input name="upload_to_gallery" type="submit" value="Submit" />
        </div>
        <div style="padding-top:33px; float:left;">		
            <input type="button" value="Cancel" onClick="location.href = 'item-gallery.php?showroom_item_id=<?php echo  $showroom_item_id; ?>'; " />
        </div>
    
    
    </form>
    </fieldset>
    </div>

</div>

</body>
</html>

