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

$page_title = "Edit Footer Nav Submenu Label";
$page_group = "footer_nav";	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);

$msg = '';

$footer_nav_label_id = (isset($_GET['footer_nav_label_id']))? $_GET['footer_nav_label_id'] : 0; 
$footer_nav_submenu_label_id = (isset($_GET['footer_nav_submenu_label_id']))? $_GET['footer_nav_submenu_label_id'] : 0;

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$qs_strip = ($strip) ? "strip=1" : ''; 

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>
</head>
<body class="lightbox">
<div class="lightboxholder">
	<?php if($msg != ''){ ?>
	<div class="alert">
		<p><?php echo $msg ?></p>
	</div>
	<?php } 
		$db = $dbCustom->getDbConnect(SITE_N_DATABASE);
		$sql = sprintf("SELECT * 
						FROM footer_nav_submenu_label 
						WHERE footer_nav_submenu_label_id = '%u'
						AND profile_account_id = '%u'", $footer_nav_submenu_label_id, $_SESSION['profile_account_id']);
		$result = $dbCustom->getResult($db,$sql);		
		if($result->num_rows > 0){
			$object = $result->fetch_object();
			$label = $object->label;
			$page_seo_id = $object->page_seo_id;
			$custom_url = $object->custom_url;
			$active = $object->active;
			$display_order = $object->display_order;
			$cat_id = $object->cat_id;
			$keyword_landing_id = $object->keyword_landing_id;
		}else{
			$label = '';
			$page_seo_id = 0;
			$custom_url = '';
			$active = 0;
			$display_order = 0;
			$cat_id = 0;
			$keyword_landing_id = 0;
			
		}
		if(!isset($_SESSION['cat_id'])) $_SESSION['cat_id'] = $cat_id;

	?>

	<form name="edit_footer_nav_submenu_label" action="footer-nav-submenu.php?<?php echo $qs_strip; ?>" method="post" <?php if(!$strip) echo "target='_top'"; ?>>
		<input type="hidden" name="footer_nav_label_id" value="<?php echo $footer_nav_label_id; ?>" />
		<input type="hidden" name="footer_nav_submenu_label_id" value="<?php echo $footer_nav_submenu_label_id; ?>"  />
		<div class="lightboxcontent">
			<h2>Edit <?php echo stripslashes($object->label); ?></h2>
			<fieldset class="colcontainer">
				<div class="twocols"> 
					<!-- Page Label -->
					<label>Label</label>
            		<input type="text" name="label" value="<?php echo stripslashes($label); ?>" />
				</div>
                
	            <?php
                $db = $dbCustom->getDbConnect(SITE_N_DATABASE);
                $sql = "SELECT keyword_landing_id, url_name 
                        FROM keyword_landing 
                        WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
                $result = $dbCustom->getResult($db,$sql);	
                if($result->num_rows > 0){
                ?>				
				<div class="colcontainer">
                	<label>Keyword Landing Page </label>
                    <?php 
    					$block = "<select name='keyword_landing_id'>";
						$block .= "<option value='0'>Select<option>";
    					while($row = $result->fetch_object()) {
							$selected = ($keyword_landing_id == $row->keyword_landing_id)? "selected" : '';
							$block .= "<option value='".$row->keyword_landing_id."' $selected >".$row->url_name."<option>";
						}
						$block .= "</select>";
						echo $block;
                       ?>
				</div>
                <?	
                }
                ?>       
                
				<div class="twocols">
					<label>Static Page</label>
                    <?php 
                    $pages = new Pages;
                    $available_pages_array = $pages->getAvailableNavPages($_SESSION['profile_account_id']);  
                    $block = "<select name='page_seo_id'>";
					$block .= "<option value='0' > Select <option>";
                    foreach($available_pages_array as $value){
						$selected = ($page_seo_id == $value['page_seo_id'])? "selected" : '';										
						$block .= "<option value='".$value['page_seo_id']."' $selected >".ucwords($value['visible_name'])."<option>";
					}
					$block .= "</select>";
					echo $block;
                    ?>
				</div>
			
                <div class="colcontainer">
                    If there is a custom url, selectable page will be ignored.<br />
                    <label>Custom URL</label>
                    <input type="text" name="custom_url" value="<?php echo stripslashes($custom_url); ?>" style="width:300px;">
                </div>
                <br />
                <div class="colcontainer">
                    If there is a category url, selectable page and custom url will be ignored.<br />
                 <label>Category URL</label>
				<?php require_once($real_root."/manage/cms/radio-tree-snippet.php");  ?>
	            </div>

            
            </fieldset>
            
            
            
			<div class="colcontainer">
				<fieldset class="twocols">
					<label>Display Order</label>
            		<input type="text" name="display_order" value="<?php echo $display_order; ?>">
				</fieldset>
				<fieldset class="twocols">
					<label>Active</label>
					<div class="radiotoggle on">  
                    <span class="ontext">ON</span><a class="switch on" href="#"></a><span class="offtext">OFF</span>
						<input class="radioinput" type="radio" name="active" value="1" <?php if($active){echo "checked='checked'";} ?>  />
					</div>
				</fieldset>
			</div>
			<a class="btn btn-large" href="footer-nav-submenu.php?<?php echo "footer_nav_label_id=".$footer_nav_label_id."&".$qs_strip; ?>" target="_top">Cancel</a>
		</div>
        
       	<div class="savebar">
		<?php 
        if($admin_access->ecommerce_level > 1){
            echo "<button class='btn btn-success btn-large' name='edit_footer_nav_submenu_label' type='submit' value='Submit'><i class='icon-ok icon-white'></i> Save Changes</button>"; 
        }else{?>
            <div class="alert"><span class="fltlft"><i class="icon-warning-sign"></i></span> Sorry, you don't have the permissions to edit this item.</div>
        <?php } ?>
        <button class="btn btn-large" type="button" value="Cancel" onClick="top.location.href = 'footer-nav-submenu.php'" >Cancel</button>
		</div>

	</form>
</div>
</body>
</html>



