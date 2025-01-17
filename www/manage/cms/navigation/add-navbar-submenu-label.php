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


$page_title = "Navbar Submenu Label";
$page_group = "navbar";

	

$db = $dbCustom->getDbConnect(SITE_N_DATABASE);


$navbar_label_id = (isset($_GET['navbar_label_id'])) ? $_GET['navbar_label_id'] : 0; 
$parent_submenu_id = (isset($_GET['parent_submenu_id'])) ? $_GET['parent_submenu_id'] : 0; 
$ret_page = (isset($_REQUEST['ret_page'])) ? $_REQUEST['ret_page'] : 'navbar';

//echo $ret_page;

$msg = '';

$strip = (isset($_GET['strip'])) ? $_GET['strip'] : 0;
$qs_strip = ($strip) ? "strip=1" : ''; 

require_once($real_root.'/manage/admin-includes/doc_header.php'); 

?>

<script src="<?php echo SITEROOT; ?>js/jquery.valid8.js"></script> 


<script>

$(document).ready(function() {

	$('#label').valid8('Label is required');

});

</script>
</head>
<body class="lightbox">
<div class="lightboxholder">
	<?php if($msg != ''){ ?>
	<div class="alert">
		<p><?php echo $msg; ?></p>
	</div>
	<?php } ?>
	<form name="add_navbar_submenu_label" action="navbar-submenu.php?<?php echo $qs_strip; ?>" method="post" <?php if(!$strip) echo "target='_top'"; ?> >
		
        
        <input type="hidden" name="navbar_label_id" value="<?php echo $navbar_label_id; ?>"  />
        <input type="hidden" name="parent_submenu_id" value="<?php echo $parent_submenu_id; ?>"  />
		<input type="hidden" name="ret_page" value="<?php echo $ret_page; ?>"  />
        
    	<div class="lightboxcontent">
		<h2>Add New Subnavigation Item</h2>
        
			<fieldset> 
            
            <div class="colcontainer">
				<div class="twocols">
					<label>Label</label>
            		<input id="label" type="text" name="label" />
				</div>
			
				<div style="clear:both;"></div>	            
            
				<?php
                $db = $dbCustom->getDbConnect(SITE_N_DATABASE);
                $sql = "SELECT keyword_landing_id, url_name 
                        FROM keyword_landing 
                        WHERE profile_account_id = '".$_SESSION['profile_account_id']."'";
                $result = $dbCustom->getResult($db,$sql);	
                if($result->num_rows > 0){
                
                ?>				
                    <div class="twocols">
                        <label>Keyword Lading Page </label>
                        <?php 
    						$block = "<select name='keyword_landing_id'>";
							$block .= "<option value='0'> Select <option>";
    						while($row = $result->fetch_object()) {
					
								$block .= "<option value='".$row->keyword_landing_id."' >".$row->url_name."<option>";
					
							}
							$block .= "</select>";
							echo $block;
                        ?>
                    </div>
                
                <?	
                }
                ?>                
              
            	<div style="clear:both;"></div>
            
            
            	<div class="twocols">
					<label>Selectable Page </label>
                    <?php 
                    $pages = new Pages;
                    $available_pages_array = $pages->getAvailableNavPages($_SESSION['profile_account_id']);  
                    $block = "<select name='page_seo_id'>";
					
					$block .= "<option value='0'> Select <option>";
                    
					foreach($available_pages_array as $value){
						$block .= "<option value='".$value['page_seo_id']."' >".ucwords($value['visible_name'])."<option>";
					}
					$block .= "</select>";
					echo $block;
                    ?>
				</div>
          
                
			     <div style="clear:both;"></div> 
                
            <div class="twocols">
                If there is a custom url, selectable page will be ignored.<br />
                <label>Custom URL</label>
            	<input type="text" name="custom_url"  style="width:300px;" />
			</div>
			
            <div style="clear:both;"></div>
            
            <div class="twocols">
	            If there is a category url, selectable page and custom url will be ignored.<br />
            	<label>Category URL</label>
				<?php require_once($real_root."/manage/catalog/categories/category-tree-snippet.php");  ?>
			</div>

			<div style="clear:both;"></div>
            
			</fieldset>
            
            <a class="btn btn-large" href="navbar-submenu.php?<?php echo "parent_submenu_id=".$parent_submenu_id."&".$qs_strip; ?>" 
            
			<?php if (!$strip) echo "target='_top'"; ?> >Cancel</a>
			</div>
			
            <div class="savebar">
				<button class="btn btn-large btn-success" name="add_navbar_submenu_label" type="submit" />
                <i class="icon-ok icon-white"></i> Add Subnavigation Item</button>
			</div>
	</form>
</div>

</body>
</html>


